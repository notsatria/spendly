@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Categories" />
    <div class="grid grid-cols-1">
        <x-common.component-card title="Category List">
            <x-tables.category-table :categories="$categories" />
        </x-common.component-card>
    </div>
@endsection
