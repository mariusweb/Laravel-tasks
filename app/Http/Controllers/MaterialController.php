<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Material;
use App\Models\Type;
use App\Models\Category;
use App\Models\User;

class MaterialController extends Controller
{

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

    public function getTypesAndCategorys()
    {
        $data = array();
        $data['types'] = Type::all();
        $data['categorys'] = Category::all();
        return $data;
    }
    public function selectTypeAndCategory()
    {
        return view('materials')->with(['type_category_lists' => $this->getTypesAndCategorys()]);
    }

    public function showUserMaterials()
    {
        $user = User::all()->get(1);
        foreach ($user->materials as  $mats) {
            echo $mats->pivot->status . "<br>";
        }
    }
    public function searchMaterials(Request $request)
    {
        $searchKey = $request->get('search');
        if ($searchKey == []) {
            $viewSearch = array();
        } else {
            $viewSearch = Material::leftJoin('types', 'materials.type_id', '=', 'types.id')
                ->leftJoin('categories', 'materials.category_id', '=', 'categories.id')
                ->select('materials.name', 'categories.name as category', 'types.name as type', 'materials.addition_date', 'materials.link_to_material')
                ->orWhere(function ($queryType) use ($searchKey) {
                    $queryType->where('types.name', 'LIKE', '%' . $searchKey . '%');
                })->orWhere(function ($queryCategory) use ($searchKey) {
                    $queryCategory->where('categories.name', 'LIKE', '%' . $searchKey . '%');
                })->orWhere(function ($queryName) use ($searchKey) {
                    $queryName->where('materials.name', 'LIKE', '%' . $searchKey . '%');
                })->orWhere(function ($queryLink) use ($searchKey) {
                    $queryLink->where('materials.link_to_material', 'LIKE', '%' . $searchKey . '%');
                })->get();
        }

        return view('search', ['search_results' => $viewSearch]);
    }
}
