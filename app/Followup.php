<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    protected $table = 'followup_table';
	protected $primaryKey = 'id_followup';

    protected $fillable = [
        'id_penawaran','id_sales','tgl_followup',
        'responden','respon'
    ];

    public function penawaran(){
    	return $this->belongsTo('App\Penawaran', 'id_penawaran', 'id_penawaran');
    }

    public function sales(){
    	return $this->belongsTo('App\Sales', 'id_sales', 'id_sales');
    }

}
