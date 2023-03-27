@vite(['resources/css/app.css',
'resources/js/app.js'])
<table class="border-spacing-px border-collapse">
    <tr><th>Title</th><th>Mark</th><th>Date</th><th>Student_id</th></tr>
    @foreach($successes as $success)
        <tr>
            <td class="ml-2">{{$success->title}}</td>
            <td class="ml-2">{{$success->mark}}</td>
            <td class="ml-2">{{$success->date}}</td>
            <td class="ml-2">{{$success->student_id}}</td>
            <td class="ml-2"><a href="{{route('successes.edit',$success->id)}}">Edit</a></td>
            <td class="ml-2">
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
