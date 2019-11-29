<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'image', 'slug', 'is_active', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
