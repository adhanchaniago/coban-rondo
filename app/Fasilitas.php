<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas_table';
	protected $primaryKey = 'id_fasilitas';

    protected $fillable = [
        'id_program','nama_fasilitas','quantity_fasilitas'
    ];

    public function program(){
    	return $this->belongsTo('App\Program', 'id_program', 'id_program');
    }

}
