@extends('dashboard')
@section('content')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="sm:rounded-lg">
    <h1 class="tekst">My Animals</h1>
    <ul class="cards">
      @foreach ($animals as $animal)
      <li>
        <a href="/animals/{{$animal->animalID}}" class="card">
        <img src="{{$animal->searchMedia->first()->media}}" class="card__image" alt="Picture of the animal">
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">{{$animal->name}}</h3>            
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">{{$animal->note}}</p>
          </div>
        </a>      
      </li>  
      @endforeach
    </ul>
  </div>
</div>
@endsection