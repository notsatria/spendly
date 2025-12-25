<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
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

        return view('pages.categories', compact('categories'));
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
        $validated = $request->validate([
            'name' => 'string|min:3',
        ]);
    }

    public function getAll(Request $request)
    {
        $categories = $request->user()->categories();
    }
}
