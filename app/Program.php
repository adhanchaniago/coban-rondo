<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
   protected $table = 'program_table';
	protected $primaryKey = 'id_program';

    protected $fillable = [
        'nama_program', 'durasi','hargapax','minimalpax'
    ];

    public function dealing(){
    	return $this->hasMany('App\Dealing', 'id_program', 'id_program');
    }

    public function fasilitas(){
    	return $this->hasMany('App\Fasilitas', 'id_program', 'id_program');
    }

    public function keterangan(){
    	return $this->hasMany('App\Keterangan', 'id_program', 'id_program');
    }       

    public function penawaran()
    {
    	return $this->hasMany('App\Penawaran', 'id_penawaran', 'id_penawaran');
    }
}
