@extends('layouts.app')
@php
    $breadcrumbs = [['title' => 'Transactions']];
@endphp

@section('content')
    <x-common.page-breadcrumb pageTitle="Transactions" :breadcrumbs="$breadcrumbs" />
    <div class="grid grid-cols-1">
        <x-tables.transaction-table :transactions="$transactions" />
    </div>
@endsection
