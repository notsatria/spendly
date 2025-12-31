@extends('layouts.app')

@php
    use App\Enums\CategoryType;
    $breadcrumbs = [['title' => 'Categories', 'url' => route('categories')], ['title' => 'Add Category']];
@endphp

@section('content')
    <x-common.page-breadcrumb pageTitle="Add Category" :breadcrumbs="$breadcrumbs" />
    <div class="grid grid-cols-1">
        <x-common.component-card title="Category">
            <form action="{{ route('categories.store') }}" method="POST" class="w-full flex flex-col gap-4">
                @csrf
                <div>
                    <label for="name" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Name
                    </label>
                    <input type="text" id="name" name="name"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        value="" placeholder="Example: Entertainment" />
                    @error('name')
                        <p class="text-theme-xs text-error-500 mt-1.5">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="type" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Type
                    </label>
                    <div class="relative z-20 bg-transparent">
                        <select id="type" name="type"
                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                            <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400" disabled>
                                Select Option
                            </option>
                            @foreach (CategoryType::cases() as $type)
                                <option value="{{ $type->value }}"
                                    class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                                    {{ ucfirst($type->value) }}
                                </option>
                            @endforeach
                        </select>
                        <span
                            class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                            <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="flex justify-end mt-2">
                    <x-ui.button size="sm" class="ml-auto" type="submit">Add Category</x-ui.button>
                </div>
            </form>
        </x-common.component-card>
    </div>
@endsection
