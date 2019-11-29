<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';
    public $timestamps = false;
    protected $fillable = array('name', 'image', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
