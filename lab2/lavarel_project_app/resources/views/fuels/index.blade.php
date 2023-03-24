<table>
    <tr><th>Brand</th><th>Amount</th><th>Price</th><th>Station_id</th></tr>
    @foreach($fuel as $fuel_item)
        <tr>
        <td>{{$fuel_item->brand}}</td>
        <td>{{$fuel_item->amount}}</td>
        <td>{{$fuel_item->price}}</td>
        <td>{{$fuel_item->station_id}}</td>
            <td><a href="{{route('fuels.edit',$fuel_item->id)}}">Edit</a></td>
            <td>
                <form action="{{route('fuels.destroy',$fuel_item->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('fuels.create')}}">Create</a>
