@extends('test.layouts.mainTheme')


@section('navbar')
    @parent
@endsection


@section('header')
    @parent
@endsection

@section('content')
   @include('test.layouts.content')
@endsection

