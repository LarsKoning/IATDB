@extends('dashboard')
@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="sm:rounded-lg">
    <h1 class="tekst">Admin Page</h1>
    <table class="animal">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th>E-mail</th> 
        <th>Edit</th> 
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->firstname}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->email}}</td>
        <td class="edit">
            <a href="" onclick="return confirm('Weet je dit zeker?')"><i class="fa-solid fa-minus"></i></a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection