@extends('layouts.master')

@section('content')


<div class="row">
    
<div class="col-sm-9 col-lg-9 col-md-9">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">{{$post->price}}</h4>
                                <h4 class="">{{ $post->title}}</h4>
                                <p>
                                    {{$post->content}}
                                </p>
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