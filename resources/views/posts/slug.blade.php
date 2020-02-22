@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
            </div>
        </div>
        
				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>

       
    </div>
</div>
@endsection
