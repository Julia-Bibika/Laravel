@vite(['resources/css/app.css'
, 'resources/js/app.js'])
<div class="w-1/4 bg-amber-100">
<form action="{{route('stations.update',$station)}}" method="post">
    @include ('stations.errors')
    @csrf
    {{ method_field('PUT') }}
    <div class="p-0.5">
    <label for="title">Title</label>
    <input name = "title" value="{{$station->title}}"/>
        @error('title')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="owner">Owner</label>
    <input name = "owner" value="{{$station->owner}}"/>
        @error('owner')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="address">Address</label>
    <input name = "address" value="{{$station->address}}"/>
        @error('address')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>
    <br/>
    <br/>

    <button class="text-amber-900 text-2xl relative left-10" type="submit">Edit</button>
</form>
</div>
