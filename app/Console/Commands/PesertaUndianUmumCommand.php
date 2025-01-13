<?php

namespace App\Console\Commands;

use App\Models\PesertaUmum;
use App\Models\Undian;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PesertaUndianUmumCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:peserta-umum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat nomor undian peserta umum';

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
        PesertaUmum::chunk(500, function ($peoples) {
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
                    Undian::create([
                        'nomor_undian' => $no_peserta,
                        'nama_peserta' => $people->nama_peserta,
                        'peserta_umum_id' => $people->id,
                    ]);
                }
            }
        });
        $this->info('Undian peserta umum berhasil di buat');
    }
}
