@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pages</div>
            </div>
        </div>
    </div>
    <div class="col-12">
    
    @foreach($pages as $page)
				<span>{{ $page->title}}</span>
                <img src="{{ Voyager::image( $page->image ) }}" alt="" width="100">
                <a href="/pages/{{ $page->slug }}">Открыть</a>
	@endforeach</div>
</div>
@endsection
