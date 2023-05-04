@vite(['resources/css/app.css'
, 'resources/js/app.js'])
<div class="items-center ml-10 mt-6 font-serif">
<table class="border border-amber-900">
    <tr><th class="border border-amber-900">Title</th><th class="border border-amber-900">Owner</th><th class="border border-amber-900">Address</th></tr>
    @foreach($stations as $station)
        <tr>
            <td class="border border-amber-900 text-center"><p class="p-2">{{$station->title}}</p></td>
            <td class="border border-amber-900 text-center"><p class="p-2">{{$station->owner}}</p></td>
            <td class="border border-amber-900 text-center"><p class="p-2">{{$station->address}}</p></td>
            <td class="border border-amber-900 text-center"><a class="text-emerald-900 p-2" href="{{route('stations.edit',$station->id)}}">Edit</a></td>
            <td class="border border-amber-900 text-center">
                <form action="{{route('stations.destroy',$station->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="text-red-700 p-1">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</div>
<a class="text-emerald-900 text-2xl ml-10" href="{{route('stations.create')}}">Create</a>
