<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Fungsi dummy seolah mengambil dari database
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'nama' => 'Andi', 'email' => 'andi@mail.com', 'telepon' => '081234567890'],
            ['id' => 2, 'nama' => 'Budi', 'email' => 'budi@mail.com', 'telepon' => '081298765432'],
            ['id' => 3, 'nama' => 'Citra', 'email' => 'citra@mail.com', 'telepon' => '081212341234'],
        ];
    }

    public static function getAll()
    {
        return Pelanggan::all();
    }

    public static function find($id)
    {
        return Pelanggan::where('id', $id)->first();
    }
}
