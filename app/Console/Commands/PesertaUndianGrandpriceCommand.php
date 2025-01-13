<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use App\Models\UndianGrandprice;
use App\Models\PesertaGrandPrice;

class PesertaUndianGrandpriceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:peserta-grand-price';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat nomor undian peserta grandprice';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        PesertaGrandPrice::chunk(500, function ($peoples) {
            foreach ($peoples as $people) {
                $noreg = $people->noreg;
                $poin  = $people->poin;
                $kode    = Str::substr($noreg, 0, 3);
                $wilayah = Str::substr($noreg, 3, 3);
                $urutan  = Str::substr($noreg, -6);

                for ($i=1; $i <= $poin; $i++) {
                    if ($i < 10) {
                        $unik = '00'.$i;
                    }else if($i < 100){
                        $unik = '0'.$i;
                    }else{
                        $unik = $i;
                    }
                    $no_peserta = $kode.'-'.$wilayah.'-'.$urutan.'-'.$unik;
                    UndianGrandprice::create([
                        'nomor_undian' => $no_peserta,
                        'nama_peserta' => $people->nama_peserta,
                        'peserta_grandprice_id' => $people->id,
                    ]);
                }
            }
        });
        $this->info('Undian peserta umum berhasil di buat');
    }
}
