@extends('master')


@section('content')

<div class="container">
   <br> <button type="button" class="btn btn-primary">add user</button> <br>
</div> <br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user name</th>
        <th scope="col">email </th>
        <th scope="col">actions </th>
      
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <button>delete</button>
          </td>
      </tr>
  @endforeach
  
    </tbody>
  </table>
    
@endsection