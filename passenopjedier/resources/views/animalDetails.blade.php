@extends('dashboard')
@section('content')
<img src="/assets/Animals/{{$search->mediaAnimal->media}}" class="pfp" alt="L bozo">
<h1>{{$animal->name}}, {{$animal->sort}}</h1>
<h2>{{$animal->age}} Years Old</h2>
<p>{{$animal->note}}</p>
<p>From: {{substr($search->from,0,-3)}} <br> To: {{substr($search->to,0,-3)}} </p>
<p>${{$search->payment}}</p>
@endsection