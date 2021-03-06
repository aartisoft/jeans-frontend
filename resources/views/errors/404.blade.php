@extends('layouts')
@section('customcss')
<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('css/style.min.css') !!}">
<!-- <link rel="stylesheet" type="text/css" href="{!! asset('css/responsivej.min.css') !!}"> -->
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">

                    @if($errors->any())
                      <h4>{{$errors->first()}}</h4>
                    @else
                    Sorry, an error has occured, Requested page not found!
                    @endif
                </div>
                 
            </div>
        </div>
    </div>
</div>


@endsection
@section('customjs')

@endsection