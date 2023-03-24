<form action="{{route('stations.store')}}" method="post">

    @csrf

    <label for="title">Title</label>
    <input required name = "title"/>
    <br/>
    <label for="owner">Owner</label>
    <input required name = "owner"/>
    <br/>
    <label for="address">Address</label>
    <input required name = "address"/>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>

