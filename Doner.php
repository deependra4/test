<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id', 'project_id', 'amount', 'method',
    ];
}
