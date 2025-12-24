<?php

namespace App\Http\Controllers;

use App\Enums\Category;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'type' => ['required', new Enum(Category::class)]
        ]);

        $user_id = Auth::id();

        $category = ModelsCategory::create([
            'name' => $validated['name'],
            'user_id' => $user_id,
            'type' => $validated['type']
        ]);
    }
}
