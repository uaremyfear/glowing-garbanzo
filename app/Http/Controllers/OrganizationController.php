<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\Category;
use App\Phone;
use App\Http\Requests\OrganizationCreateRequest;
use App\Http\Requests\OrganizationUpdateRequest;
use Sithu\ImageHelper\ImageHelper;

class OrganizationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('backend.organization.index',compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category_name','id');
        return view('backend.organization.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizationCreateRequest $request)
    {
        $image =  $this->storeImage($request->file('image'));        
        
        $request->request->add(['image_name' => $image->image_name]);        
        $request->request->add(['image_extension' => $image->image_extension]);        
        
        $organization = Organization::create($request->all());

        $organization->categories()->attach($request->input('category_id'));

        foreach ($request->phones as $key => $value) {
            if($value)
            {
                Phone::create(['phone_number' => $value , 'other_key' => $organization->id , 'main_key' => 'O_'.$organization->id]);
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
    public function edit(Organization $organization)
    {
        $categories = Category::pluck('category_name','id');
        return view('backend.organization.edit',compact('categories','organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestorganization
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationUpdateRequest $request, Organization $organization)
    {
        if ($request->hasFile('image')) {
            $image = $this->updateImage($request->file('image'),$organization->image_name,$organization->image_extension);
            $request->request->add(['image_name' => $image->image_name]);        
            $request->request->add(['image_extension' => $image->image_extension]);
        }

        $organization->update($request->all());

        $organization->categories()->sync($request->input('category_id'));
        
        foreach ($organization->phones as $key => $phone) {
            Phone::destroy($phone->id);            
        }
        
        foreach ($request->phones as $key => $value) {
            if($value)
            {
                Phone::create(['phone_number' => $value , 'other_key' => $organization->id , 'main_key' => 'O_'.$organization->id]);
            }
        }

        return redirect()->route('organization.index');
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
        $image = $imageHelper->storeImage($imageFile,'organization');        
        return $image;
        
    } 

    public function updateImage($imageFile,$oldImageName,$oldImageExtension)
    {
        $imageHelper = new ImageHelper();
        $image = $imageHelper->updateImage($oldImageName,$oldImageExtension,$imageFile,'organization');
        return $image;        
    }  
}
