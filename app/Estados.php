<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    public $timestamps = false;
    protected $table = "estados";
    protected $dates = ['dt_cadastro'];
   
}
