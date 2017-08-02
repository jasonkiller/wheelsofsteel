@extends('layout.main')

@section('css')
    @parent

@endsection


@section('content')

    <form action="/login" method="post">
        <img src="{{$src}}" alt="">
        <input type="text" name="captcha">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit">
    </form>
    this is the main content








@endsection


@section('js')
    @parent

@endsection