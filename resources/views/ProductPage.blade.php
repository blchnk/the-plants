@extends('index')

@section('content')
    <product-page :product = "{{ json_encode($product) }}"></product-page>
@endsection
