@extends('layouts.masterHome')

@section('content')

    <h1 class="jumbotron-heading">Добавить новость </h1>
    <form method="post" enctype="multipart/form-data" action="{{route('news-save')}}">
        {{csrf_field()}}

        <label >Имя</label>

        <input name="name"   type="text" class="form-control" placeholder="Введите заголовок" required>

        <div class="form-group">
            <label>О сотруднике</label>
            <input name="about"  type="text" class="form-control" placeholder="Введите статью" required>
        </div>
        <div class="form-group">

        <div class="form-group">
            <label >Изображение</label>
            <input name="newsImage" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

@endsection
