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
    <div class="col-lg-12">
        <span class="text-bold">{{ $page->title}}</span>
    </div>
    <div class="col-12">
        {!! $page->body !!}
    </div>
</div>
@endsection
