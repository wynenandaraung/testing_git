<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('backend.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('backend.subcategory.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            "name" => 'required',
            "category" => 'required'
        ]);

        //If include file,upload file

        
        //Data insert
        $subcategory = new SubCategory;
        $subcategory->name= $request->name;
        $subcategory->category_id= $request->category;
        $subcategory->save();
        //redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory,$id)
    {
        
        
        $subcategory= SubCategory::find($id);
        // dd($subcategory);
        $categories = Category::all();

        return view('backend.subcategory.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory,$id)
    {
        $request->validate([
            
            "name" => 'required',
            "category" => 'required'
        ]);




        $subcategory=Subcategory::find($id);
        $subcategory->name= $request->name;
        $subcategory->category_id= $request->category;
        $subcategory->save();

        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
