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
        $data = Category::select('id', 'name', 'image')->orderBy('id', 'DESC')->get();
        return view('backend.category.list', compact('data'));
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
        $cate = new Category;
        $cate->name = $request->txtName;
        $cate->image =$imgName;
        $cate->save();
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
        $cate = Category::find($id);
        return $cate;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id category

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('backend.category.edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request
     * @param int                      $id      id

     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoryRequest $request, $id)
    {
        if ($request->hasFile('image')) {
            $cate = Category::find($id);
            $img = $request->file('image');
            $imgName = time().'-'.$img->getClientOriginalName();
            $cate->name = $request->txtName;
            $cate->image =$imgName;
            $cate->save();
            $des = Category::IMAGES_PATH;
            $img->move($des, $imgName);
            return redirect()->imgName('admin.category.index');
        } else {
            $cate = Category::find($id);
            $cate->name = $request->txtName;
            $cate->save();
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
        $cate = Category::findOrFail($id);
        $cate->delete();
        return redirect()->route('admin.category.index');
    }
}
