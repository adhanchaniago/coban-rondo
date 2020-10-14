<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealing extends Model
{
    protected $table = 'dealing_table';
	protected $primaryKey = 'id_dealing';

    protected $fillable = [
        'id_sales','id_penawaran', 'tgl_LKO',
    ];

    public function sales(){
    	return $this->belongsTo('App\Sales', 'id_sales', 'id_sales');
    }

    public function penawaran(){
    	return $this->belongsTo('App\Penawaran', 'id_penawaran', 'id_penawaran');
    }

}
