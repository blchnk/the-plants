@extends('index')

@section('content')

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="subcategory_id">subcategory_id</label>
            <input type="text" name="subcategory_id" id="subcategory_id" placeholder="subcategory_id">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" placeholder="image">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="price">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="description">
        </div>
        <button type="submit">Create</button>
    </form>

@endsection
