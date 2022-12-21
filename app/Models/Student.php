<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'program_id'
    ];
}
