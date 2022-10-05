<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeModel extends Model
{
    use HasFactory;

    protected $table = "Resume";

    protected $fillable = [
        'id',
        'full_name',
        'date_birth',
        'skills'
    ];
}
