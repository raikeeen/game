<script src="{{asset('js/jquery.min.js')}}"></script>
@extends('layouts.master')
@section('title')

@endsection
@section('content')
    <h1>Форма обратной связи</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" action="{{route('support-save')}}">
        {{csrf_field()}}
    <div class="col">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="name" class="h4">Имя</label>
            <input type="text" class="form-control" name="name" placeholder="Введите имя" required>
        </div>
        <div class="form-group col-sm-6">
            <label for="email" class="h4">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Введите почту" required>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="h4 ">Отправить</label>
        <textarea name="message" class="form-control" rows="5" placeholder="Введите ваше сообщение" required></textarea>
    </div>
    <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Отправить</button>

    </div>
    </form>
@endsection