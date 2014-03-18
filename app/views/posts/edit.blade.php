@extends('layouts.master')

@section('content')

{{Form::model($item, [ 'method' => 'PATCH', 'route' => 'update', $item->id])}}

<div>	
{{Form::label('title', 'Title:') }}

{{Form::text('title') }}
</div>

<div>	
{{Form::label('price', 'Price:') }}

{{Form::text('price') }}
</div>

<div>	
{{Form::label('description', 'Description:') }}

{{Form::textarea('description') }}
</div>

{{Form::submit('Update Order')}}

{{Form::close()}}

@stop