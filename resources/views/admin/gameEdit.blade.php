@extends('layouts.masterHome')

@section('content')
    <h1 class="jumbotron-heading">Редактировать игру </h1>
    <form method="post" enctype="multipart/form-data" action="{{route('game-edit',['id'=>$game->id])}}">
        {{csrf_field()}}
        @if($game->img)
            <div class="form-group">
                <img height="200px" src="{{url('storage/'.$game->img)}}" >

            </div>
        @endif
        <label >Название</label>

        <input name="name"  value="{{$game->name}}" type="text" class="form-control"  required>

        <div class="form-group">
            <label>Об игре</label>
            <input name="about" value="{{$game->about}}" type="text" class="form-control"  required>
        </div>
        <div class="form-group">
            <label>Дата релиза</label>
            <input name="dateRelease" value="{{$game->dateRelease}}" type="text" class="form-control"  required>
        </div>


        <div class="form-group">
            <label >Изображение</label>
            <input name="gameImage" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

@endsection
