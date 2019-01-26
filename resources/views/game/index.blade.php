<script src="{{asset('js/jquery.min.js')}}"></script>
@extends('layouts.master')
@section('title')

@endsection
@section('content')
    <div class="row">
        <div class="align-content-center"><h1>Разрабатываемые игры</h1></div></div>
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
                        <a href="{{route('game-detail',['id'=>$gam->id])}}"><button type="button" class="btn btn-sm btn-outline-secondary">подробнее</button></a>

                    </div>
                    <small class="text-muted">{{$gam->created_at}}</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection