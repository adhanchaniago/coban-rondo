<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    protected $table = 'penawaran_table';
	protected $primaryKey = 'id_penawaran';

    protected $fillable = [
        'id_client', 'id_sales','id_program','tgl_penawaran','tgl_pelaksanaan',
        'media','mp'
    ];

    public function client()
    {
    	return $this->belongsTo('App\Client', 'id_client', 'id_client');
    }

    public function sales()
    {
    	return $this->belongsTo('App\Sales', 'id_sales', 'id_sales');
    }

    public function followup(){
    	return $this->hasMany('App\Followup', 'id_penawaran', 'id_penawaran');
    } 

    public function dealing(){
    	return $this->hasOne('App\Dealing', 'id_penawaran', 'id_penawaran');
    } 

    public function program()
    {
    	return $this->belongsTo('App\Program', 'id_program', 'id_program');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($penawaran) { // before delete() method call this
             $penawaran->client()->delete();
             $penawaran->followup()->delete();
             $penawaran->dealing()->delete();
             // do the rest of the cleanup...
        });
    }
}
