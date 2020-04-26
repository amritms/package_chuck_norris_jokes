<?php

namespace Amritms\ChuckNorrisJokes\Models;

use Illuminate\Database\Eloquent\Model;

Class Joke extends Model
{
    protected $guarded = [];
    
    protected $table = 'jokes';
}