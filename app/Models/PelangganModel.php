<?php

namespace App\Models;

class PelangganModel
{
    // Fungsi dummy seolah mengambil dari database
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'nama' => 'Andi', 'email' => 'andi@mail.com', 'telepon' => '081234567890'],
            ['id' => 2, 'nama' => 'Budi', 'email' => 'budi@mail.com', 'telepon' => '081298765432'],
            ['id' => 3, 'nama' => 'Citra', 'email' => 'citra@mail.com', 'telepon' => '081212341234'],
        ];
    }

    public static function all()
    {
        return self::getDummyData();
    }

    public static function find($id)
    {
        $pelanggan = self::getDummyData();
        foreach ($pelanggan as $p) {
            if ($p['id'] == $id) {
                return $p;
            }
        }
        return null;
    }
}
