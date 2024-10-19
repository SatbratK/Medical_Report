<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $connection = 'pgsql5';
    protected $table = 'patient_dtl';
    protected $primaryKey = 'id';

}
