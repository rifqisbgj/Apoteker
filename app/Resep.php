<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';
    protected $primaryKey = 'NomorResep';
    public $incrementing = false;
    public $timestamps = false;
}