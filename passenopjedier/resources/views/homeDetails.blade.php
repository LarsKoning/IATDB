@extends('dashboard')
@section('content')
<h1 class="tekstje2">{{$location->address}}, {{$location->city}}</h1>
<div class="containert">
  @foreach($allMedia as $media)
    <div class="main-image">
      <img src="/assets/Locations/{{$media->media}}" alt="">
    </div>
  @endforeach
  <div class="details">


    <h2 class="htekstje2">Availability</h2>
    <p class="hdp">
      @if($location->whatAnimals != "[]")
      @foreach ($location->whatAnimals as $homePet)
          {{$homePet->for}}(s),
      @endforeach
      @else
      Any animal
      @endif
    </p>
    <div class="owner">
      <h2 class="htekstje2">Owner</h2>
      <p class="hdp">Owned by: {{$location->ownedBy->firstname}}</p>
      <p class="hdp">Contact: {{$location->ownedBy->email}}</p>
    </div>

  </div>
</div>

<h1 class="htekstje3">
  Reviews <br>
  <a href="/addReview/{{$location->address}}" class="knopje">Add An Review</a>
</h1>

<section class="wrapper">
  @foreach ($location->findReviews as $review)
    <section class="review-card">
      <h3 class="review-text">{{$review->review}}</h3>
      <div class="stars-container">
        <h4 class="rating">Rating: {{$review->rating}}</h4>
      </div>
    </section>
  @endforeach
</section>


@endsection