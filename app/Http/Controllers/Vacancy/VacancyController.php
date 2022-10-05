<?php

namespace App\Http\Controllers\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Models\VacancyModel;

class VacancyController extends Controller
{
    public function vacancy (){
        return response()->json(VacancyModel::get(),200);
    }
}
