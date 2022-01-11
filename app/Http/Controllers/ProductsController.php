<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Controllers\FilesController;
use App\ProductImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('products/products',compact('products'));
    }

    public function create(){
        return view('products/products-create');
    }

    public function store(Request $request){
        // Storage::disk('local')->put('products', $request->image);
        // $path = FilesController::imgUpload($request->image,'products');
        $product = Product::create([
            // "image" => $request->image,
            // "image" => $path,
            "name" => $request->name,
            "price" => $request->price,
            "intro" => $request->intro,
            "stock" => $request->stock,
        ]);
        foreach ($request->img as $value) {
            ProductImg::create([
                'image_path' => $value,
                'product_id' => $product->id,
            ]);
        }
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products/products-edit',compact('product'));
    }

    public function update($id, Request $request){
        $product = Product::find($id);
        // $product->image = $request->image;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->intro = $request->intro;
        $product->stock = $request->stock;
        $product->save();
        if($request->img != NULL){
            foreach ($request->img as $value) { //如果沒有傳圖片,img屬性不存在,需用上一行驗證(edit中value="img[]已被拿掉 只有新增的圖片會有此屬性<-由JS產生")
                ProductImg::create([
                    'image_path' => $value,
                    'product_id' => $product->id,
                ]);
            }
        }
        return redirect('/products');
    }

    public function delete($id, Request $request){
        $img = ProductImg::where('product_id',$id)->get();
        foreach ($img as $value) {
            FilesController::deleteUpload($value->image_path);
        }
        Product::find($id)->delete();
        ProductImg::where('product_id',$id)->delete();
        return redirect('/products');
    }

    public function imgUpload(Request $request){
        $path = '['; //加前括
        foreach ($request->img as $value) {
            $path = $path.'"'.FilesController::imgUpload($value,'products').'",';
        }
        $path = rtrim($path,','); //減掉最後的逗點
        $path = $path.']'; //加後括
        return $path;
    }

    public function imgDelete(Request $request){
        ProductImg:: where('image_path',$request->path)->delete(); //前面是一整串圖片路徑,後面是指定要刪除的路徑
        return FilesController::deleteUpload($request->path); //刪除指定圖檔
    }
}
