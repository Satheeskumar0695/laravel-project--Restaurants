<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menues;
use App\Models\menu_item;
use App\Models\staffs_registers;
use Session;
class admincontroller extends Controller
{
        public function index()
        {
            return view('components.admin');
        }


        public function employee()
        {
            return view('components.addemployee');
        }
        public function addemployee(request $request)
        {
               $employee= new staffs_registers;

               $employee->firstname=$request->firstname;
               $employee->lastname=$request->lastname;
               $employee->email_id=$request->email_id;
               $employee->password=$request->password;
               $employee->phonenumber=$request->mobilenumber;
               $employee->dob=$request->dob;
               $employee->age=$request->age;
               $employee->gender=$request->gender;
               $employee->nationality=$request->nationality;
               $employee->door_no=$request->doorno;
               $employee->street_name=$request->streetname;
               $employee->locality=$request->locality;
               $employee->city=$request->city;
               $employee->country=$request->country;
               $employee->state=$request->state;
               $employee->distict=$request->district;
               $employee->pincode=$request->pincode;
               $employee->qualification=$request->qualification;
               $employee->experience=$request->experience;
               $employee->role=$request->role;
               $employee->joining=$request->doj;


            //    $employee->aadharcard=$request->hasfile('aadharcard');
            //    $employee->pancard=$request->hasfile('pancard');
            //    $employee->passbook=$request->hasfile('passbook');
            //    $employee->image=$request->hasfile('image');
               if($request->hasFile('aadharcard'))
               {
                $aadharcard = $request->file('aadharcard');
                $productImageName = date('y-md-d') . time() . "." . $aadharcard->extension();
                $productImageDestination = public_path('employeedetails');
                $aadharcard->move($productImageDestination, $productImageName);
                $employee->aadharcard = "employeedetails/" . $productImageName;
               }
               if ($request->hasFile('pancard'))
               {
                $pancard = $request->file('pancard');
                $productImageName1 = date('y-md-d') . time() . "." . $pancard->extension();
                $productImageDestination1 = public_path('employeedetails');
                $pancard->move($productImageDestination1, $productImageName1);
                $employee->pancard = "employeedetails/" . $productImageName1;
               }
               if ($request->hasFile('passbook'))
               {
                $passbook = $request->file('passbook');
                $productImageName2 = date('y-md-d') . time() . "." . $passbook->extension();
                $productImageDestination2 = public_path('employeedetails');
                $passbook->move($productImageDestination2, $productImageName2);
                $employee->passbook = "employeedetails/" . $productImageName2;
               }
               if ($request->hasFile('image'))
               {
                $image = $request->file('image');
                $productImageName3 =date('y-md-d') . time() . "." . $image->extension();
                $productImageDestination3 = public_path('employeedetails');
                $image->move($productImageDestination3, $productImageName3);
                $employee->image = "employeedetails/" . $productImageName3;
               }



               $employee->bankname=$request->bankname;
               $employee->accountnumber=$request->account;
               $employee->ifsccode=$request->ifsc;
               $employee->branchname=$request->branchname;
                $employee->save();
                Session::flash('employee','Staff detailed successfully');
                return back();


        }

        public function menu()
        {
            return view('components.me');
        }

        public function addmenu(request $request)

            {
                $menuname = $request->input('menuname');
                $user = menues::where('name', $menuname)->first();

                if ($user) {

                    Session::flash('menu', 'This Menu Already Exists...');
                    return back()->withInput(['menuname' => $menuname]);
                } else {

                    $newMenu = new menues;
                    $newMenu->name = $request->input('menuname');
                    $newMenu->save();

                    Session::flash('message', 'Menu added successfully');
                    return redirect('menu');
                }


        }
        public function category()
        {      $menu=menues::all();
               return view('components.ca',compact('menu'));
        }




        public function addcategory(request $request)
        {
            $product_name = $request->input('productname');
            $productname = menu_item::where('product_name', $product_name)->first();

            if ($productname) {

                Session::flash('product', 'This Product Name Already Exists...');
                return back()->withInput(['productname' => $productname]);
            }

            else
             {



           $menu_item= new menu_item;

           $menu_item->menu_id=$request->menues;
           $menu_item->product_name=$request->productname;
           $menu_item->product_description=$request->productdescription;
           $menu_item->product_price=$request->productPrice;
            $menu_item->status=$request->status;
            if ($request->hasFile('productimage')) {
                $image = $request->file('productimage');
                $new_image = date('y-md-d') . time() . "." . $image->extension();
                $destination = public_path('productimage');
                $image->move($destination, $new_image);
                $menu_item->image = "productimage/" . $new_image;
            }

           $menu_item->save();
           Session::flash('category','CATEGORY ADDED SUCCEESFULLY....!');
           return redirect('category');

        }

        // public function image()
        // {
        //     $category=menu_item::all();
        //     return view('components.image',compact('category'));
        // }

}



}
