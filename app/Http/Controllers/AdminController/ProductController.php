<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helper\Helper;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Image;
use App\Models\Product as model;
use DB;

class ProductController extends Controller
{
    public $data = [
        'view'          => 'products',
        'route'         => 'products',
        'itemname'      => 'product',
        'itemsnames'    => 'products',
    ];

     public function index()
    {
        $items  = model::get();
        return view('admin.' . $this->data['view'] . '.index', compact('items'))->with($this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category    = Category::get();
        $collections = Collection::get();
        return view('admin.' . $this->data['view'] . '.create', compact('category', 'collections'))->with($this->data);
    }


    public function store(Request $request)
    {


        $data = $request->validate([
            'title.*'        => 'required|string|max:191',
            'text.*'         => 'required|string',
            'description.*'  => 'required|string',
            'img'            => 'required|mimes:jpg,jpeg,png',
            'statues'        => 'required',
            'price'          => 'required',
            'oldprice'       => 'nullable',
            'cat'            => 'required',
            'size.*'         => 'required',
            'collection'     => 'nullable',
            'qty'            => 'required',
        ]);

        $img = $request->validate([
            'imgs.*'         => 'required|mimes:jpg,jpeg,png',
        ]);

       

        $data['size']         = json_encode( $request->size ); // To Encode Data Into DB
        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB
        $data['text']         = json_encode( $request->text );
        $data['description']  = json_encode( $request->description );
        $data['img']          = Helper::imageUploade($data['img'], $this->data['view']);
        $data['sku']          = rand(7,8000);
       
        $product_insert = model::create($data);
        DB::table('products')->where('id',  $product_insert->id)->update(['sku' =>  $product_insert->id.'-'.rand(7,8000)]);

        $imgs = request()->file('imgs');
        if($imgs != null){ 
            foreach($imgs as $img)
            {
                $multi_img = Helper::imageUploade($img, $this->data['view']);
                Image::create(['imgs' => $multi_img, 'prod' => $product_insert->id]);
            }
        }

        return redirect('websolla-db/' . $this->data['view'])->with('success', 'Done');

    }

    public function edit($id)
    {
        $items       = model::findOrFail($id);
        $category    = Category::get();
        $collections = Collection::get();
        $imgs        = Image::select('imgs', 'id')->where('prod', $id)->get();
        return view('admin.' . $this->data['view'] . '.edit', compact('items', 'category', 'collections', 'imgs'))->with($this->data);
    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'title.*'        => 'required|string|max:191',
            'text.*'         => 'required|string',
            'description.*'  => 'required|string',
            'img'            => 'nullable|mimes:jpg,jpeg,png',
            'statues'        => 'required',
            'price'          => 'required',
            'oldprice'       => 'nullable',
            'cat'            => 'required',
            'size.*'         => 'required',
            'collection'     => 'nullable',
            'qty'            => 'required',
        ]);

        $img = $request->validate([
            'imgs.*'         => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $data['size']         = json_encode( $request->size ); // To Encode Data Into DB
        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB
        $data['text']         = json_encode( $request->text );
        $data['description']  = json_encode( $request->description );



        if($request['img'] != null){ // If Condition To check If Request != null
            $img_name    = explode("/", $request->img_value);
            $data['img'] = Helper::imageUploade($data['img'], $this->data['view']);
        }

        $imgs = request()->file('imgs');
        if($imgs != null){ 
            foreach($imgs as $img)
            {
                $multi_img = Helper::imageUploade($img, $this->data['view']);
                Image::create(['imgs' => $multi_img, 'prod' => $id]);
            }
        }

        $item = model::findOrFail($id)->update($data);
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');

    }


    public function destroy($id)
    {
        $item = model::findOrFail($id)->delete();
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');
    }

    public function img_del($id)
    {
        $item = Image::findOrFail($id)->delete();
        return back()->with('success', 'Done');
    }
}
