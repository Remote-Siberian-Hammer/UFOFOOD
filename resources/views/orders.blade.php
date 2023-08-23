@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="mt-3 mb-3">
            <a href="{{ route('admin') }}" class="btn ufo_btn_round d-block w-10">Назад</a>
        </div>
        <div class="p-5">
            <div class="col-12 mx-auto h-100">
                <div class="mb-5">
                    <h3 class="text-center">Заказы</h3>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="ufo_card">
                            <h3 class="text-center">Заказы готовятся</h3>
                            <div class="mt-3">
                                <div class="col-12">
                                    <table class="table table-warning table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Цена</th>
                                                <th scope="col">Детали</th>
                                                <th scope="col">Статус</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cooking as $item)
                                                <tr>
                                                    <th scope="row">{{ $item['id'] }}</th>
                                                    <th scope="row">{{ $item['price'] }}</th>
                                                    <th scope="row">
                                                        <ul>
                                                            @foreach ($item['values'] as $el)
                                                                <li class="mb-2">
                                                                    <div>
                                                                        <span>{{ $el['Title'] }} - {{ $el['Price'] }} р ({{ $el['Count'] }} шт)</span>
                                                                        @if (count($el['IngridientValue']) > 0)
                                                                            <div>
                                                                                <small>Ингридиенты:</small>
                                                                                <ol>
                                                                                    @foreach ($el['IngridientValue'] as $ingridient)
                                                                                        <li>
                                                                                            <small>{{ $ingridient['Title'] }} ({{ $ingridient['Count'] }} шт)</small>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ol>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <hr>
                                                                </li>
                                                            @endforeach
                                                        </ul> 
                                                    </th>
                                                    <th scope="row">{{ $item['status'] }}</th>
                                                    <th scope="row">
                                                        <form action="{{ route('admin.query.status_change') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                            <input type="hidden" name="status" value="Курьер в пути">
                                                            <button type="submit" class="btn ufo_btn">Передан курьеру</button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="ufo_card">
                            <h3 class="text-center">Заказы в доставке</h3>
                            <div class="mt-3">
                                <table class="table table-warning table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Статус</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($delivered as $item)
                                            <tr>
                                                <th scope="row">{{ $item['id'] }}</th>
                                                <th scope="row">{{ $item['status'] }}</th>
                                                <th scope="row">
                                                    <form action="{{ route('admin.query.status_change') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                        <input type="hidden" name="status" value="Готово">
                                                        <button type="submit" class="btn ufo_btn">Заказ доставлен</button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection