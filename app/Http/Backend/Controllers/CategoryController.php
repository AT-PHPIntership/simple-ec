<?php

namespace App\Http\Backend\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Backend\Requests\AddCategoryRequest;
use App\Http\Backend\Requests\EditCategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id', 'name', 'image')->orderBy('id', 'DESC')->get();
        return view('backend.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request)
    {
        $img = $request->file('image');
        $imgName = time().'-'.$img->getClientOriginalName();
        $categories = new Category($request->all());
        $categories->name = $request->name;
        $categories->image =$imgName;
        $categories->save();
        $des = Category::IMAGES_PATH;
        $img->move($des, $imgName);
        return redirect()->route('admin.category.index');
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
        $categories = Category::find($id);
        return $categories;
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
        return view('backend.category.edit', compact('category'));
    }

    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param  int $id id category
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoryRequest $request, $id)
    {
        if ($request->hasFile('image')) {
            $category = Category::find($id);
            $img = $request->file('image');
            $imgName = time().'-'.$img->getClientOriginalName();
            $category->name  = $request->name;
            $category->image = $imgName;
            $category->save();
            $des = Category::IMAGES_PATH;
            $img->move($des, $imgName);
            return redirect()->route('admin.category.index');
        } else {
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();
            return redirect()->route('admin.category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id id category

     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('admin.category.index');
    }
}
