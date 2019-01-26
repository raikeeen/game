@extends('layouts.masterHome')

@section('content')
    <h1 class="jumbotron-heading">Редактировать сотрудника </h1>
    <form method="post" enctype="multipart/form-data" action="{{route('employees-edit',['id'=>$employees->id])}}">
        {{csrf_field()}}
        @if($employees->img)
            <div class="form-group">
                <img height="200px" src="{{url('storage/'.$employees->img)}}" >

            </div>
        @endif
        <label >Имя</label>

        <input name="name"  value="{{$employees->name}}" type="text" class="form-control" required>

        <div class="form-group">
            <label>О сотруднике</label>
            <input name="about" value="{{$employees->about}}" type="text" class="form-control"  required>
        </div>
        <div class="form-group">
            <label>Почта</label>
            <input name="email" value="{{$employees->email}}" type="text" class="form-control"  required >
        </div>


        <div class="form-group">
            <label >Изображение</label>
            <input name="employeesImage" type="file">
        </div>

       <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

@endsection
