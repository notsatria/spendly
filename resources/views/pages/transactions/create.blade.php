@extends('layouts.app')

@php
    $breadcrumbs = [['title' => 'Transactions', 'url' => route('transactions')], ['title' => 'Add Transaction']];
@endphp

@section('content')
    <x-common.page-breadcrumb pageTitle="Add Transaction" :breadcrumbs="$breadcrumbs" />
    <div class="grid grid-cols-1">
        <x-common.component-card title="Transaction">
            <form action="{{ route('transactions.store') }}" method="POST" class="w-full flex flex-col gap-4">
                @csrf
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Amount
                    </label>

                    <div class="relative">
                        <input type="text" id="amount" name="amount" placeholder="Example: 20.000"
                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />
                        <span
                            class="absolute top-1/2 left-0 flex h-11 w-[46px] -translate-y-1/2 items-center justify-center border-r border-gray-200 dark:border-gray-800 text-gray-dark dark:text-white">
                            Rp
                        </span>
                    </div>
                    @error('amount')
                        <p class="text-theme-xs text-error-500 mt-1.5">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Note
                    </label>
                    <textarea name="note" placeholder="From freelance" type="text" rows="4"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"></textarea>
                    @error('note')
                        <p class="text-theme-xs text-error-500 mt-1.5">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-row gap-4">
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Transaction Date
                        </label>

                        <x-form.date-picker id="date_pick" name="transaction_date" placeholder="Date Picker"
                            defaultDate="{{ now()->format('l, d M Y') }}" dateFormat="l, d M Y" />
                        @error('transaction_date')
                            <p class="text-theme-xs text-error-500 mt-1.5">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Transaction Time
                        </label>
                        <x-form.time-picker name="transaction_time" />
                        @error('transaction_time')
                            <p class="text-theme-xs text-error-500 mt-1.5">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="category" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Category
                    </label>
                    <div class="relative z-20 bg-transparent">
                        <select id="category" name="category_id"
                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                            <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400" disabled>
                                Select Option
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    class="text-gray-700 dark:bg-gray-900 dark:text-gray-400" @selected(old('category_id') == $category->id)>
                                    {{ ucfirst($category->name) }}
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
                    @error('category_id')
                        <p class="text-theme-xs text-error-500 mt-1.5">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex justify-end mt-2">
                    <x-ui.button size="sm" class="ml-auto" type="submit">Add Transaction</x-ui.button>
                </div>
            </form>
        </x-common.component-card>
    </div>
@endsection
