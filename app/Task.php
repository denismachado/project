<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function complete($completed){

        $this->update(compact($completed));
    }

    public function incomplete($completed = false){
        $this->complete(false);

    }
}