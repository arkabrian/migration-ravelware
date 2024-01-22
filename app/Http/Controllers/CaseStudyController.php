<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index(){
        return view('case-study', [
            'case_studies' => CaseStudy::all()
        ]);
    }
}
