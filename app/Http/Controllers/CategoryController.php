<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Category::all();

        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {

        if ($request->file('image_file')) {
            $file = $request->file('image_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/category/'), $fileName);

            // Add 'image' to request data for saving
            $request->request->add(['image' => $fileName]);
        }

        $category = Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category created successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        if(!$category){
            return redirect()->route('category.index');
        }
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)

    {

        if($category->update($request->all())){

            return redirect()->route('category.index')->with('success','Category Updated Successfully!!!');

        } else {

            return redirect()->route('category.index')->with('error','Category Update Failed!!!');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Category not found');
        }
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }


}
