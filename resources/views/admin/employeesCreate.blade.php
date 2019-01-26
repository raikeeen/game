@extends('layouts.masterHome')

@section('content')
    <h1 class="jumbotron-heading">Добавить сотрудника </h1>
    <form method="post" enctype="multipart/form-data" action="{{route('employees-save')}}">
        {{csrf_field()}}

        <label >Имя</label>

        <input name="name"   type="text" class="form-control" placeholder="Введите имя" required>

        <div class="form-group">
            <label>О сотруднике</label>
            <input name="about"  type="text" class="form-control" placeholder="Введите сведения" required>
        </div>
        <div class="form-group">
            <label>Почта</label>
            <input name="email"  type="text" class="form-control" placeholder="Введите email" required >
        </div>


        <div class="form-group">
            <label >Изображение</label>
            <input name="employeesImage" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

@endsection
