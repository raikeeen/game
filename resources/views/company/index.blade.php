<script src="{{asset('js/jquery.min.js')}}"></script>
@extends('layouts.master')
@section('title')

@endsection
@section('content')
    <div class="container">

        <!-- Introduction Row -->
        <h1 class="my-4">О нас
            <small>Приятно познакомиться!</small>
        </h1>
        <p>Молодая, динамично развивающаяся компания!</p>

        <!-- Team Members Row -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="my-4">Наша команда</h2>
            </div>
            @foreach($employees as $employ)
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{url('storage/'.$employ->img)}}" width="200" height="200" alt="">
                <h3>{{$employ->name}}
                </h3>
                <p>{{$employ->about}}!</p>
            </div>
                @endforeach
        </div>

    </div>
@endsection