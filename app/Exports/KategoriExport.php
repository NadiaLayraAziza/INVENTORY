<?php

namespace App\Exports;

use App\Models\Kategori;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KategoriExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kategori::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Kode Kategori',
            'Nama Kategori',
            'Keterangan',
            'Created_at',
            'Update_at',
        ];
    }
}
