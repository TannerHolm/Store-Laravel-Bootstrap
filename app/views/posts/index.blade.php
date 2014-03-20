@extends('layouts.master')
@section('content')
 <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">

                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
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

                </div>
	
@foreach($posts as $post)
    
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="{{route('show', $post->id) }}"><img src="{{$post->img}}" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">${{ Str::limit($post->price(), 5 )}}
                                </h4>
                                <h4 class=""><a href="{{route('show', $post->id) }}">{{ Str::limit($post->title(), 20 )}}</a></h4>
                                <p>
                                    {{ Str::limit($post->content(), 100 )}}
                                </p>
                            </div>
                           
                            </div>
                        </div>
                
				@endforeach
{{$posts->links()}}

@stop
