<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use App\Models\Category;


class TypeController extends Controller
{
    public function getData()
    {
        $data = array();

        $data['types'] = Type::all();

        $data['categorys'] = Category::all();

        return $data;
    }
}
