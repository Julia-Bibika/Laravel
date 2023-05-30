@vite(['resources/css/app.css'
, 'resources/js/app.js'])

<div class="w-1/4 bg-amber-100">
<form action="{{route('fuels.update',$fuel)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <div class="p-0.5">
    <label for="brand">Brand</label>
    <input name = "brand" value="{{$fuel->brand}}"/>
        @error('brand')
            <div>
                {{$message}}
            </div>
        @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="amount">Amount</label>
    <input name = "amount" value="{{$fuel->amount}}"/>
    @error('amount')
    <div>
        {{$message}}
    </div>
    @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="price">Price</label>
    <input  name = "price" value="{{$fuel->price}}"/>
    @error('price')
    <div>
        {{$message}}
    </div>
    @enderror
    </div>
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
    @error('station_id')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <br/>

    <button class="text-amber-900 text-2xl relative left-10" type="submit">Edit</button>
</form>
</div>
