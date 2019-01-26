<script src="{{asset('js/jquery.min.js')}}"></script>
@extends('layouts.master')
@section('title')

@endsection
@section('content')


<div class="container">

    <h1 class="my-4">Новости

    </h1>
@foreach($blog as $blo)
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('storage/'.$blo->img)}}" width="600" height="700" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{$blo->name}}</h3>
            <p>{{ str_limit($blo->about, 150)}}</p>
            <a class="btn btn-primary" href="{{route('blog-detail',['id'=>$blo->id])}}">Читать</a>

        </div>
    </div>
        <p>{{ $blo->updated_at}}</p>

    <hr>
    @endforeach
<!--
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
-->
</div>

@endsection