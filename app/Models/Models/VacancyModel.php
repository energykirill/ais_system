<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyModel extends Model
{
    use HasFactory;

    protected $table = "Vacancy";

    protected $fillable = [
        'id',
        'title',
        'salary',
        'description'
    ];
}
