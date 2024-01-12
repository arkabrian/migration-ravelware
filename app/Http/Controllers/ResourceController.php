<?php

namespace App\Http\Controllers;

use App\Models\Resources;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResourceController extends Controller{

  //Show all resources
  public function index() {

    return view('resources.index', [
      'resources' => Resources::latest()->filter(request(['tag', 'search']))->paginate(6)
    ]);
  }

}

// public function index()
// {
//     // Fetch hardcoded resources
    // $allResources = Resources::all();

    // $perPage = 5; // Number of articles to load per page
    // $currentPage = request()->get('page') ?? 1; // Get the current page from the URL query parameter

    // $offset = ($currentPage - 1) * $perPage;
    // $resources = $allResources->slice($offset, $perPage)->values(); // Slice the collection based on pagination

//     return view('resources.index', compact('resources'));
// }
