<?php

namespace App\Http\Controllers;

use App\Models\Resources;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResourceController extends Controller
{
    //Show all resource
    public function index(){
        return view('resources', [
            'resources' => Resources::all()
        ]);
    }

    public function show(Resources $resource) {
        return view('resource', [
            'resource' => $resource
        ]);
    }

    public function incrementVisitors(Request $request, Resources $resource) {
        // Increment the visitors count for the page
        $resource->increment('visitors');
    }
    

    public function create() {
        return view('post-resource');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'type' => 'required',
            'title' => 'required',
            'tags' => 'required',
            'date' => 'required',
            'content' => 'required',
            'img-path' => 'required'
        ]);

        if($request->hasFile('img-path')) {
            $formFields['img-path'] = $request->file('img-path')->store('thumbnail', 'public');
        }

        // $formFields['identifier'] = $request->strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-]/', '', $formFields['title'])));

        Resources::create($formFields);

        return redirect('/')->with('message', 'Article/News created successfully!');
    }

    public function destroy(Resources $resource) {
        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        
        // if($listing->logo && Storage::disk('public')->exists($listing->logo)) {
        //     Storage::disk('public')->delete($listing->logo);
        // }

        $resource->delete();
        return redirect('/')->with('message', 'Resource deleted successfully');
    }
}
