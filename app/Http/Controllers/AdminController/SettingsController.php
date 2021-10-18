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
            'phone'             => 'required|numeric',
            'mobile'            => 'required|numeric',
            'facebook'          => 'required',
            'address'           => 'required',
            'twitter'           => 'required',
            'email'             => 'required|max:191',
            'pdf'               => 'nullable|mimes:pdf,docx',
        ]);

        if($request['pdf'] != null){
            $img_name = explode("/", $request->img_value);
            $data['pdf'] = Helper::imageUploade($data['pdf'], $this->data['view']);
        }

        $item = model::findOrFail($id)->update($data);
        return back()->with('success', 'Done');

    }
}
