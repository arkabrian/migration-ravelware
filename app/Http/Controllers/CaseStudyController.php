<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index(){
        return view('case-studies', [
            'case_studies' => CaseStudy::all()
        ]);
    }

    public function create() {
        return view('post-cs');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'overview' => 'required',
            'issue' => 'required',
            'solution' => 'required',
            'thumbnail' => 'required',
            'img-path' => 'required'
        ]);

        // if($request->hasFile('img-path')) {
        //     $formFields['img-path'] = $request->file('img-path')->store('thumbnail', 'public');
        // }

        CaseStudy::create($formFields);

        return redirect('/')->with('message', 'Article/News created successfully!');
    }
}
