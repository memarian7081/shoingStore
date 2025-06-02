@extends('layouts.app')
@section('content')
    <div id="login" class="text-center">
        <form action="{{route('register.login')}}" method="post">
            @csrf
            <label for="userName">نام کاربری
                <input type="text" class="userName" name="userName" value="{{old('userName')}}">
                <br>
                @if($errors->has('phone'))
                    <div class="text-danger">{{$errors->first('phone')}}</div>
                @endif
            </label><br><br>
            <label for="password">پسورد
                <input type="text" class="password" name="password" value="{{old('password')}}">
                <br>
                @if($errors->has('phone'))
                    <div class="text-danger">{{$errors->first('phone')}}</div>
                @endif
            </label><br><br>
            <button class="btn btn-success">ورود</button>
        </form>
    </div>
@endsection
