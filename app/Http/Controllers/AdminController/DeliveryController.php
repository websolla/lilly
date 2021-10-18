<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Delivery as model;

class DeliveryController extends Controller
{
    public $data = [
        'view'          => 'delivery',
        'route'         => 'delivery',
        'itemname'      => 'delivery',
        'itemsnames'    => 'delivery',
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
            'area.*'       => 'required|string|max:191',
            'fee'           => 'required',
        ]);
        $data['area'] = json_encode( $request->area );

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
            'area.*'    => 'required|string|max:191',
            'fee'       => 'required',
        ]);

        $data['area'] = json_encode( $request->area );

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
