<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagorey;

use App\Models\product;

class AdminController extends Controller
{
    public function view_catagorey()
    {
        $data=catagorey::all();

    return view('Admin.catagorey',compact('data'));
    }


    public function add_catagorey(Request $request)
    {
        $data=new catagorey ;  

        $data->catagorey_name=$request->catagorey;

        $data->save();
        return redirect()->back()->with('message','Catagorey Added Successfully');
    }


    public function delete_catagorey($id)
    {
        $data=catagorey::find($id);
        $data->delete(); 
        return redirect()->back()->with('message','Catagorey deleted Successfully');
    }


    public function view_product()
    {   $catagorey=catagorey::all();
                return view('Admin.product',compact('catagorey'));
    }
        public function add_product(Request $request)
        {
            $product=new product;

            $product->title=$request->title;

            $product->description=$request->description;

            $product->quantity=$request->quantity;

            $product->discount_price=$request->discount_price;
            
            $product->catagorey=$request->catagorey;

                $image=$request->image;

                if($image){
                    $imagename=time().'.'.$imagename->getClientOriginalExtension();
    
                $request->image->move('product',$imagename);
    
                $product->image=$imagename;
      
                }
            $product->save();

            return redirect()->back()->with('massage','product Added Successfully');
        }

        public function show_product()
        {   $product=product::all();
            return view('Admin.show_product',compact('product'));
        }

        public function delete_product($id)
        {
                $product=product::find($id);
                $product->delete();
                return redirect()->back()->with('message','product deleted successfully');
        }


                public function update_product($id)
                {
                    $product=product::find($id);
                    $catagorey=catagorey::all();
                    return view('Admin.update_product',compact('product','catagorey'));
                }


                    public function update_product_confirm(Request $request,$id)
                    {
                            $product=product::find($id);

                            $product->title=$request->title;

                            $product->description=$request->description;

                            $product->price=$request->price;

                            $product->discount_price=$request->discount_price;

                            $product->quantity=$request->quantity;

                            $image=$request->image;

                if ($image) {
        
                    $imagename=time().'.'.$image->getClientOriginalExtension();

                     $request->image->move('product',$imagename);

                     $product->image=$imagename;


                            }
                            
                            $product->save();

                            return redirect()->back('message','product updated successfully');

                    }
}
