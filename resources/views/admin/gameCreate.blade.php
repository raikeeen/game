@extends('layouts.masterHome')

@section('content')

    <h1 class="jumbotron-heading">Добавить игру </h1>
    <form method="post" enctype="multipart/form-data" action="{{route('game-save')}}">
        {{csrf_field()}}

        <label >Название</label>

        <input name="name"   type="text" class="form-control" required>

        <div class="form-group">
            <label>О игре</label>
            <input name="about"  type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Дата релиза</label>
            <input name="dateRelease"  type="text" class="form-control" required>
        </div>
        <div class="form-group">

            <div class="form-group">
                <label >Изображение</label>
                <input name="gameImage" type="file">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>


@endsection
