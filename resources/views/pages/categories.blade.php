@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Categories" />
    <div class="grid grid-cols-1">
        <x-tables.category-table :categories="$categories" />
    </div>
@endsection
