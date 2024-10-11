<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController;

class ProductController extends BaseController
{
    public function showAll() {
        return Product::all();
    }
    public function deleteById($id) {
        $response = $this->send_response(Product::find($id)->toArray(), 'Product deleted successfully');
        Product::where('id', $id)->delete();
        return $response;
    }
    public function showById($id) {
        $product = Product::find($id);
        if(is_null($product)) {
            return $this->send_error("Product not found ...");
        }
        return $this->send_response($product->toArray(), "Product found successfully");
    }
    public function addProduct(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()) {
            return $this->send_error("Validation Error", $validator->errors());
        }
        $product = new Product($input);
        $product->save();
        return $this->send_response($product->toArray(), 'Product created successfully');
    }
    public function updateProduct(Request $request, $id) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()) {
            return $this->send_error("Validation Error", $validator->errors());
        }

        $product = Product::find($id);
        $response = Gate::inspect('update', $product);
        if ($response->allowed()) {
            Product::whereId($id)->update($request->all());
            return $this->send_response(Product::find($id)->toArray(), 'Product updated successfully');
        } else {
            return $this->send_error("ProductPolicy error ... ", false);
        }
    }
}
