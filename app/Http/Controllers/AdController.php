<?php

namespace App\Http\Controllers;
use Auth;
use App\Ad;
use App\Category;
use App\Region;
use session;
use App\User;
use Image;

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


        //validation the input
        $this->validate($request,
        [
          'item_name' => 'required',
          'phone' => 'required|regex:/(01)[0-9]{9}/',

        ]);

        $ad = New Ad;


       $ad->item_name = $request->input('item_name');
       $ad->phone    = $request->input('phone');
       $ad->description   = $request->input('description');
       $ad->negotiable = $request->input('negotiable');
       $ad->condition  = $request->input('condition');
       $ad->category_id = $request->input('category_id');
       $ad->region_id  = $request->input('region_id');
       $ad->price     = $request->input('price');
       $ad->user_id    = auth()->id();
       $ad->approve    = $request->input('approve');

       // storing image1
       if($request->hasfile('image1')){
           $image = $request->file('image1');
           $filename = time().'.'.$image->getClientOriginalExtension();
           $location = public_path('images/'.$filename);
           image::make($image)->resize(800,400)->save($location);
           $ad->image1 = $filename;
       }


      // Storing image2
       if($request->hasfile('image2')){
        $image = $request->file('image2');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        image::make($image)->resize(800,400)->save($location);
        $ad->image2 = $filename;
    }



    //storing image 3

    if($request->hasfile('image1')){
        $image = $request->file('image3');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        image::make($image)->resize(800,400)->save($location);
        $ad->image3 = $filename;
    }




        // return $ad;

        $ad->save();

        return redirect('home');


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
