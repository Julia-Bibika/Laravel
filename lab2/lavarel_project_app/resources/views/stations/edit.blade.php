<form action="{{route('stations.update',$station)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="title">Title</label>
    <input required name = "title" value="{{$station->title}}"/>
    <br/>
    <label for="owner">Owner</label>
    <input required name = "owner" value="{{$station->owner}}"/>
    <br/>
    <label for="address">Address</label>
    <input required name = "address" value="{{$station->address}}"/>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
