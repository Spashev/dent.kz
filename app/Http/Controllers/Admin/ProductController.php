<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Carbon::setLocale('ru');
        $products = Product::all();
        // dd($products->first()->toArray());
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('images')) {
            if(count($request->file('images')) > 0) {
                $product = Product::create([
                    'title' => $request->title,
                    'description' => $request->description, 
                    'status' => $request->status == 'on' ? true : false,
                    'price' => $request->price,
                    'currency' => $request->currency,
                    'quantity' => $request->count
                ]);
                foreach($request->file('images') as $image) {
                    $imagePath = $image->store('uploads/products', 'public');
                    Image::create([
                        'image_path' => $imagePath,
                        'product_id' => $product->id
                    ]);
                }
                foreach($request->category as $category) {
                    $product->categories()->attach($category);
                }
                return redirect()->route('admin.product');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function changeStatus(Request $request)
    {
        $product = Product::find($request->id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();
        return [
                'msg' => 'All good',
                'status' => $product->status
                ];
    }
}
