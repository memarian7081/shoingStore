@extends('layouts.app')
@section('content')
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf

    </form>
@endsection
