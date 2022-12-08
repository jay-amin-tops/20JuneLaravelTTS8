<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;


class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // dd($user->get());
        $allUsers = $user->get();
        // return view("admin.allusers",compact('allUsers'));
        return view("admin.allusers",compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function saveproducts(Request $request,Products $products){
        // dd($request->all());
        $products->title = $request->formArray['title']; 
        $products->description = $request->formArray['description']; 
        $products->price = $request->formArray['price']; 
        $products->quantity = $request->formArray['quantity']; 
        $insertRes = $products->save(); 
        return $insertRes;
    }
    public function getproductsdatabyid(Request $request,Products $products){
        $prodDataById = $products::find($request['id']);
        return $prodDataById;
    }
    public function updateproductsdata(Request $request,Products $products){
        $prodDataById = $products::find($request->formArray['id']);
        // dd($prodDataById);
        
        $prodDataById->title = $request->formArray['title']; 
        $prodDataById->description = $request->formArray['description']; 
        $prodDataById->price = $request->formArray['price']; 
        $prodDataById->quantity = $request->formArray['quantity']; 
        $insertRes = $prodDataById->save(); 
        return $insertRes;
    }
    public function deleteproducts(Request $request,Products $products){
        $prodDataById = $products::find($request['id']);
        $deleteRes = $prodDataById->delete(); 
        
        return $deleteRes;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function getallproducts(Products $products){
        return $products::get();
    }
}
