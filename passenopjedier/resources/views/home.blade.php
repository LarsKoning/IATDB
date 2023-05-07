@extends('dashboard')
@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="sm:rounded-lg">

    <section class="filters">  
      <h6 class="border-bottom">Filters</h6>
      <section class="filters-search">
          <h6>Sort of Animals</h6>
          <form>
              @foreach ($SOA as $sort)
                  <label class="label-checkbox">
                      <input type="checkbox" name="{{$sort->sort}}" id="{{$sort->sort}}">
                      <span>
                          <svg width='12px' height='10px'>
                              <use xlink:href='#check'></use>
                          </svg>
                      </span>
                      {{$sort->sort}}
                  </label>
              @endforeach
          </form>
      </section>
  </section>
    
    <h1 class="tekst">Searching Animals</h1>

    <ul class="cards">
      @foreach ($searching as $search)
      <li>
        <a href="/searching/{{$search->id}}" class="card" data-sort-of-animal="{{$search->searchingFor->sort}}">
        <img src="/assets/Animals/{{$search->mediaAnimal->media}}" class="card__image" alt="Picture of the animal">
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <img class="card__thumb" src="/assets/Users/Melissa.jpg" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">{{ucfirst(trans($search->searchingFor->name))}}</h3>            
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
        <a href="/location/{{$location->address}}" class="card2">
        <img src="/assets/Locations/{{$location->searchMedia->first()->media}}" class="card__image" alt="Picture of the Home">
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <img class="card__thumb" src="/assets/Users/noimage.jpeg" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">{{$location->address}}</h3>            
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">
              this home is available for: 
              @if($location->whatAnimals != "[]")
                @foreach ($location->whatAnimals as $homePet)
                  {{$homePet->for}},
                @endforeach
              @else
              Any animal
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