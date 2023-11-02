<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::with('newsItems')->get();

        $response = json_encode($categories, JSON_PRETTY_PRINT);
        return response($response)->header('Content-Type', 'application/json');
    }
}
