@extends('dashboard')
@section('content')
<div class="container">
  <img src="/assets/Animals/{{$search->mediaAnimal->media}}" class="pfp" alt="L bozo">
  <h1 class="tekstje">{{$animal->name}}, The {{$animal->sort}}</h1>

  <h2 class="parags">Description Of {{$animal->name}}: </h2>
  <p class="parags2"> {{$animal->name}} Is {{$animal->age}} Years Old. <br>{{$animal->note}}</p>

  <p class="parag">{{$animal->name}} needs to be taken care of between: {{$search->from}} -> {{$search->to}}</p>
  <p class="parag">The Price We Will Give You Is: €{{$search->payment}}</p>
</div>
@endsection