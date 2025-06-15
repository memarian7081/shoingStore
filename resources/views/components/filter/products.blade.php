<div>
    <table>
        <thead>
        <tr>
            <th>نام دسته</th>
            <th>عکس</th>
            <th>توضیحات</th>
            <th>تخفیف</th>
        </tr>
        </thead>
        @foreach($drinks as $category)
            <tbody>
            <tr>
                <td>{{$category->name}}</td>
                <th>
                    <img src="{{asset('storage/' , $category->image)}}" alt="">
                </th>
                <th>{{$category->description}}</th>
                @if(!$category->discount == null)
                    <th>{{$category->discount}}</th>
                @else <th>بدون تخفیف</th>
                @endif
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

