<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $table = 'pages';
    public $timestamps = false;
    protected $fillable = array('title', 'content', 'image', 'show_in_menu', 'slug', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
