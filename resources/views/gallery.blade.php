@extends('layout')

@section('content')
	<div class="d-flex justify-content-center">
		{!! $images->links() !!}
	</div>
	<div class="gallery">
	@foreach($images as $key => $image)
		<img src="/img/{!! $image !!}" class="column img-responsive">
	@endforeach
	<div>
@endsection
