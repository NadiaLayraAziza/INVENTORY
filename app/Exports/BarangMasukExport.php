<?php

namespace App\Exports;

use App\Models\BarangMasuk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangMasukExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BarangMasuk::all();
    }

    public function headings(): array
    {
        return [
            'Kode Masuk',
            'Id Keluar',
            'Id Barang',
            'Jumlah Masuk',
            'Tanggal Masuk',
            'Created_at',
            'Update_at',
        ];
    }
}
