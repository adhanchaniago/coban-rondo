<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client_table';
	protected $primaryKey = 'id_client';

    protected $fillable = [
        'nama_client', 'tgllahir_client','alamat','tlp_client','instansi','web','email',
        'pic','cp','cr'
    ];

    public function penawaran()
    {
    	return $this->hasOne('App\Penawaran', 'id_client', 'id_client');
    }
}
