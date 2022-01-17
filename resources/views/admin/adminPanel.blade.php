@extends('index')

@section('content')
    <div class="admin-panel-body admin-panel">
        <h1 class="admin-panel__title">
            Лучшая админка
        </h1>
        <ul class="admin-panel__list">
            <li class="admin-panel__item">
                <a href="{{ route('product.index') }}" class="admin-panel__links">Товары</a>
            </li>
            <li class="admin-panel__item">
                <a href="" class="admin-panel__links">что-то</a>
            </li>
            <li class="admin-panel__item">
                <a href="" class="admin-panel__links">что-то</a>
            </li>
        </ul>
    </div>
@endsection
