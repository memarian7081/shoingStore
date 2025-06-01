@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="thead-light">
            <tr>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">نام</th>
                <th style="width: 20%; font-weight: bold; font-size: 2rem;">نام کاربری</th>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">ایمیل</th>
                <th style="width: 10%; font-weight: bold; font-size: 2rem;">تلفن</th>
                <th style="width: 10% ;font-weight: bold; font-size: 2rem;;">عملیات</th>

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
                        <form action="{{route('users.clearAll',$user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning">حذف دائمی</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
