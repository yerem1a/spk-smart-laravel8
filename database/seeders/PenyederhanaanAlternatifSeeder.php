<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenyederhanaanAlternatif;

class PenyederhanaanAlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["alternatif" => "A1", "jumlah_tanggungan" => 2, "status" => 3, "pendidikan_terakhir" => 5, "penghasilan" => 12000000, "pengeluaran" => 7000000],
            ["alternatif" => "A2", "jumlah_tanggungan" => 0, "status" => 3, "pendidikan_terakhir" => 4, "penghasilan" => 860000, "pengeluaran" => 500000],
            ["alternatif" => "A3", "jumlah_tanggungan" => 0, "status" => 2, "pendidikan_terakhir" => 5, "penghasilan" => 3850000, "pengeluaran" => 1500000],
            ["alternatif" => "A4", "jumlah_tanggungan" => 1, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 7000000, "pengeluaran" => 5050000],
            ["alternatif" => "A5", "jumlah_tanggungan" => 1, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 10000000, "pengeluaran" => 8500000],
            ["alternatif" => "A6", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3500000, "pengeluaran" => 1800000],
            ["alternatif" => "A7", "jumlah_tanggungan" => 5, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5000000, "pengeluaran" => 4300000],
            ["alternatif" => "A8", "jumlah_tanggungan" => 1, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 1500000, "pengeluaran" => 1000000],
            ["alternatif" => "A9", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4460000, "pengeluaran" => 2500000],
            ["alternatif" => "A10", "jumlah_tanggungan" => 0, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 500000, "pengeluaran" => 0],
            ["alternatif" => "A11", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 2300000, "pengeluaran" => 1800000],
            ["alternatif" => "A12", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 1500000, "pengeluaran" => 1200000],
            ["alternatif" => "A13", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 2, "penghasilan" => 3000000, "pengeluaran" => 2000000],
            ["alternatif" => "A14", "jumlah_tanggungan" => 5, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3260000, "pengeluaran" => 2500000],
            ["alternatif" => "A15", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 2000000, "pengeluaran" => 1500000],
            ["alternatif" => "A16", "jumlah_tanggungan" => 1, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 1500000, "pengeluaran" => 1000000],
            ["alternatif" => "A17", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 1500000, "pengeluaran" => 1200000],
            ["alternatif" => "A18", "jumlah_tanggungan" => 2, "status" => 3, "pendidikan_terakhir" => 2, "penghasilan" => 1550000, "pengeluaran" => 700000],
            ["alternatif" => "A19", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3000000, "pengeluaran" => 2500000],
            ["alternatif" => "A20", "jumlah_tanggungan" => 5, "status" => 2, "pendidikan_terakhir" => 2, "penghasilan" => 2500000, "pengeluaran" => 2300000],
            ["alternatif" => "A21", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 1, "penghasilan" => 1800000, "pengeluaran" => 1500000],
            ["alternatif" => "A22", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3460000, "pengeluaran" => 1800000],
            ["alternatif" => "A23", "jumlah_tanggungan" => 2, "status" => 3, "pendidikan_terakhir" => 4, "penghasilan" => 950000, "pengeluaran" => 850000],
            ["alternatif" => "A24", "jumlah_tanggungan" => 0, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3500000, "pengeluaran" => 2500000],
            ["alternatif" => "A25", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5000000, "pengeluaran" => 3500000],
            ["alternatif" => "A26", "jumlah_tanggungan" => 5, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 10000000, "pengeluaran" => 8700000],
            ["alternatif" => "A27", "jumlah_tanggungan" => 1, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4500000, "pengeluaran" => 4000000],
            ["alternatif" => "A28", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 2500000, "pengeluaran" => 1600000],
            ["alternatif" => "A29", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 2, "penghasilan" => 1560000, "pengeluaran" => 1000000],
            ["alternatif" => "A30", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 2340000, "pengeluaran" => 1600000],
            ["alternatif" => "A31", "jumlah_tanggungan" => 0, "status" => 1, "pendidikan_terakhir" => 3, "penghasilan" => 1000000, "pengeluaran" => 700000],
            ["alternatif" => "A32", "jumlah_tanggungan" => 0, "status" => 1, "pendidikan_terakhir" => 3, "penghasilan" => 6500000, "pengeluaran" => 3500000],
            ["alternatif" => "A33", "jumlah_tanggungan" => 0, "status" => 1, "pendidikan_terakhir" => 5, "penghasilan" => 2500000, "pengeluaran" => 1000000],
            ["alternatif" => "A34", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 2000000, "pengeluaran" => 1500000],
            ["alternatif" => "A35", "jumlah_tanggungan" => 0, "status" => 1, "pendidikan_terakhir" => 3, "penghasilan" => 6870000, "pengeluaran" => 4600000],
            ["alternatif" => "A36", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 7680000, "pengeluaran" => 5500000],
            ["alternatif" => "A37", "jumlah_tanggungan" => 5, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 7450000, "pengeluaran" => 5700000],
            ["alternatif" => "A38", "jumlah_tanggungan" => 5, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 13000000, "pengeluaran" => 10000000],
            ["alternatif" => "A39", "jumlah_tanggungan" => 3, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 3450000, "pengeluaran" => 3000000],
            ["alternatif" => "A40", "jumlah_tanggungan" => 1, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 1200000, "pengeluaran" => 800000],
            ["alternatif" => "A41", "jumlah_tanggungan" => 5, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 2050000, "pengeluaran" => 1400000],
            ["alternatif" => "A42", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3040000, "pengeluaran" => 1800000],
            ["alternatif" => "A43", "jumlah_tanggungan" => 0, "status" => 2, "pendidikan_terakhir" => 2, "penghasilan" => 1000000, "pengeluaran" => 800000],
            ["alternatif" => "A44", "jumlah_tanggungan" => 0, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 1500000, "pengeluaran" => 500000],
            ["alternatif" => "A45", "jumlah_tanggungan" => 2, "status" => 1, "pendidikan_terakhir" => 3, "penghasilan" => 2500000, "pengeluaran" => 1800000],
            ["alternatif" => "A46", "jumlah_tanggungan" => 0, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3500000, "pengeluaran" => 1000000],
            ["alternatif" => "A47", "jumlah_tanggungan" => 2, "status" => 3, "pendidikan_terakhir" => 1, "penghasilan" => 1500000, "pengeluaran" => 1100000],
            ["alternatif" => "A48", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 2, "penghasilan" => 1500000, "pengeluaran" => 1200000],
            ["alternatif" => "A49", "jumlah_tanggungan" => 2, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 2000000, "pengeluaran" => 1800000],
            ["alternatif" => "A50", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 2800000, "pengeluaran" => 2500000],
            ["alternatif" => "A51", "jumlah_tanggungan" => 1, "status" => 3, "pendidikan_terakhir" => 3, "penghasilan" => 2000000, "pengeluaran" => 1800000],
            ["alternatif" => "A52", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5400000, "pengeluaran" => 3800000],
            ["alternatif" => "A53", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4580000, "pengeluaran" => 4000000],
            ["alternatif" => "A54", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5480000, "pengeluaran" => 4500000],
            ["alternatif" => "A55", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5860000, "pengeluaran" => 4000000],
            ["alternatif" => "A56", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4800000, "pengeluaran" => 4000000],
            ["alternatif" => "A57", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 6860000, "pengeluaran" => 4000000],
            ["alternatif" => "A58", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 7070000, "pengeluaran" => 6500000],
            ["alternatif" => "A59", "jumlah_tanggungan" => 4, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 6700000, "pengeluaran" => 4000000],
            ["alternatif" => "A60", "jumlah_tanggungan" => 1, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5050000, "pengeluaran" => 3000000],
            ["alternatif" => "A61", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 4, "penghasilan" => 7850000, "pengeluaran" => 6000000],
            ["alternatif" => "A62", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4030000, "pengeluaran" => 3000000],
            ["alternatif" => "A63", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4500000, "pengeluaran" => 3500000],
            ["alternatif" => "A64", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3800000, "pengeluaran" => 3000000],
            ["alternatif" => "A65", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 4870000, "pengeluaran" => 3800000],
            ["alternatif" => "A66", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5600000, "pengeluaran" => 4800000],
            ["alternatif" => "A67", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 6780000, "pengeluaran" => 6000000],
            ["alternatif" => "A68", "jumlah_tanggungan" => 2, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 5600000, "pengeluaran" => 4500000],
            ["alternatif" => "A69", "jumlah_tanggungan" => 1, "status" => 3, "pendidikan_terakhir" => 4, "penghasilan" => 2850000, "pengeluaran" => 2500000],
            ["alternatif" => "A70", "jumlah_tanggungan" => 3, "status" => 2, "pendidikan_terakhir" => 3, "penghasilan" => 3450000, "pengeluaran" => 3000000],
        ];

        foreach ($data as $row) {
            PenyederhanaanAlternatif::create($row);
        }
    }
}
