@extends('dashboard')
@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="sm:rounded-lg">
    
    <h1 class="tekst">Searching Animals</h1>

    <ul class="cards">
      @foreach ($searching as $search)
      <li>
        <a href="/searching/{{$search->id}}" class="card">
        <img src="{{$search->mediaAnimal->media}}" class="card__image" alt="Picture of the animal">
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">{{$search->searchingFor->name}}</h3>            
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">{{$search->searchingFor->note}}</p>
          </div>
        </a>      
      </li>  
      @endforeach
    </ul>


    <h1 class="tekst2">Available Locations</h1>
    <ul class="cards">
      @foreach ($locations as $location)
      <li>
        <a href="/location/{{$location->address}}" class="card">
        <img src="{{$location->searchMedia->first()->media}}" class="card__image" alt="Picture of the Home">
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">{{$location->address}}</h3>            
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">
              this home is available for: 
              @if($location->whatAnimals != "[]")
                @foreach ($location->whatAnimals as $homePet)
                  {{$homePet->for}}
                @endforeach
              @else
              any
              @endif
            </p>
          </div>
        </a>      
      </li>  
      @endforeach
    </ul>

  </div>
</div>
@endsection