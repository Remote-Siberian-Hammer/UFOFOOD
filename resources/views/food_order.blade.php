@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="mt-3 mb-3">
            <a href="{{ route('admin') }}" class="btn ufo_btn_round d-block w-10">Назад</a>
        </div>
        <div class="p-5">
            <div class="col-12 mx-auto h-100">
                <div class="mb-5">
                    <h3 class="text-center">История заказов</h3>
                </div>
                <div class="row">
                    <div class="ufo_card">
                        <div class="mt-3">
                            <table class="table table-warning table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col">Детали</th>
                                        <th scope="col">Клиент</th>
                                        <th scope="col">Статус</th>
                                        <th scope="col">Дата и время</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases_history as $item)
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
                                            <th scope="row">{{ $item['users']['FirstName'] }} {{ $item['users']['LastName'] }} {{ $item['users']['Phone'] }}</th>
                                            <th scope="row">{{ $item['status'] }}</th>
                                            <th scope="row">{{ $item['set_date'] }} | {{ $item['set_time'] }}</th>
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
@endsection