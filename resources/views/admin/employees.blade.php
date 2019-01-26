@extends('layouts.masterHome')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Сотрудники</h1>


            <a class="btn btn-primary" href="{{route('employees-create')}}">Добавить сотрудника</a>


        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>О сотруднике</th>
                    <th>email</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
@foreach($employees as $employ)
            <table class="table table-striped table-sm">
                <thead>
            <tr>
                <th>{{$employ->id}}</th>
                <th>{{$employ->name}}</th>
                <th>{{$employ->about}}</th>
                <th>{{$employ->email}}</th>
                <th> <form method="post" action="{{route('employees-delete',['id'=>$employ->id])}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger btn-lg">Удалить?</button>
                    </form>

                </th>
                <th>


                    <a class="btn btn-primary" href="{{route('employees-change',['id'=>$employ->id])}}">Изменить?</a>

                </th>
            </tr>
                </thead>
                <tbody>

                <br>
    @endforeach

    </main>

@endsection
