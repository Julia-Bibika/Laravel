@vite(['resources/css/app.css'
, 'resources/js/app.js'])
<div class="w-1/4 bg-amber-100">
<form class="flex-col" action="{{route('stations.store')}}" method="post">
    @include ('fuels.errors')
    @csrf
    <div class="p-0.5">
    <label for="title">Title</label>
    <input name = "title"/>
        @error('title')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="owner">Owner</label>
    <input name = "owner"/>
        @error('owner')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>
    <br/>
    <div class="p-0.5">
    <label for="address">Address</label>
    <input name = "address"/>
        @error('address')
        <div>
            {{$message}}
        </div>
        @enderror
    </div>
    <br/>
    <br/>

    <button class="text-emerald-900 text-2xl" type="submit">Create</button>
</form>
</div>

