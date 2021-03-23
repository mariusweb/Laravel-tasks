<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function selectCategory()
    {
        // $categorys = DB::table('category')->get();
        $categorys = Category::all();
        return view('materials', ['category_list' => $categorys]);
    }
}
