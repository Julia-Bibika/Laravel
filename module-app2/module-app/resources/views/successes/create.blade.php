<form action="{{route('successes.store')}}" method="post">

    @csrf

    <label for="title">Title</label>
    <input required name = "title"/>
    <br/>
    <label for="mark">Mark</label>
    <input required name = "mark"/>
    <br/>
    <label for="date">Date</label>
    <input required name = "date"/>
    <br/>
    <label for="student_id">Student</label>
    <select name="student_id">
        <option value="0">Please select station</option>
        @foreach($student_list as $student)
            <option value="{{$student->id}}">{{$student->Pib}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>
