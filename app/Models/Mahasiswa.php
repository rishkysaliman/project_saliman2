<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $fillable = ['nama','nim','id_dosen'];
    public $timestamps = true;

    public function wali(){
        return $this->hasOne(wali::class,'id_mahasiswa');
    }
    // one to many
    public function dosen (){
          return $this->belongsTo(Dosen::class,'id_dosen');
    }
    //relasi many to many
     public function hobi ()
     {
            //mahasiswa memiliki relasi many to many
          return $this->belongsToMany(Hobi::class,
          'mahasiswa_hobi',
          'id_mahasiswa',
          'id_hobi'
     );
    }
}
