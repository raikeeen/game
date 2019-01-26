@extends('layouts.masterHome')

@section('content')


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Зарегистрированные пользователи</h1>

                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Пользователь</th>
                            <th></th>
                            <th>Дата регистрации</th>

                        </tr>
                        </thead>

                    </table>
                    @foreach($users as $user)


                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th>{{$user->name}}</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>{{$user->created_at}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            <br>
                    @endforeach
                </div>

            </main>

        </div>
    </div>
@endsection
