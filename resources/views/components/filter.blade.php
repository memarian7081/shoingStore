@extends('layouts.app')
@section('content')
    <div>
        <table>
            <thead>
            <tr>
                <th>نام محصول</th>
                <th>نام دسته</th>
                <th>عکس</th>
                <th>توضیحات</th>
                <th>تخفیف</th>
                <th>مقدار</th>
                <th>قیمت</th>
            </tr>
            </thead>
            @foreach(  $filter as $product)
                <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <img src="{{asset('storage/' , $product->image)}}" alt="">
                    </td>
                    <td>{{$product->description}}</td>
                    @if(!$product->discount == null)
                        <th>{{$product->discount}}</th>
                    @else <th>بدون تخفیف</th>
                    @endif
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>


@endsection
