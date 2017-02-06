<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Magazine;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $magazines = Magazine::search($request->titulo)->orderBy('titulo','ASC')->paginate(25);
      $magazines->each(function($magazines){
          $magazines->category;
          $magazines->tags;

      });
      $historietas = Magazine::where('category_id','=',3)->orderBy('titulo','ASC')->paginate(25);
      $videojuegos = Magazine::where('category_id','=',4)->orderBy('titulo','ASC')->paginate(25);
      $comics = Magazine::where('category_id','=',5)->orderBy('titulo','ASC')->paginate(25);
      $tags = Tag::orderBy('id','DESC')->paginate(50);
      $count = Magazine::search($request->titulo)->count();

      return view('frontend.home')->with(array('magazines'=>$magazines, 'count'=>$count, 'tags'=>$tags,'historietas'=>$historietas,
          'videojuegos'=>$videojuegos,'comics'=>$comics

          ));
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
