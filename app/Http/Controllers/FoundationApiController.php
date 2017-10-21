<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Foundation;

class FoundationApiController extends Controller
{
	public function index()
	{
		$foundations = [ 'foundations' => Foundation::all() ];
		return $foundations;
	}

	public function show($id)
	{
		return Foundation::findOrFail($id);
	}

	public function getCategory()
	{
		$categories = ['categories' => Category::has('foundations')->orderBy('category_name')->get()];
        return $categories;
	}

	public function getFoundationByCategory($category_id)
	{
		$category = Category::findOrFail($category_id);
		return ['foundations' => $category->foundations()->get() ];
	}
}
