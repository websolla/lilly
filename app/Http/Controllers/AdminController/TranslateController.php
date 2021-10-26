<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;


class TranslateController extends Controller
{
    public $data = [
        'view'              => 'translates',
        'route'             => 'translates',
        'itemname'          => 'translates',
        'itemsnames'        => 'translates',
    ];

    public function index()
    {
        $lanuage = array('en', 'ar');
         
        foreach($lanuage as $lang => $value){
           
            $transContent = include(resource_path('lang\\' . $value . '\website.php'));
            return view('admin.' . $this->data['view'] . '.index', compact('transContent'))->with($this->data);
        }
        
    }


    public function create()
    {
        return view('admin.' . $this->data['view'] . '.create')->with($this->data);
    }


    public function store(Request $request){


        foreach($request->type_translate  as $k => $v){
            $path = resource_path('lang\\' . $k . '\website.php');
            $transContent = include(base_path('resources\lang\\' . $k . '\website.php'));
            
        $mydata = '<?php  return [';
        foreach($transContent as $key => $value){
            $mydata .= "'$key'" .'=>'. "'$value'," ."\n";
           
        }
        
        $mydata .= "'$request->key'" .'=>'. "'$v'," ."\n";

        $mydata .= '];';
        
        file_put_contents($path, $mydata);
    }
        return view('admin.' . $this->data['view'] . '.index', compact('transContent'))->with($this->data);


        /* if($request->key == $key){
            return back();
        } */
    }











    
}
