@extends('layouts.app')
@section('content')
    <div id="formCreate">
        <form action="{{route('users.create')}}" method="post" >
            @csrf
            <div class="name">
                <input type="text" name="name" class="name">
            </div>
            <div class="userName">
                <input type="text" class="userName" name="userName">
            </div>
            <div class="phone">
                <input type="text" class="phone" name="phone">
            </div>
            <div class="email">
                <input type="text" class="email" name="email">
            </div>
            <div class="password">
                <input type="password" class="password" name="password">
            </div>
            <div class="confirm-password">
                <input type="password" class="password-confirm" name="password-confirm">
            </div>
            <button type="submit" class="btn btn-success">ثبت نام</button>
        </form>
    </div>
@endsection
