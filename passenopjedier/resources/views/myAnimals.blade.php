@extends('dashboard')
@section('content')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="sm:rounded-lg">
    <h1 class="tekst">My Animals</h1>
    <table class="animal">
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Sort</th>
        <th>Note</th> 
        <th>Add Search</th> 
        <th>Edit</th> 
      </tr>
      @foreach ($animals as $animal)
      <tr>
        <td>{{$animal->name}}</td>
        <td>{{$animal->age}}</td>
        <td>{{$animal->sort}}</td>
        <td>{{$animal->note}}</td>
        <td><a href="/addSearch/{{$animal->animalID}}">Add Search</a></td>
        <td class="edit">
            <a href="/edit/{{$animal->animalID}}"><i class="fa-solid fa-pencil"></i></a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection