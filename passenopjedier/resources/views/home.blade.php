<h1 class="tekst">Animals</h1>

<ul class="cards">
  @foreach ($searching as $search)
  <li>
    <a href="" class="card">
    <img src="{{$search->mediaAnimal->media}}" class="card__image" alt="Picture of the animal">
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Jessica Parker</h3>            
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
      </div>
    </a>      
  </li>  
  @endforeach
</ul>


<h1 class="tekst">Locations</h1>
<ul class="cards">
  @foreach ($locations as $location)
  <li>
    <a href="" class="card">
    <img src="{{$location->searchMedia->first()->media}}" class="card__image" alt="Picture of the animal">
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Jessica Parker</h3>            
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
      </div>
    </a>      
  </li>  
  @endforeach
</ul>