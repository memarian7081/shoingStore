@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-2">
            <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="{{asset('storage/' ,$Categorty->image)}}" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                     @if(!empty($category->description))
                         <p>{{$category->description}}</p>
                     @else
                     @endif

                     <a href="#" class="btn btn-primary">افزودن به سبد خرید</a>
                 </div>
            </div>
        </div>
    </div>
@endsection
