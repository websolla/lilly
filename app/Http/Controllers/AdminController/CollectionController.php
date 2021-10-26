<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helper\Helper;

use App\Models\Collection as model;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public $data = [
        'view'          => 'collections',
        'route'         => 'collections',
        'itemname'      => 'collection',
        'itemsnames'    => 'collections',
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
        ]);

        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB

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
        ]);

        $data['title']        = json_encode( $request->title ); // To Encode Data Into DB

        $item = model::findOrFail($id)->update($data);
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');

    }


    public function destroy($id)
    {
        $item = model::findOrFail($id)->delete();
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');
    }
}
