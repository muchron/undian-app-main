<?php

namespace App\Imports;

use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\PesertaUmumLima as ModelsPesertaUmumLima;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class PesertaUmumLima implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    use RemembersRowNumber;
    public function model(array $row)
    {
        $currentRowNumber = $this->getRowNumber();
        $tanggal = \Carbon\Carbon::createFromFormat('d/m/Y', $row['tanggal_lahir'])->format('Y-m-d');
        $checkRegister = ModelsPesertaUmumLima::where('noreg', $row['noreg'])->first();
        if(empty($checkRegister)){
            return new ModelsPesertaUmumLima([
                'noreg'  => $row['noreg'],
                'nik' => $row['nik'],
                'nama_peserta' => $row['nama'],
                'tanggal_lahir' => $tanggal,
                'saldo' => $row['saldo'],
                'poin' => $row['poin']
            ]);
        }
    }

    public function headingRow(): int
    {
        return 2;
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 1000;
    }
}
