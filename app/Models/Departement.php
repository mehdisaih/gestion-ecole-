<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'departement_id',
        'departement_name',
        'head_of_departement',
        'no_of_students',
        ];
}   
