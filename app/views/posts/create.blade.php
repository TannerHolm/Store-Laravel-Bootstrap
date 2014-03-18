@extends('layouts.master')

@section('content')

<div class="row">
	
{{Form::open([ 'method' => 'POST', 'route' => 'store'])}}

<div class="col-md-12 form-group">	
{{Form::label('title', 'Title:') }}

{{Form::text('title') }}
</div>

<div class="col-md-12 form-group">	
{{Form::label('price', 'Price:') }}

{{Form::text('price') }}
</div>

{{Form::label('description', 'Description:') }}

{{Form::textarea('description', null, array(
    'id'      => 'summernote',
));
}}
</div>
<div class="col-md-12">
	
{{Form::submit('Create Item')}}
</div>

{{Form::close()}}
</div>

@stop