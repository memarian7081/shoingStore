@extends('layouts.app')
@section('content')
{{--<x-category  />--}}
{{--    <x-products/>--}}
{{--    <x-users/>--}}
{{--    <x-filter.products/>--}}
    @foreach($drinks as $drink)
        <p>{{$drink->name}}</p>
    @endforeach
@endsection
