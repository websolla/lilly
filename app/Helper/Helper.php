<?php
    namespace App\Helper;

use LaravelLocalization;

    use App\Models\Setting;
    use App\Models\Page;
    use App\Models\Project;
    use App\Models\Country;
use App\Models\Service;

class Helper{

    public static function tr($string) // Function to translate multi
    {
        $transContent = include(base_path('resources\lang\\' . app()->getLocale() . '\admin.php'));

        if(! array_key_exists($string, $transContent))
        {
            return $string;
        }
        return __('admin.' . $string);
    }
    public static function tr_web($string) // Function to translate multi
    {
        $transContent = include(base_path('resources\lang\\' . app()->getLocale() . '\website.php'));

        if(! array_key_exists($string, $transContent))
        {
            return $string;
        }
        return __('website.' . $string);
    }




    public static function getImg( $imgName){ // To Get Image
        return asset('uploads/'. $imgName);
    }

    public static function imageUploade($image, $path = '', $name = null)
        {
            $name == null ?   $rename = rand(2000, 365840) . '_' . time() . '.' . $image->getClientOriginalExtension() : $rename = $name;
            if (is_dir(public_path('uploads/' . $path)) == false) {
                mkdir(public_path('uploads/' . $path), 0777, true);
            }
            $image->move(public_path('uploads/' . $path), $rename);
            return $path . '/' . $rename;
        }


    public static function language_now()
    {
        return LaravelLocalization::getCurrentLocale();
    }

    public static function settings()
    {
        return Setting::first();
    }

    public static function pages($id = null)
    {
        if($id != null){
         return Page::find($id);
        }
       // return Pages::get();
    }

    public static function projects(){

        return Project::get();

    }
    public static function country(){

        return Country::get();

    }
    public static function services(){

        return Service::get();

    }











}
