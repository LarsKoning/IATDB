@extends('dashboard')
@section('content')
<img src="{{$search->mediaAnimal->media}}" class="pfp" alt="L bozo">
<h1>{{$animal->name}}, {{$animal->sort}}</h1>
<h2>{{$animal->age}} Years Old</h2>
<p>{{$animal->note}}</p>

<button>
  <a href="/edit/{{$search->id}}" class="btn btn-succes">Edit</a>
</button>
@endsection