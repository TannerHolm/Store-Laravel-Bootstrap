@extends('layouts.master')

@section('content')


<div class="row">
    
<div class="col-sm-9 col-lg-9 col-md-9">
                        <div class="thumbnail">
                            <img src="{{$post->img}}" alt="">
                            <div class="caption content">
                                <h4 class="pull-right">{{$post->price}}</h4>
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