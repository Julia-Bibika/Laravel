@vite(['resources/css/app.css'
, 'resources/js/app.js'])

<div class="w-1/4 bg-amber-100">
<form action="{{route('fuels.store')}}" method="post">

    @csrf
    <div class="p-0.5">
    <label class= for="brand">Brand</label>
    <input  name = "brand"/>
    @error('brand')
    <div>
        {{$message}}
    </div>
    @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="amount">Amount</label>
    <input  name = "amount"/>
    @error('amount')
    <div>
        {{$message}}
    </div>
    @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="price">Price</label>
    <input  name = "price"/>
    @error('price')
    <div>
        {{$message}}
    </div>
    @enderror
    </div>
    <br/>
    <label for="station_id">Station</label>
    <select class="form-select px-3 py-2 rounded-full" name="station_id">
        <option value="0">Please select station</option>
        @foreach($station_list as $station_item)
            <option value="{{$station_item->id}}">{{$station_item->title}}</option>
        @endforeach
    </select>
    @error('station_id')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <br/>

    <button class="text-emerald-900 text-2xl" type="submit">Create</button>
</form>
</div>
