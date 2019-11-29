<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'photos';
    public $timestamps = false;
    protected $fillable = array('url', 'ext', 'project_id');

    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }

}
