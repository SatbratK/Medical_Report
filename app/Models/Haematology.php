<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haematology extends Model
{
    use HasFactory;
    use HasFactory;
    protected $connection = 'pgsql1';
    protected $table = 'haematology';
    protected $primaryKey = 'id';
}
