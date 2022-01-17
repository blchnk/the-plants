@extends('index')

@section('content')
    @foreach ($products as $product)
        <div class="admin-products-wrapper" style="display:flex; margin-bottom: 20px;">
            <div class="product-wrapper product" style="border: 1px black solid; margin-right: 10px;">

                <img class="product__img" style="width: 300px;height: auto;" src="{{ asset('images/products/'.$product -> image) }}" alt="">

                <p class="product__name" style="width: 500px;">{{ $product -> name }}</p>
                <p class="product__price">{{ $product -> price }}</p>
            </div>
            <button class="btn green-btn admin-add-product-btn">
                <a href="{{ route('product.edit', $product -> id) }}">Редактировать товар</a>
            </button>
            <form action="{{ route('product.destroy', $product -> id) }}" method = "post">
                @csrf
                @method('delete')
                <button type="submit" class="btn green-btn admin-destroy-product-btn" style="background-color: red">Удалить товар</button>
            </form>
        </div>
    @endforeach

    <button class="btn green-btn admin-add-product-btn">
        <a href="{{ route('product.create') }}">Добавить товар</a>
    </button>

    <button class="btn green-btn admin-add-product-btn">
        <a href="{{ route('index') }}">Домой</a>
    </button>

@endsection
