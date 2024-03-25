<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventarys;
use App\Models\menues;
use App\Models\menu_item;
use Session;
class inventarycontroller extends Controller
{
    public function addproduct()
    {
        return view (' Inventary.addproducts');
    }

    public function products(request $request)
    {
               $inventary= new inventarys;
               $inventary->product_name=$request->productName;
               $inventary->product_quantity=$request->productQuantity;
               if ($request->hasfile('image'))
               {
                         $productimage=$request->file('image');
                         $image = date('y-md-d') . time() . "." . $productimage->extension();
                         $Destination=public_path('inventary');
                         $productimage->move($Destination,$image);
                         $inventary->product_image="inventary/".$image;
                         $inventary->save();
                         Session::flash('inventary','products added successfully');
                          return redirect('addinventry');
               }
    }


    public function view_products()
    {
        // $inventory = Inventarys::paginate(5);
        $inventary=inventarys::paginate(5);
        return view('Inventary.view_products',compact('inventary'));
    }

    public function update()
    {
        $inventary=inventarys::paginate(5);
        return view('Inventary.update',compact('inventary'));
    }
    public function edit($product_id)

    {
        $inventary = inventarys::where('product_id', $product_id)->first();

        return view('inventary.edit',compact('inventary'));

    }

    public function updateproduct( request $request)
{
    $inventary = inventarys::where('product_id', $request->product_id)->first();

        $inventary->product_name = $request->productName;
        $inventary->product_quantity = $request->productQuantity;
        $inventary->save();

       return redirect('view');
}
public function delete($product_id)
{
    $inventary=inventarys::find($product_id);
    $inventary->delete();
    Session::flash('delete', 'product deleted successfully...!');
    return redirect('update');
}


}



