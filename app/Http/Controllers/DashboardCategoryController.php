<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\ValidatedData;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.category.index', [
            'categories' => Categories::where('user_id', auth()->user()->id)->paginate(5),
            'title' => 'Category',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create', [
            'title' => 'Create Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25',
            'slug' => 'required|unique:categories',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Categories::create($validatedData);
        return redirect('/dashboard/category')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        return view('dashboard.category.edit', [
            'categories' => $categories,
            'title' => 'Edit Category',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        $rules = [];

        if ($request->slug != $categories->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        if ($request->name != $categories->name) {
            $rules['name'] = 'required|unique:categories|max:25';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Categories::where('id', $categories->id)
            ->update($validatedData);
        return redirect('/dashboard/category')->with('success', 'Category has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        Categories::destroy($categories->id);
        return redirect('/dashboard/category')->with('success', 'Category has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Categories::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
