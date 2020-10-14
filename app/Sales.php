<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
	protected $table = 'sales_table';
	protected $primaryKey = 'id_sales';

    protected $fillable = [
        'nama_sales', 'notlp_sales',
    ];

    public function dealing(){
    	return $this->hasMany('App\Dealing', 'id_sales', 'id_sales');
    }

    public function followup(){
    	return $this->hasMany('App\Followup', 'id_sales', 'id_sales');
    }

    public function penawaran()
    {
    	return $this->hasMany('App\Penawaran', 'id_sales', 'id_sales');
    }    
}
