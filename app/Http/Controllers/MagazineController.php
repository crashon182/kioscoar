<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;
use App\Tag;
use App\Category;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MagazineRequest;
use Laracasts\Flash\Flash;
use Dropbox\Client;
use Dropbox\WriteMode;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




   public function index(Request $request)
    {
        $magazines = Magazine::search($request->titulo)->orderBy('titulo','ASC')->paginate(25);
        $count = Magazine::search($request->titulo)->count();
        $tags = Tag::orderBy('id','DESC')->paginate(50);
        return view('admin.magazines.index')->with(array('magazines'=>$magazines, 'count'=>$count,'tags'=>$tags));
        return view('frontend.home')->with(array('magazines'=>$magazines, 'count'=>$count));
    }



    public function create()
    {
      $categories = Category::orderBy('name','ASC')->lists('name','id');
        $tags = Tag::orderBy('name','ASC')->lists('name','id');
        return view('admin.magazines.create')->with(array('categories'=>$categories,'tags'=>$tags));    }

    /**''
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MagazineRequest $request)
    {



        /*$magazine = new Magazine($request->all());
        $magazine->save();
        Flash::success('La Condicion '. $magazine->titulo . ' Ha sido creada con èxito' );
        return redirect()->route('admin.revistas.index');
        */
        if($request->file('imagen'))
        {
          $file = $request->file('imagen');
          $name = $file->getClientOriginalName();
          $path = public_path().'/revistas';
          $file->move($path,$name);
        }
        $magazine = new magazine($request->all());
        $magazine['tapa'] = $name;

        $magazine->save();
        Flash::success('El Curso '. $magazine->titulo . ' Ha sido creado con èxito' );
        return redirect()->route('admin.revistas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $magazine = Magazine::findOrFail($id);
        return view('admin.magazines.show')->with('magazine',$magazine);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $magazine = Magazine::find($id);
        //relacion que tengo con la categorias organism es el metodo del modelo division
        /*  public function organism()
      {
          return $this->belongsTo('App\Organism');
      }*/

        $magazine->category_id;
        $magazine->tag_id;
        $category = Category::orderBy('name','ASC')->lists('name','id');
        $tag = Tag::orderBy('name','ASC')->lists('name','id');

        return view('admin.magazines.edit')
            ->with('category',$category)
            ->with('magazine',$magazine)
            ->with('tag',$tag);

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
        $magazine = Magazine::find($id);
        $magazine->fill($request->all());
        $magazine->save();
        Flash::error('La publicación' . $magazine->titulo . ' ha sido editada con éxito!' );
        return redirect()->route('admin.revistas.index');
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

     public function dropboxFileUpload()
    {
        $Client = new Client(env('DROPBOX_TOKEN'), env('DROPBOX_SECRET'));

        $file = fopen(public_path('images/logo.png'), 'rb');
        $size = filesize(public_path('images/logo.png'));
        $dropboxFileName = '/myphoto4.png';

        $Client->uploadFile($dropboxFileName,WriteMode::add(),$file, $size);
        $links['share'] = $Client->createShareableLink($dropboxFileName);
        $links['view'] = $Client->createTemporaryDirectLink($dropboxFileName);

        print_r($links);
    }
}
