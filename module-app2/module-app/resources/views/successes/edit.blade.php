<form action="{{route('successes.update',$success)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="title">Title</label>
    <input required name = "title" value="{{$success->title}}"/>
    <br/>
    <label for="mark">Mark</label>
    <input required name = "mark" value="{{$success->mark}}"/>
    <br/>
    <label for="date">Date</label>
    <input required name = "date" value="{{$success->date}}"/>
    <br/>
    <label for="student_id">Student</label>
    <select name="student_id">
        <option value="0">Please select station</option>
        @foreach($student_list as $student)
            <option
                @if($student->id == $success->student_id)
                    selected
                @endif
                value="{{$student->id}}"
            >{{$student->Pib}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
