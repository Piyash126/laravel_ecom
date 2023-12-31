<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catgeory;
use App\Models\Product;
use App\Models\Order;
use PDF;
use Notification;
use App;
use App\Notifications\MyFirstNotification;


class AdminController extends Controller
{
    public function view_category(){

        $data=catgeory::all();

        return view('admin.category', compact('data'));
    }


    public function add_category(Request $request){
        $data=new catgeory;

        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }


    public function delete_category($id){
        $data=catgeory::find($id);
        $data->delete();

        return redirect()->back()->with('message','Delete Category Successfully');
    }

    public function view_product(){
        

        $category=catgeory::all();

        return view('admin.product',compact('category'));
    }

    public function add_product(Request  $request){
        $product=new product;

        $product->title=$request->title;
        $product->descrption=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');

    }

    public function show_product(){
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }


    public function delete_product($id){
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product Deleteed Successfully');
    }


    public function update_product($id){

        $product=product::find($id);
        $category=catgeory::all();
        return view('admin.update_product',compact('product','category'));
    }

    public function update_product_confirm(Request $request,$id){
        $product=product::find($id);

        $product->title=$request->title;
        $product->descrption=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;


        $image=$request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        }

        

        $product->save();
        return redirect()->back()->with('message','Product Updated Successfully');

    }


    public function order(){
        $order=order::all();
        return view('admin.order',compact('order'));
    }


    public function delivered($id){
        $order=order::find($id);

        $order->delivery_status="Delivered";

        $order->save();

        return redirect()->back();
    }

    public function print_pdf($id){

        $order=order::find($id);
        $pdf=PDF::loadview('admin.pdf',compact('order'));

        return $pdf->download('order_details.pdf');
    }

    public function send_email($id){

        $order=order::find($id);

        return view('admin.email_info',compact('order'));


    }


    public function send_user_email(Request $request, $id){
        $order=order::find($id);

        $details=[
            'greeting'=>$request->greeting,
            'firstline'=>$request->firstline,
            'emailbody'=>$request->emailbody,
            'button'=>$request->button,
            'url'=>$request->url,
            'lastline'=>$request->lastline,
        ];

        Notification::send($order, new MyFirstNotification($details));

        return redirect()->back();
    }

}
