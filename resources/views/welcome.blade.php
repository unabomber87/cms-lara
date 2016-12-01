@extends('layouts.master')
@section('content')
    @include('snippets.banner')
    <div class="technology">
        <div class="container">
        		<div class="col-md-9 technology-left">
            	@include('snippets.index.left')
            </div>
            <div class="col-md-3 technology-right">
            	@include('snippets.index.right')
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection