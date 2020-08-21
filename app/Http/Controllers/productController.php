<?php

namespace App\Http\Controllers;

use App\Http\Resources\productResource;
use App\Http\Resources\productResourceCollection;
use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    public function all(): productResourceCollection
    {
        return new productResourceCollection(product::paginate());

    }

    public function Read(product $product): productResource
    {
        return new productResource($product);
    }

    public function store(Request $request){

        $request->validate([
            'ProductName' => 'required',
            'ProductType' => 'required',
            'Quality' => 'required',
            'Active' => 'required',
            'Weight' => 'required',
            'OwnerID' => 'required',
        ]);
        $product= product::create($request->all());
        return new productResource($product);
    }
    public function update(product $product ,Request $request):productResource
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
        ]);

        $product->update($request->all());

        return new productResource($product);
    }

    public function delete(product $product, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
        ]);

        $product->delete();

        return response()->json();
    }


}
