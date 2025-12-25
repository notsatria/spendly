@extends('layouts.app')
@php
    $breadcrumbs = [['title' => 'Categories']];
@endphp

@section('content')
    <x-common.page-breadcrumb pageTitle="Categories" :breadcrumbs="$breadcrumbs" />
    <div class="grid grid-cols-1">
        <x-tables.category-table :categories="$categories" />
    </div>
@endsection
