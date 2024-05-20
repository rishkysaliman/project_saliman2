<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hobi;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Wali;
use DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run ()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();


        $dosen = Dosen::create([
            'nama'=>'yulianto',
            'nipd'=>'123456789',
        ]);

        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072',
            'id_dosen'=> $dosen->id,
        ));

        # Mahasiswa Kedua bernama Djaffar. Dengan NIM 1015015088.
        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088',
            'id_dosen'=> $dosen->id,
        ));


        # Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim' => '1015015078',
            'id_dosen'=> $dosen->id,
        ));
        # Informasi ketika mahasiswa telah diisi.
        $this->command->info('Mahasiswa telah diisi!');


        Wali::create(array(
            'nama' => 'Achmad S',
            'id_mahasiswa' => $novay->id,
        ));

        # Ciptakan wali si $dije
        Wali::create(array(
            'nama' => 'Entahlah',
            'id_mahasiswa' => $dije->id,
        ));

        # Ciptakan wali si $ayu
        Wali::create(array(
            'nama' => 'Arianto',
            'id_mahasiswa' => $ayu->id,
        ));
         $this->command->info('Mahasiswa telah diisi!');

        // sample hobi
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        $mandi_hujan = Hobi::create(['hobi' => 'Mandi Hujan']);
        $baca_buku = Hobi::create(['hobi' => 'Baca Buku']);

        //melampirkan hobi ke mahasiswa
        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);
    }
}
