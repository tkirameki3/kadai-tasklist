<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    protected $fillable = ['content'];
    
    public function user()
    {
        return $this->bolongTo(User::class);
    }
}
