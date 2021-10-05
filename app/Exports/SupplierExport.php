<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SupplierExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplier::all();
    }
    public function headings(): array
    {
        return [
            'Kode',
            'Nama',
            'Alamat',
            'Telp',
            'Kota',
            'Penyedia',
            'Created_at',
            'Update_at',
        ];
    }
}
