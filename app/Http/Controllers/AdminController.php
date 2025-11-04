<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagorey;

use App\Models\product;

use App\Models\order;

use App\Models\Size;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{

    public function view_catagorey()
    {
        if(Auth::id())
        {
            $data = catagorey::orderBy('id', 'desc')->paginate(10);

            return view('Admin.catagorey', compact('data'));
           
        }
        else
        {
            return redirect('login');
        }
        }


    public function add_catagorey(Request $request)
    {
        $data=new catagorey ;  

        $data->catagorey_name=$request->catagorey;

        $data->save();
        return redirect()->back()->with('success', __('messages.category_added'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }

    public function edit_category($id)
    {
        $category = Catagorey::findOrFail($id);
        return view('Admin.catagorey_edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'catagorey_name' => 'required|string|max:255|unique:catagoreys,catagorey_name,' . $id,
        ]);

        $category = Catagorey::findOrFail($id);
        $category->update([
            'catagorey_name' => $request->catagorey_name,
        ]);

        return redirect()->route('categories.index')
            ->with('success', __('messages.category_updated'));
    }

    public function delete_catagorey($id)
    {
        $data = Catagorey::findOrFail($id);
        $data->delete(); 
        return redirect()->back()->with('success', __('messages.category_deleted'));
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

            $product->quantity=$request->Quantity;

            $product->price=$request->price;

            $product->discount_price=$request->dis_price;
            
            $product->catagorey=$request->catagorey;

                $image=$request->image;

                Log::info([$request->all()]);
                if($image){
                    $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('product',$imagename);
    
                $product->image=$imagename;
      
                }
            $product->save();

        

        return redirect()->back()->with('success', __('messages.product_added'));
        }

        public function show_product()
        {   $product=product::all();
            return view('Admin.show_product',compact('product'));
        }

        public function delete_product($id)
        {
                $product=product::find($id);
                $product->delete();
                return redirect()->back()->with('message',200,'product deleted successfully');
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

                            $product->discount_price=$request->dis_price;

                            $product->catagorey=$request->catagorey;

                            $product->quantity=$request->Quantity;

                            $image=$request->image;

                if ($image) {
        
                    $imagename=time().'.'.$image->getClientOriginalExtension();

                     $request->image->move('product',$imagename);

                     $product->image=$imagename;


                            }
                            
                            $product->save();

                            return redirect()->back();

                    }

public function order()
{   $order=order::all();

    return view ('Admin.order',compact('order'));
}

public function delivered($id)
{
    $order=order::find($id);
    $order->delivery_status="delivered";
    $order->payment_status='piad';
    $order->save();
    return redirect()->back();
}

}