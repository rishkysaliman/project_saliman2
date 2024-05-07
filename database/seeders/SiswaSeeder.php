<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            'nama' => "saliman",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "jl.cibaduyut",
        ]);
          Siswa::insert([
            'nama' => "ryandra",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "jl.cibogo",
        ]);
          Siswa::insert([
            'nama' => "mardian",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "jl.sayati",
        ]);
          Siswa::insert([
            'nama' => "sabrina",
            'jenis_kelamin' => 1,
            'umur' => 10,
            'alamat' => "jl.cibedug",
        ]);
          Siswa::insert([
            'nama' => "fadilah",
            'jenis_kelamin' => 0,
            'umur' => 19,
            'alamat' => "jl.citamiang",
        ]);
          Siswa::insert([
            'nama' => "zikri",
            'jenis_kelamin' => 0,
            'umur' => 11,
            'alamat' => "jl.rancamanyar",
        ]);
          Siswa::insert([
            'nama' => "sahwal",
            'jenis_kelamin' => 0,
            'umur' => 34,
            'alamat' => "jl.tarate",
        ]);
          Siswa::insert([
            'nama' => "prili",
            'jenis_kelamin' => 1,
            'umur' => 40,
            'alamat' => "jl.katapang",
        ]);
          Siswa::insert([
            'nama' => "fikri",
            'jenis_kelamin' => 0,
            'umur' => 80,
            'alamat' => "jl.bojongloa",
        ]);
          Siswa::insert([
            'nama' => "putri",
            'jenis_kelamin' => 1,
            'umur' => 90,
            'alamat' => "jl.lewidulang",
        ]);
    }
}
