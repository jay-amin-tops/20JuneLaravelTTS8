<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $Category)
    {
        //
        $allCategories =$Category::get();
        return view("admin.listallcategories",compact('allCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.addnewcaregory");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {
        // dd($request);
        // dd($request->all());
        $category->category_title =$request->category_title;
        $category->category_description =$request->category_description;
        $category->category_image ="default.jpg";
        $category->save();
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $categoryDataById = $category::find($id);
        return view("admin.updatecaregory",compact('categoryDataById'));
        // dd($categoryDataById);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $categoryDataById = $category::find($id);
        $categoryDataById->category_title =$request->category_title;
        $categoryDataById->category_description =$request->category_description;
        $categoryDataById->category_image ="default.jpg";
        $categoryDataById->save();
        return redirect('categories');
        dd($categoryDataById);
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Category $category)
    {
        $categoryDataById = $category::find($id);
        $categoryDataById->delete();
        return redirect('categories');
        // dd($id);
        //
    }
}
