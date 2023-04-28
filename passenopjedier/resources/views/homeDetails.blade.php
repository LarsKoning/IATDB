@extends('dashboard')
@section('content')
@foreach($allMedia as $media)
  <img src="/assets/Locations/{{$media->media}}" class="pfp" alt="">
@endforeach
<p>{{$location->address}}, {{$location->city}}</p>

<p>Available for: 
  @if($location->whatAnimals != "[]")
   @foreach ($location->whatAnimals as $homePet)
      {{$homePet->for}},
   @endforeach
  @else
  any
  @endif
</p>

<p>Owned by: {{$location->ownedBy->firstname}}</p>

@endsection