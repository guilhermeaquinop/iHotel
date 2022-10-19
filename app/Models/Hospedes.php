<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedes extends Model
{
    use HasFactory;

    protected $table = 'hospedes';
    protected $primaryKey = 'id_hospede';
    protected $guarded = [];  
    public $timestamps = false;
}
