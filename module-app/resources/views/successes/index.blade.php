<table>
    <tr><th>Title</th><th>Mark</th><th>Date</th><th>Student_id</th></tr>
    @foreach($successes as $success)
        <tr>
            <td>{{$success->title}}</td>
            <td>{{$success->mark}}</td>
            <td>{{$success->date}}</td>
            <td>{{$success->student_id}}</td>
            <td><a href="{{route('successes.edit',$success->id)}}">Edit</a></td>
            <td>
                <form action="{{route('successes.destroy',$success->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('successes.create')}}">Create</a>
