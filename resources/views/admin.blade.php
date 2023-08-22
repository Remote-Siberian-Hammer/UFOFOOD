@extends('layouts.base')

@section('content')
    <div class="row wrapper">
        <div class="col-12">
            <div class="col-4 mx-auto h-100">
                <div class="ufo_card h-100 d-flex">
                    <div class="ufo-menu mb-5 mx-auto">
                        <img src="{{ asset('logo.png') }}" class="img-fluid mx-auto d-block" alt="UFOFOOD">
                        <div class="mb-5"></div>
                        <div class="mt-3 d-flex align-items-center justify-content-center">
                            <div class="row">
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">Меню категории</a>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">Меню</a>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">Клиенты</a>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">Сотрудники</a>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">Заказы</a>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">История заказов</a>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="btn ufo_btn d-block mx-auto w-90 mb-3">Выход</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection