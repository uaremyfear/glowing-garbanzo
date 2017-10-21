<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SavehouseCreateRequest;
use App\Http\Requests\SavehouseUpdateRequest;
use App\City;
use App\Savehouse;
use App\Category;
use App\Phone;

use Sithu\ImageHelper\ImageHelper;


class SavehouseController extends Controller
{
    // use ManagesImages;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savehouses = Savehouse::all();

        return view('backend.savehouse.index',compact('savehouses'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('city_name','id');
        $categories = Category::pluck('category_name','id');
        return view('backend.savehouse.create',compact('cities','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavehouseCreateRequest $request)
    {
        $image =  $this->storeImage($request->file('image'));        
        
        $request->request->add(['image_name' => $image->image_name]);        
        $request->request->add(['image_extension' => $image->image_extension]);        
        
        $savehouse = Savehouse::create($request->all());
        
        foreach ($request->phones as $key => $value) {
            if($value)
            {
                Phone::create(['phone_number' => $value , 'other_key' => $savehouse->id , 'main_key' => 'S_'.$savehouse->id]);
            }            
        }

        return redirect()->route('savehouse.index');
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
    public function edit(Savehouse $savehouse)
    {
        $cities = City::pluck('city_name','id');
        $categories = Category::pluck('category_name','id');
        return view('backend.savehouse.edit',compact('cities','categories','savehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SavehouseUpdateRequest $request,Savehouse $savehouse)
    {   
        if ($request->hasFile('image')) {
            $image = $this->updateImage($request->file('image'),$savehouse->image_name,$savehouse->image_extension);
            $request->request->add(['image_name' => $image->image_name]);        
            $request->request->add(['image_extension' => $image->image_extension]);
        }

        $savehouse->update($request->all());

        foreach ($savehouse->phones as $key => $phone) {
            Phone::destroy($phone->id);            
        }

        foreach ($request->phones as $key => $value) {
            if($value)
            {
                Phone::create(['phone_number' => $value , 'other_key' => $savehouse->id , 'main_key' => 'S_'.$savehouse->id]);
            }
        }

        return redirect()->route('savehouse.index');
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
        $image = $imageHelper->storeImage($imageFile,'savehouse');        
        return $image;
        
    } 

    public function updateImage($imageFile,$oldImageName,$oldImageExtension)
    {
        $imageHelper = new ImageHelper();
        $image = $imageHelper->updateImage($oldImageName,$oldImageExtension,$imageFile,'savehouse');
        return $image;        
    }    
}
