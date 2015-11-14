@extends('app')

	@section('content')

	<h1>Edit </h1>

	{!! Form::model($article, ['method' => 'PATCH','action' => ['ArticlesController@update', $article->id]]) !!}
			
			@include('articles.partials.form', ['submitButtonText' => 'Edit Article'])

	{!! Form::close() !!}

	@include('errors.list')

@stop