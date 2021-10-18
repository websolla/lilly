<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helper\Helper;

use App\Models\Ads as model;

class AdsController extends Controller
{
    public $data = [
        'view'          => 'ads',
        'route'         => 'ads',
        'itemname'      => 'ad',
        'itemsnames'    => 'ads',
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $data = $request->validate([
            'title.*'       => 'required|string|max:191',
            'statues'       => 'required',
            'img'           => 'required',
        ]);
        $data['title'] = json_encode( $request->title );

        model::create($data);
        return redirect('websolla-db/' . $this->data['view'])->with('success', 'Done');
    
    }       

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items  = model::findOrFail($id);
        return view('admin.' . $this->data['view'] . '.edit', compact('items'))->with($this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $data = $request->validate([
            'title.*'    => 'required|string|max:191',
            'img'        => 'nullable|mimes:jpg,png',
            'statues'    => 'required',
        ]);

        $data['title'] = json_encode( $request->title );
        if($request['img'] != null){ // If Condition To check If Request != null
            $img_name    = explode("/", $request->img_value);
            $data['img'] = Helper::imageUploade($data['img'], $this->data['view']);
        }

        $item = model::findOrFail($id)->update($data);
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = model::findOrFail($id)->delete();
        return redirect('websolla-db/'. $this->data['view'])->with('success', 'Done');
    }
}
