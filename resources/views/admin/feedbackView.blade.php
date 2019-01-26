@extends('layouts.masterHome')

@section('content')

    <h1 class="my-4">Письма

    </h1>
    @foreach($feedback as $feed)
            <div class="container" >
        <div class="row">
      <!--      <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="" alt="">
                </a>
            </div>
            -->
            <div class="col-md-5">
                <h3>{{$feed->name}}</h3>
                <p>{{ $feed->message}}</p>
                <div class="row">

                <a class="btn btn-primary" href="{{route('feedback-detail',['id'=>$feed->id])}}">Ответить</a>
                    <form method="post" action="{{route('feedback-delete',['id'=>$feed->id])}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger btn-lg">Удалить?</button>
                    </form>
                    <hr>

                    <div class="align-text-top">
                        Отправлен
                        {{$feed->created_at}}
                </div>
                </div>
            </div>
        </div>
            </div>

        <hr>

    @endforeach
@endsection
