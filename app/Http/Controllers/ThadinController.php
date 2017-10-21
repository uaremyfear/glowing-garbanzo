<?php

namespace App\Http\Controllers;

use App\Thadin;
use Illuminate\Http\Request;

use App\Http\Requests\ThadinCreateRequest;
use App\Http\Requests\ThadinUpdateRequest;
use Sithu\ImageHelper\ImageHelper;

class ThadinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thadins = Thadin::all();
        return view('backend.thadin.index',compact('thadins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.thadin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThadinCreateRequest $request)
    {
        $image =  $this->storeImage($request->file('image'));        
        
        $request->request->add(['image_name' => $image->image_name]);        
        $request->request->add(['image_extension' => $image->image_extension]);        
        
        $thadin = Thadin::create($request->all());

        return redirect()->route('thadin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thadin  $thadin
     * @return \Illuminate\Http\Response
     */
    public function show(Thadin $thadin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thadin  $thadin
     * @return \Illuminate\Http\Response
     */
    public function edit(Thadin $thadin)
    {
        return view('backend.thadin.edit',compact('thadin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thadin  $thadin
     * @return \Illuminate\Http\Response
     */
    public function update(ThadinUpdateRequest $request, Thadin $thadin)
    {
        if ($request->hasFile('image')) {
            $image = $this->updateImage($request->file('image'),$thadin->image_name,$thadin->image_extension);
            $request->request->add(['image_name' => $image->image_name]);        
            $request->request->add(['image_extension' => $image->image_extension]);
        }

        $thadin->update($request->all());

        return redirect()->route('thadin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thadin  $thadin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thadin $thadin)
    {
        //
    }

    public function storeImage($imageFile)
    {
        $imageHelper = new ImageHelper();
        $image = $imageHelper->storeImage($imageFile,'thadin');        
        return $image;
        
    } 

    public function updateImage($imageFile,$oldImageName,$oldImageExtension)
    {
        $imageHelper = new ImageHelper();
        $image = $imageHelper->updateImage($oldImageName,$oldImageExtension,$imageFile,'thadin');
        return $image;        
    }  
}
