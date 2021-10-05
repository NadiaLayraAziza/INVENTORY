<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Kode Barang',
            'Nama barang',
            'Merk barang',
            'Gambar',
            'Jumlah Barang',
            'Harga',
            'Bahan',
            'Tanggal Input',
            'Nama Kategori',
            'Id Kategori',
            'Id Supplier',
            'Created_at',
            'Updated_at',
        ];
    }
}
