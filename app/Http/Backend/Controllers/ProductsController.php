<?php

namespace App\Http\Backend\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Backend\Requests;
use App\Http\Backend\Requests\CreateProductsRequest;
use App\Http\Backend\Requests\UpdateProductsRequest;
use App\Http\Backend\Controllers\Controller;
use DB;
use App\Models\Category;
use Flash;

class ProductsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('backend.products.create', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request request create
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductsRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = Product::upload($image);
        }
        Product::create($data);
        Flash::success('Create new products success.');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id products
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::pluck('name', 'id');
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('categories', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id products
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name', 'id');
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request update
     * @param int                      $id      id products
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = Product::upload($image);
        }
        $product->update($data);
        Flash::success('Update products success.');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id delete products
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $messages = "Delete products success.";
        Flash::success($messages);
        return redirect()->route('admin.products.index');
    }
}
