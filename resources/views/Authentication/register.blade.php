@extends('layouts.app')

@section('content')
    <div id="formRegister" class="text-center">
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <div class="name mt-3" >
                <label for="name">نام
                    <br>
                    <input type="text" class="name" name="name">
                    <br>
                    @if($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                    @endif
                </label>
            </div>
            <div class="userName mt-3">نام کاربری
                <br>
                <label for="userName">
                    <input type="text" class="userName" name="userName">
                    <br>
                    @if($errors->has('userName'))
                        <div class="text-danger">{{$errors->first('userName')}}</div>
                    @endif
                </label>
                <br>
            </div>
            <div class="phone mt-3">
                <label for="phone">تلفن
                    <br>
                    <input type="text" class="phone" name="phone">
                    <br>
                    @if($errors->has('phone'))
                        <div class="text-danger">{{$errors->first('phone')}}</div>
                    @endif
                </label>
                <br>
            </div>
            <div class="email mt-3">ایمیل
                <br>
                <label for="email">
                    <input type="email" class="email" name="email">
                    <br>
                    @if($errors->has('email'))
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    @endif
                </label>
                <br>
            </div>
            <div class="password">گذرواژه
                <br>
                <label for="password">
                    <input type="password" class="password" name="password">
                    <br>
                    @if($errors->has('password'))
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    @endif
                </label>
                <br>
            </div>
            <div class="confirm-password">تکرار پسورد
                <br>
                <label for="password">
                    <input type="password" name="password_confirm" class="password">
                    <br>
                    @if($errors->has('password'))
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    @endif
                </label>
                <br>
            </div>
            <div class="policy">
                <input type="checkbox" name="remember_token" id="remember_token">
                <label for="remember_token"><h5>من را به خاطر بسپار</h5></label>
            </div>
            <button type="submit" class="btn btn-success mt-3">ثبت نام</button>
        </form>
    </div>
@endsection
