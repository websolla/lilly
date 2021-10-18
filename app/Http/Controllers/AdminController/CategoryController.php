<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helper\Helper;

use App\Models\Category as model;
use App\Models\Depart;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public $data = [
        'view'          => 'categories',
        'route'         => 'categories',
        'itemname'      => 'category',
        'itemsnames'    => 'categories',
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
        $departs = Depart::get();
        return view('admin.' . $this->data['view'] . '.create', compact('departs'))->with($this->data);
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title.*'        => 'required|string',
            'offer'          => 'required|string',
            'depart'         => 'required',
            'featured'       => 'required',
            'sort'           => 'required',
            'img'            => 'required|mimes:jpg,jpeg,png',
        ]);

        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB
        $data['img']          = Helper::imageUploade($data['img'], $this->data['view']);

        model::create($data);
        return redirect('websolla-db/' . $this->data['view'])->with('success', 'Done');

    }

    public function edit($id)
    {
        $departs = Depart::get();
        $items  = model::findOrFail($id);
        return view('admin.' . $this->data['view'] . '.edit', compact('items', 'departs'))->with($this->data);
    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'title.*'        => 'required|string',
            'offer'          => 'required|string',
            'depart'         => 'required',
            'featured'       => 'required',
            'sort'           => 'required',
            'img'            => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB

        if($request['img'] != null){ // If Condition To check If Request != null
            $img_name    = explode("/", $request->img_value);
            $data['img'] = Helper::imageUploade($data['img'], $this->data['view']);
        }

        $item = model::findOrFail($id)->update($data);
        return back()->with('success', 'Done');

    }


    public function destroy($id)
    {
        $item = model::findOrFail($id)->delete();
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');
    }
}
