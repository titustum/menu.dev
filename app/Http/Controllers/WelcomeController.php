<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $business_categories = BusinessCategory::get(['id','name']);
        return view('welcome', compact('business_categories'));
    }
}
