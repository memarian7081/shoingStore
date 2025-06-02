@extends('layouts.app')
@section('content')

@foreach($products as $product)
    <div class="height d-flex justify-content-center align-items-center" style="display: flex;margin-top: 5%">

        <div class="row">
            <div class="col-sm-4">
                <div class="card p-3" style=" width:350px;
                                  height:370px;display: flex">

                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="mt-2">
                            <h4 class="text-uppercase">{{$product->category->name}}</h4>
                            <div class="mt-5">
                                <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                <h1 class="main-heading mt-0" style="word-break: break-all">{{$product->name}}</h1>
                            </div>
                        </div>
                        <div class="image" style=" position:absolute;
    right:12px;
    top:10px;">
                            <img src="https://i.imgur.com/MGorDUi.png" width="200">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                        <span>تخفیف</span>
                        <div class="colors " style="display: flex">
                    <span style="width:15px;
    height:15px;
    border-radius:50%;
    cursor:pointer;
    display:flex;
    margin-right:6px;">{{$product->discount}}%</span>

                        </div>

                    </div>


                    <p>{{$product->description}}</p>

                    <button class="btn btn-danger">افزودن به سبد خرید</button>
                </div>

            </div>
        </div>
    </div>
@endforeach
@endsection

