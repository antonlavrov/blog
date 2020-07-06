@extends('test.layouts.mainTheme')

@section('navbar')
    @parent
@endsection


@section('header')
    @parent
@endsection

@section('side-bar')   
@endsection


@section('content')
   @include('test.layouts.contact')    
@endsection