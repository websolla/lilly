<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Blogs as model;

class BlogsController extends Controller
{
    public $data = [
        'view'          => 'blogs',
        'route'         => 'blogs',
        'itemname'      => 'blog',
        'itemsnames'    => 'blogs',
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
            'title.*'       => 'required|string|max:191',
            'text.*'        => 'required|string',
            'img'           => 'required|mimes:jpg,jpeg,png',
        ]);
        $data['title'] = json_encode( $request->title );
        $data['text']  = json_encode( $request->text );
        $data['img'] = Helper::imageUploade($data['img'], $this->data['view']);

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
            'title.*'       => 'required|string|max:191',
            'text.*'        => 'required|string',
            'img'           => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $data['title'] = json_encode( $request->title );
        $data['text']  = json_encode( $request->text );

        if($request['img'] != null){
            $img_name = explode("/", $request->img_value);
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
