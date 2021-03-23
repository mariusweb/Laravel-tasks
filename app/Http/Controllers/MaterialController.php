<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Material;
use App\Models\Type;
use App\Models\Category;

class TypeAndCategory
{
    public function getData()
    {
        $data = array();

        $data['types'] = Type::all();

        $data['categorys'] = Category::all();

        return $data;
    }
}
class MaterialController extends Controller
{
    private $repository;
    public function __construct(TypeAndCategory $repository)
    {
        $this->repository = $repository;
    }

    public function insertMaterial(Request $request)
    {
        DB::table('materials')->insert([
            'name' => $request->material_name,
            'addition_date' => now(),
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'link_to_material' => $request->material_url,
        ]);
        return "Success";
    }

    public function showMaterials()
    {
        $materials = Material::all();
        return view('materials', ['material_list' => $materials]);
    }
    public function selectTypeAndCategory(TypeAndCategory $repository)
    {

        // $types = Type::all();
        return view('materials')->with(['type_category_lists' => $this->repository->getData()]);
    }
}
