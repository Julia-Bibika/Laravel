<form action="{{route('fuels.update',$fuel)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="brand">Brand</label>
    <input required name = "brand" value="{{$fuel->brand}}"/>
    <br/>
    <label for="amount">Amount</label>
    <input required name = "amount" value="{{$fuel->amount}}"/>
    <br/>
    <label for="price">Price</label>
    <input required name = "price" value="{{$fuel->price}}"/>
    <br/>
    <label for="station_id">Station</label>
    <select name="station_id">
        <option value="0">Please select station</option>
        @foreach($station_list as $station_item)
            <option
                @if($station_item->id == $fuel->station_id)
                   selected
                @endif
                value="{{$station_item->id}}"
            >{{$station_item->title}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
