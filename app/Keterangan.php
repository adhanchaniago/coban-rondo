<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $table = 'keterangan_table';
	protected $primaryKey = 'id_ket';

    protected $fillable = [
        'id_program', 'nama_ket','quantity_ket'
    ];

    public function program(){
    	return $this->belongsTo('App\Program', 'id_program', 'id_program');
    }

}
