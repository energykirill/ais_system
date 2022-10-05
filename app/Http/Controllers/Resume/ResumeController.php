<?php

namespace App\Http\Controllers\Resume;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Models\ResumeModel;

class ResumeController extends Controller
{
    public function resume() {
        return response()->json(ResumeModel::get(),200);
    }
}
