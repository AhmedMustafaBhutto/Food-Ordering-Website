<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class foodController extends Controller
{
    //
    function create($id)
    {
        $category = DB::table('category')->where('categoryID',$id)->limit(1)->get();
        return view('addFoodItem', ['category' => $category]);
    }
    
    function store($id)
    {
        if(isset($_POST['add']))
        {
            $add = DB::table('food')->insert([
                [
                'categoryID' => $id,
                'foodName' => request('Name'), 
                'price' => request('price'),
                'picPath' => request('fileToUpload')
                ]
            ]);
            return redirect('speciality/'.$id)->with('message',"food item added successfully");
            
        }
        else
            return redirect('speciality/'.$id);
    }
    
}
