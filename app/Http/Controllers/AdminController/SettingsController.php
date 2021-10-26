<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting as model;
use App\Helper\Helper;

class SettingsController extends Controller
{

    public $data = [
        'view'          => 'settings',
        'route'         => 'settings',
        'itemname'      => 'setting',
        'itemsnames'    => 'settings',
    ];


    public function index()
    {
        $items  = model::get();
        return view('admin.' . $this->data['view'] . '.index', compact('items'))->with($this->data);
    }


    public function edit($id)
    {
        $items  = model::findOrFail($id);
        return view('admin.' . $this->data['view'] . '.edit', compact('items'))->with($this->data);
    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'email'             => 'required|email|max:191',
            'mobile'            => 'required|numeric',
            'phone'             => 'required|numeric',
            'facebook'          => 'required',
            'twitter'           => 'required',
            'youtube'           => 'required',
            'instagram'         => 'required',
            'tags'              => 'required',
            'description'       => 'required',
            'head'              => 'nullable|mimes:jpg,webp,jpeg',
            'logo'              => 'nullable|mimes:png',
            'address.*'         => 'required',
            
        ]);

        if($request['head'] != null){ // If Condition To check If Request != null
            $img_name    = explode("/", $request->img_value);
            $data['head'] = Helper::imageUploade($data['head'], $this->data['view']);
        }

        $data['address']  = json_encode( $request->address );
        if($request['pdf'] != null){
            $img_name = explode("/", $request->img_value);
            $data['pdf'] = Helper::imageUploade($data['pdf'], $this->data['view']);
        }

        $item = model::findOrFail($id)->update($data);
        return back()->with('success', 'Done');

    }
}
