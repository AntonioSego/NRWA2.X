<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('brands.index',['brands'=>$brands]);
        return view('brands.index');
    }

    public function search(Request $request){
        $output="";
        $brand = Brand::where('brand_name','Like','%'.$request->search.'%')
                        ->orWhere('brand_active','Like','%'.$request->search.'%')
                        ->orWhere('brand_status','Like','%'.$request->search.'%')->get();

        foreach($brand as $brand){
            $output.='
            <tr>
                <td>'.$brand->id.'</td>
                <td>'.$brand->brand_name.'</td>
                <td>'.$brand->brand_active.'</td>
                <td>'.$brand->brand_status.'</td>
                <td><a href="brand/'.$brand->id.'/edit" class="btn btn-warning">Uredi</a></td>
                <td>
                    <a href="brand/'.$brand->id.'/delete" class="btn btn-danger">Izbrisi</a>
                </td>
            </tr>';
        }
        return response($output);
    }

    public function create(){
        return view('brands.create');
    }

    public function store(Request $request){
        $data  = $request->validate([
            
        'brand_name'  => 'required',
        'brand_active' => 'required | numeric',
        'brand_status' => 'required | numeric'

        ]);

        $new_data  = Brand::create($data);

        return redirect(route('brand.index'));

    }

    public function edit(Brand $brand){
        return view('brands.edit',['brand' => $brand]);
    }

    public function update(Brand $brand,Request $request){
        $data  = $request->validate([
            
            'brand_name'  => 'required',
            'brand_active' => 'required | numeric',
            'brand_status' => 'required | numeric'
    
            ]);

            $brand->update($data);
            return redirect(route('brand.index'))->with('succes','Uspjesno uredjen');
            
    }

    public function delete(Brand $brand){
        return view('brands.delete',['brand' => $brand]);
    }

    public function destroy(Brand $brand){
        //$brand = Brand::find($id);
        $brand->delete();
        return redirect(route('brand.index'))->with('succes','Uspjesno izbrisan');
        
    }
}
