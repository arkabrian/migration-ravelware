<?php
// ArticleController.php (Controller)
use App\Models\Resources;

// public function index()
// {
//     // Fetch hardcoded resources
//     $allResources = Resources::all();

//     $perPage = 5; // Number of articles to load per page
//     $currentPage = request()->get('page') ?? 1; // Get the current page from the URL query parameter

//     $offset = ($currentPage - 1) * $perPage;
//     $resources = $allResources->slice($offset, $perPage)->values(); // Slice the collection based on pagination

//     return view('resources.index', compact('resources'));
// }
