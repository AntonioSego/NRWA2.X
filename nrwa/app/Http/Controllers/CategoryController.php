<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index',['categories'=>$categories]);
        return view('categories.index');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $categories = Category::where('category_name', 'like', '%' . $query . '%')->get();
        return response()->json($categories);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $data  = $request->validate([
            
        'category_name'  => 'required',
        'category_active' => 'required | numeric',
        'category_status' => 'required | numeric'

        ]);

        $new_data  = Category::create($data);

        return redirect(route('category.index'));

    }

    public function edit(Category $category){
        return view('categories.edit',['category' => $category]);
    }


    public function update(Category $category,Request $request){
        $data  = $request->validate([
            
            'category_name'  => 'required',
            'category_active' => 'required | numeric',
            'category_status' => 'required | numeric'
    
            ]);

            $category->update($data);
            return redirect(route('category.index'))->with('succes','Uspjesno uredjen');
            
    }

    public function delete(Category $category){
        return view('categories.delete',['category' => $category]);
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect(route('category.index'))->with('succes','Uspjesno izbrisan');
        
    }




}
