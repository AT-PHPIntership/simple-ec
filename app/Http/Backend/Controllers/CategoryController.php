<?php

namespace App\Http\Backend\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Backend\Requests\CreateCategoryRequest;
use App\Http\Backend\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id', 'name', 'image')->orderBy('id', 'DESC')->paginate(10);
        return view('backend.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = Category::upload($image);
        }
        Category::create($data);
        return redirect()->route('admin.categories.index')->with(['flashMessage'=>'Thêm thành công !']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id category

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request
     * @param int                      $id      id category
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = Category::upload($image);
        }
        $category->update($data);
        return redirect()->route('admin.categories.index')->with(['flashMessage'=>'Sửa thành công !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id id category

     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories.index')->with(['flashMessage'=>'Xóa thành công !']);
    }
}
