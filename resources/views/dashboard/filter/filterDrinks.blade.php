@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach($drinks as $drink)
            <div class="col-sm-6 col-lg-3 col-md-4">
                <div class="card">
                    <img src="{{asset('storage/' ,  $drink->image)}}" alt="">
                    <div class="card-body">
                        <h3>{{ $drink->name}}</h3>
                        <p class="description">{{ $drink->description}}</p>
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

