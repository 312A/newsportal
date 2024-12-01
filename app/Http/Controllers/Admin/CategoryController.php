<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
            // $categories = Category::findorfail(3);
            // $categories = Category::where('slug','Sports')->get();

            // return "hi";
        // return $categories;
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request->all();
        $request->validate(
            [
                "title"=>"required|max:255|unique:categories",
                "nep_title"=>"required"

            ]
        );
        $category = new Category();
        $category->title = $request->title;
        $category->nep_title = $request->nep_title;
        $category->slug = Str::slug($request->title);

        $category->save();
        toast('Record  saved successfully','success');

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                "title"=>"required|max:255|unique:categories,title,$id",
                "nep_title"=>"required"
            ]
        );
        $category = Category::find($id);
        $category->title = $request->title;
        $category->nep_title = $request->nep_title;

        $category->update();

        toast('Record  updated successfully','success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        toast('Record deleted successfully','success');
        return redirect()->back();
    }
}
