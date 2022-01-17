@extends('index')

@section('content')
    <subcategory-page :products = "{{ json_encode($products) }}"
                      :subcategory_name = "{{ json_encode($subcategory) }}">
    </subcategory-page>
@endsection
