<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signlog extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primarykey = "id";
}
