@extends('layouts.app')
@section('content')
    <div class="table-responsive">
        <a href="{{route('users.trashedUsers')}}" style="text-decoration: none;direction: rtl;margin: 2% 5%;font-size: 2rem;background-color: #66aede;color: white;">کاربران حذف شده</a>
        <table class="table table-bordered text-center">
            <thead class="thead-light">
            <tr>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">نام</th>
                <th style="width: 20%; font-weight: bold; font-size: 2rem;">نام کاربری</th>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">ایمیل</th>
                <th style="width: 10% ;font-weight: bold; font-size: 2rem;;">تلفن</th>
                <th style="width: 10% ;font-weight: bold; font-size: 2rem;;">ویرایش</th>
                <th style="width: 10% ;font-weight: bold; font-size: 2rem;;">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr style="direction: rtl;">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->userName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-secondary">ویرایش</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </form>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
