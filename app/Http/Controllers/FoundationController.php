<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foundation;
use App\Category;
use App\Phone;
use App\Http\Requests\FoundationCreateRequest;
use App\Http\Requests\FoundationUpdateRequest;
use Sithu\ImageHelper\ImageHelper;

class FoundationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foundations = Foundation::all();
        return view('backend.foundation.index',compact('foundations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category_name','id');
        return view('backend.foundation.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoundationCreateRequest $request)
    {
        $image =  $this->storeImage($request->file('image'));        
        
        $request->request->add(['image_name' => $image->image_name]);        
        $request->request->add(['image_extension' => $image->image_extension]);        
        
        $foundation = Foundation::create($request->all());

        $foundation->categories()->attach($request->input('category_id'));

        foreach ($request->phones as $key => $value) {
            if($value)
            {
                Phone::create(['phone_number' => $value , 'other_key' => $foundation->id , 'main_key' => 'F_'.$foundation->id]);
            }            
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Foundation $foundation)
    {
        $categories = Category::pluck('category_name','id');
        return view('backend.foundation.edit',compact('categories','foundation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoundationupdateRequest $request, Foundation $foundation)
    {
        if ($request->hasFile('image')) {
            $image = $this->updateImage($request->file('image'),$foundation->image_name,$foundation->image_extension);
            $request->request->add(['image_name' => $image->image_name]);        
            $request->request->add(['image_extension' => $image->image_extension]);
        }

        $foundation->update($request->all());

        $foundation->categories()->sync($request->input('category_id'));
        
        foreach ($foundation->phones as $key => $phone) {
            Phone::destroy($phone->id);            
        }
        
        foreach ($request->phones as $key => $value) {
            if($value)
            {
                Phone::create(['phone_number' => $value , 'other_key' => $foundation->id , 'main_key' => 'F_'.$foundation->id]);
            }
        }

        return redirect()->route('foundation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeImage($imageFile)
    {
        $imageHelper = new ImageHelper();
        $image = $imageHelper->storeImage($imageFile,'foundation');        
        return $image;
        
    } 

    public function updateImage($imageFile,$oldImageName,$oldImageExtension)
    {
        $imageHelper = new ImageHelper();
        $image = $imageHelper->updateImage($oldImageName,$oldImageExtension,$imageFile,'foundation');
        return $image;   
    }  
}
