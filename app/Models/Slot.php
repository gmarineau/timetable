<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'when', 
        'user_id', 
        'project_id',
        'time',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'when',
    ];

    public function project() {
        return $this->belongsTo('App\Models\Project');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
