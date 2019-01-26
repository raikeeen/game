@extends('layouts.masterHome')

@section('content')
    <h1 class="jumbotron-heading">Редактировать статью </h1>
    <form method="post" enctype="multipart/form-data" action="{{route('news-edit',['id'=>$blog->id])}}">
        {{csrf_field()}}
        @if($blog->img)
            <div class="form-group">
                <img height="200px" src="{{url('storage/'.$blog->img)}}" >

            </div>
        @endif
        <label >Название</label>

        <input name="name"  value="{{$blog->name}}" type="text" class="form-control" placeholder="Введите имя" required>

        <div class="form-group">
            <label>Статья</label>
            <input name="about" value="{{$blog->about}}" type="text" class="form-control" placeholder="Введите сведения" required>
        </div>


        <div class="form-group">
            <label >Изображение</label>
            <input name="newsImage" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

@endsection
