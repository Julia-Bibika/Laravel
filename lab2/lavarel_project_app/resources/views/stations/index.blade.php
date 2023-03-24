<table>
    <tr><th>Title</th><th>Owner</th><th>Address</th></tr>
    @foreach($stations as $station)
        <tr>
            <td>{{$station->title}}</td>
            <td>{{$station->owner}}</td>
            <td>{{$station->address}}</td>
            <td><a href="{{route('stations.edit',$station->id)}}">Edit</a></td>
            <td>
                <form action="{{route('stations.destroy',$station->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('stations.create')}}">Create</a>
