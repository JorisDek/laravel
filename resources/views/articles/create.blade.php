@extends('app')

	@section('content')
		<h1>Write an article</h1>
		<hr/>

		{!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}
			
			@include('articles.partials.form', ['submitButtonText' => 'Add Article'])

		{!! Form::close() !!}

		@include('errors.list')
	@stop