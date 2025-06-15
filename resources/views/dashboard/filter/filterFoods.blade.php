@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach($foods as $food)
            <div class="col-sm-6 col-lg-3 col-md-4">
                <div class="card">
                    <img src="{{asset('storage/' , $food->image)}}" alt="">
                    <div class="card-body">
                        <h3>{{$food->name}}</h3>
                        <p class="description">{{$food->description}}</p>
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-primary">افزودن به سبد خرید</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
