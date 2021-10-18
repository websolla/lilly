<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helper\Helper;

use App\Models\Sliders as model;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public $data = [
        'view'          => 'sliders',
        'route'         => 'sliders',
        'itemname'      => 'slider',
        'itemsnames'    => 'sliders',
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
        return view('admin.' . $this->data['view'] . '.create')->with($this->data);
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title.*'        => 'required|string',
            'description.*'  => 'required|string',
            'img'            => 'required|mimes:jpg,jpeg,png',
        ]);

        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB
        $data['description']  = json_encode( $request->description );
        $data['img']          = Helper::imageUploade($data['img'], $this->data['view']);

        model::create($data);
        return redirect('websolla-db/' . $this->data['view'])->with('success', 'Done');

    }

    public function edit($id)
    {
        $items  = model::findOrFail($id);
        return view('admin.' . $this->data['view'] . '.edit', compact('items'))->with($this->data);
    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'title.*'        => 'required|string',
            'description.*'  => 'required|string',
            'img'            => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB
        $data['description']  = json_encode( $request->description );

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
