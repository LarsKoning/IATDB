@extends('dashboard')
@section('content')
<img src="/storage/{{$search->mediaAnimal->media}}" class="pfp" alt="L bozo">
<h1>{{$animal->name}}, {{$animal->sort}}</h1>
<h2>{{$animal->age}} Years Old</h2>
<p>{{$animal->note}}</p>
@endsection