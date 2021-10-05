<?php

namespace App\Exports;

use App\Models\BarangKeluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangKeluarExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BarangKeluar::all();
    }

    public function headings(): array
    {
        return [
            'kode',
            'id_barang',
            'jumlah',
            'penanggung_jawab',
            'tgl_keluar',
            'created_at',
            'update_at',
        ];
    }
}
