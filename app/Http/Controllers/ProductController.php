<?php


namespace App\Http\Controllers;
//use App\Http\Resources\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    //

    public function index()
    {
        //Get all task
        $products = Product::paginate(15);

        // Return a collection of $task with pagination
        return ProductResource::collection($products);
//        return new ProductResource(Product::find($id));
//        return Product::all ();
    }

    public function show ($id)
    {
        return new ProductResource(Product::find($id));
    }
}