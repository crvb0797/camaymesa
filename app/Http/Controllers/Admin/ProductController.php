<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRquest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRquest $request)
    {
        /* Storage::put('products', $request->file('file')); */
        $product = Product::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('products', $request->file('file'));
            $product->image()->create([
                'url' => $url,
            ]);
        }

        return redirect()->route('admin.products.create')->with('info', 'El producto se creo con éxito 👍🏻');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRquest $request, Product $product)
    {
        $product->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('products', $request->file('file'));

            if ($product->image) {
                Storage::delete($product->image->url);
                $product->image->update([
                    'url' => $url,
                ]);
            } else {
                $product->image()->create([
                    'url' => $url,
                ]);
            }
        }

        return redirect()->route('admin.products.edit', $product)->with('info', 'El producto se actualizó con éxito ✍🏻');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('info', 'El producto se eliminó con éxito 🧨');
    }
}
