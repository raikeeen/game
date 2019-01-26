@extends('layouts.masterHome')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Игры</h1>


            <a class="btn btn-primary" href="{{route('game-create')}}">Добавить игру</a>

        </div>
    </main>
    <? $php=0; a:?>
    <div class="row">
        @foreach($game as $gam)

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{url('storage/'.$gam->img)}}" height="250">
                    <div class="card-body">
                        <p><h3>{{$gam->name}}</h3></p>
                        <p class="card-text">{{str_limit($gam->about, 50)}}</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{route('game-change',['id'=>$gam->id])}}">Редактировать</a>
                            </div>
                            <small class="text-muted">{{$gam->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
            <? $php++;
            if($php===3)
                goto a;?>
        @endforeach
    </div>

@endsection
