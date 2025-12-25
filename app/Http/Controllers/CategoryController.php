<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = $request->user()
            ->categories()
            ->latest()
            ->get();

        return view('pages.categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'type' => ['required', new Enum(CategoryType::class)]
        ]);

        $request->user()->categories()->create($validated);

        return redirect()
            ->back()
            ->with('success', 'Category has been added');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'string|min:3',
            'type' => ['required', new Enum(CategoryType::class)],
        ]);

        $category->update($validated);

        return redirect()->route('categories.edit', $id)->with([
            'success' => 'Category updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.categories.edit', compact('category'));
    }
}
