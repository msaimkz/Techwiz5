<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\Product;


class CartController extends Controller
{
    public function AddtoCart(Request $request){
        
        $product = Product::with('image')->find($request->id);  

       
         if($product == null) {
             return response()->json([
               'status' => false,
                'msg' => 'Product Not Found' 
             ]);
         }
     
 
         if(Cart::count() > 0){
            $Cart = Cart::content();
             $productAlreadyExist = false;
            foreach ($Cart as $item){
             if($item->id == $product->id){
                 $productAlreadyExist = true;      
             }
            }
            if($productAlreadyExist == false){
             Cart::add($product->id,$product->name, 1,$product->price,["productImage" => (!empty($product->image->first())) ? $product->image->first() : '' ]);
             $status = true;
             $message = $product->name.' Added in Cart';
            }
            else{
             $status = false;
             $message = $product->name.' Already Added in Cart';
            }
         }
         else{
             Cart::add($product->id,$product->name, 1,$product->price,["productImage" => (!empty($product->image->first())) ? $product->image->first() : '' ]);
             $status = true;
             $message = $product->name.' Added in Cart';
            
         }
 
         return response()->json([
             'status' => $status,
             'msg' => $message 
            ]);
      }

      public function UpdateCart(Request $request)
      {
  
          $rowId = $request->rowid;
          $qty = $request->qty;
          $id = Cart::get($rowId);
          
          $product = Product::find($id->id);

          if ($request->qty <= $product->qty) {
              Cart::update($rowId, $qty);
            
              $status = true;
              $message = '<strong>' . $product->name . '</strong> Updated Successfully';
  
              $request->session()->flash("success", $message);

          } else {
              $status = false;
              $message = 'Requested Quantity(' . $qty . ') is not avialable';
              $request->session()->flash("error", $message);
  
          }
          $subTotal = Cart::subtotal();
          
          return response()->json([
              'status' => $status,
              'msg' => $message,
              'cartitem' => Cart::get($rowId),
              'subTotal' => $subTotal
          ]);
      }

      
    public function DeleteCart(Request $request)
    {
        $rowId = $request->rowid;
        Cart::remove($rowId);
        $status = true;
        $message = '<strong>Product</strong> Remove Cart in   Successfully';

        $request->session()->flash("success", $message);

        return response()->json([
            'status' => $status,
            'msg' => $message,
        ]);

    }
}