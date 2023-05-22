<form action="{{route('students.store')}}" method="post">

    @csrf

    <label for="pib">Pib</label>
    <input required name = "pib"/>
    <br/>
    <label for="course">Course</label>
    <input required name = "course"/>
    <br/>
    <label for="speciality">Speciality</label>
    <input required name = "speciality"/>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>
