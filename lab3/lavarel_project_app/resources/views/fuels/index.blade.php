@vite(['resources/css/app.css'
, 'resources/js/app.js'])
<div class="items-center ml-10 mt-6 font-serif">
<table class="border border-amber-900">
    <tr><th class="border border-amber-900">Brand</th><th class="border border-amber-900">Amount</th><th class="border border-amber-900">Price</th><th class="border border-amber-900">Station_id</th></tr>
    @foreach($fuel as $fuel_item)
        <tr>
            <td class="border border-amber-900 text-center"><p class="p-2">{{$fuel_item->brand}}</p></td>
            <td class="border border-amber-900 text-center" ><p class="p-2">{{$fuel_item->amount}}</p></td>
            <td class="border border-amber-900 text-center"><p class="p-2">{{$fuel_item->price}}</p></td>
            <td class="border border-amber-900 text-center"><p class="p-2">{{$fuel_item->station_id}}</p></td>
            <td class="border border-amber-900 text-center"><a class="text-emerald-900 p-2" href="{{route('fuels.edit',$fuel_item->id)}}">Edit</a></td>
            <td class="border border-amber-900 text-center">
                <form action="{{route('fuels.destroy',$fuel_item->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="text-red-700 p-1" type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</div>
<a class="text-emerald-900 text-2xl ml-10" href="{{route('fuels.create')}}">Create</a>
