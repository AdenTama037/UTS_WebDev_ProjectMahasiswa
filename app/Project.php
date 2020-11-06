<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['namaProject','namaMahasiswa','deskripsiProject'];
    public function mahasiswas()
    {
        return $this->hasMany('App\Mahasiswa');
    }
}
?>
