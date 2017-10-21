<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Savehouse;
use App\Category;

class SavehouseApiController extends Controller
{
    public function index()
    {
    	$savehouses = [ 'savehouses' => Savehouse::all() ];
    	return $savehouses;
    }

    public function getCategories()
    {
    	// $Savehouse = Savehouse::findOrfail('1');
    	// return $Savehouse->images;

    	$categories = ['categories' => Category::has('savehouses')->orderBy('category_name')->get()];
    	return $categories;
    }

    public function show($id)
    {
        return Savehouse::findOrfail($id);
    }

    public function getSavehouseByID($id)
    {
        $category = Category::findOrfail($id);
        return ['savehouses' => $category->savehouses()->get()];
    }

    public function getSavehouseByCity($id)
    {
        $savehouses = Savehouse::where('city_id',$id)->orderBy('name')->get();
        return ['savehouses' => $savehouses ];
    }
}
