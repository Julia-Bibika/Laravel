<form action="{{route('fuels.store')}}" method="post">

    @csrf

    <label for="brand">Brand</label>
    <input required name = "brand"/>
    <br/>
    <label for="amount">Amount</label>
    <input required name = "amount"/>
    <br/>
    <label for="price">Price</label>
    <input required name = "price"/>
    <br/>
    <label for="station_id">Station</label>
    <select name="station_id">
        <option value="0">Please select station</option>
        @foreach($station_list as $station_item)
            <option value="{{$station_item->id}}">{{$station_item->title}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>
