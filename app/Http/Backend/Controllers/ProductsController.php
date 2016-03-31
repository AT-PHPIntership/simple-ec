<?php

namespace App\Http\Backend\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

use App\Http\Backend\Requests;
use App\http\Backend\Requests\CreateProductsRequest;
use App\http\Backend\Requests\UpdateProductsRequest;
use App\Http\Backend\Controllers\Controller;
use DB;
use App\Models\Categories;
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
        $products = Products::with('category')->get();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create new products';
        $categories = Categories::pluck('name', 'id');
        return view('backend.products.create', compact('title', 'categories'));
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
            $data['image'] = Products::upload($image);
        }
        $products = Products::create($data);
        $messages = [
            'success' => 'Create new products success.',
            'error'   => 'Create new products failed.'
        ];
        if ($products) {
            Flash::success($messages['success']);
            return redirect('/admin/products');
        } else {
            Flash::error($messages['error']);
            return redirect(('/admin/products/create'));
        }

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
        $products = Products::find($id);
        return $products;
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
        $title = 'Create new products';
        $categories = Categories::pluck('name', 'id');
        $products = Products::find($id);
        if ($products) {
            return view('backend.products.edit', compact('title', 'categories', 'products'));
        } else {
            $messages = "Product not found.";
            Flash::error($messages);
            return redirect(('/admin/products'));
        }

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
        $products = Products::find($id);
        if ($products) {
            $data = $request->except('_token', '_method');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $data['image'] = Products::upload($image);
            } else {
                $data['image'] = $products->image;
            }
            $products = Products::where('id', $id)->update($data);
            $messages = [
                'success' => 'Update products success.',
                'error'   => 'Update products failed. Please try again.'
            ];
            if ($products) {
                Flash::success($messages['success']);
                return redirect('/admin/products');
            } else {
                Flash::error($messages['error']);
                return redirect(('/admin/products/'.$id.'/edit'));
            }
        } else {
            $messages = "Product not found.";
            Flash::error($messages);
            return redirect(('/admin/products'));
        }
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
        $products = Products::find($id);
        if ($products) {
            $products->delete();
            $messages = "Delete products success.";
            Flash::success($messages);
            return redirect(('/admin/products'));
        } else {
            $messages = "Product not found.";
            Flash::error($messages);
            return redirect(('/admin/products'));
        }
    }
}
