@extends('layouts.app')
@section('content')
    <div class="row" >
@foreach($products as $product)
        <div class="col-sm-6 col-md-6 col-lg-4 ">
            <div class="card shadow"  >
                <img src="{{asset('storage/'.$product->image)}}" class="card-img-top rounded-top" alt="Themesberg office">
                <div class="card-body">
                    <span class="h6 icon-tertiary small"><span class="fas fa-medal "></span>{{$product->name}}</span>
                    <h3 class="h5 card-title mt-3">
                        @if($product->percentage > 0)
                            <button class="btn btn-danger">{{$product->discount}}</button>
                        @else
                        @endif
                    </h3>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#" class="btn btn-primary btn-sm">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-primary">افزودن به سبد خرید</button>
                        </form>
                    </a>
                </div>
            </div>
        </div>
@endforeach
    </div>
@endsection

