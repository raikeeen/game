<script src="{{asset('js/jquery.min.js')}}"></script>
@extends('layouts.master')
@section('title')

@endsection
@section('content')
        <div class="container">
            <section class="services">
                <div class="row">
                    <div class="col-9" >

                        <img  src="{{asset('images/1.jpg')}}" width="768" height="400">
                    </div>
                    <div class="col-3" >
                        <div class="row">
                            <img src="{{asset('images/1.jpg')}}" >
                        </div>
                        <div class="row">
                            <hr>
                        </div>

                        <div class="row">
                            <img src="{{asset('images/1.jpg')}}" >
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-4" >

                        <img  src="{{asset('images/1.jpg')}}" >
                    </div>
                    <div class="col-4" >

                        <img  src="{{asset('images/1.jpg')}}" >
                    </div>
                    <div class="col-4" >

                        <img  src="{{asset('images/1.jpg')}}" >
                    </div>
                </div>
            </section>
        </div>
@endsection