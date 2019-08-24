<?php

namespace App\Http\Controllers;
use Auth;
use App\Ad;
use App\Category;
use App\Region;
use session;
use App\User;

use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $regions = Region::all();
        return view ('ad.create')->with('categories',$categories)->with('regions',$regions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ad = New Ad;

       $ad->title = $request->input('title');
       $ad->item_name = $request->input('item_name');
       $ad->phone    = $request->input('phone');
       $ad->price   = $request->input('description');
       $ad->negotiable = $request->input('negotiable');
       $ad->condition  = $request->input('condition');
       $ad->category_id = $request->input('category_id');
       $ad->region_id  = $request->input('region_id');
       $ad->price     = $request->input('price');
       $ad->user_id    = auth()->id();




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
}
