@extends('layouts.master')

@section('content')
                        

<div class="row">
    
<div class="col-sm-9 col-lg-9 col-md-9">
                        <div class="thumbnail">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="{{$post->img}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{$post->img}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{$post->img}}" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                </div>
                            <div class="caption content">
                                <h4 class="pull-right">${{$post->price}}</h4>
                                <h4 class="">{{ $post->title}}</h4>
                                <div>
                                    {{$post->content}}
                                </div>
                            </div>
                           
                            </div>
                        </div>

</div>
<div class="row">
<div class="col-sm-6">
{{link_to_route('index', 'Back')}}
</div>

</div>


@stop