<script src="{{asset('js/jquery.min.js')}}"></script>
@extends('layouts.master')
@section('title')

@endsection
@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{$blog->name}}</h1>
                <hr>

                <!-- Date/Time -->
                <p>Опубликована {{$blog->created_at}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{url('storage/'.$blog->img)}}" height="200" width="600" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$blog->about}}</p>


                <!--
                <div class="card my-4">
                    <h5 class="card-header">Комментарии:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">добавить</button>
                        </form>
                    </div>
                </div>

                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                    </div>
                </div>
                -->

            </div>

            <div class="col-md-4">

                <form method="post" enctype="multipart/form-data" action="{{route('blog-se')}}">
                    <div class="card my-4">
                        <h5 class="card-header">Поиск по статьям</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="введите название статьи...">
                                <span class="input-group-btn">
                  <a class="btn btn-secondary" href="{{route('blog-searchView')}}" type="button">поиск</a>
                </span>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="card my-4">
                    <h5 class="card-header">Категории</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Новости</a>
                                    </li>
                                    <li>
                                        <a href="#">Игры</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Обновления</a>
                                    </li>
                                    <li>
                                        <a href="#">Фиксы</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        -->
    </div>
@endsection