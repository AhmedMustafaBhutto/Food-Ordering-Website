<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\category as category;
use Illuminate\support\facades\DB;

class specialityController extends Controller
{
    function index()
    {
        // $categories = category::all();
        $categories = DB::table('category')->get();
        return view('speciality',['categories' => $categories]);
    }
    
    function show($id)
    {
        $foodRecords = DB::table('food')->where('categoryID',$id)->get();
        $category = DB::table('category')->where('categoryID',$id)->get();
        return view('categoryItems',['foodRecords' => $foodRecords, 'category'=> $category]);
    }
    function create()
    {
        return view('addCategory');
    }

    function store()
    {
        // echo request('name');
        // DB::table('category')->insert([

        // ])
        // ;
        if(isset($_POST['add']))
        {
            $imgPath = "images/".request('fileToUpload');
            $add = DB::table('category')->insert([
                ['categoryName' => request('Name'), 
                'description' => request('description'),
                'picPath' => $imgPath]
            ]);
            return redirect('speciality')->with('request', 'Category Created succesfully');
        }
        else
         return redirect('speciality');
        
    }
}
