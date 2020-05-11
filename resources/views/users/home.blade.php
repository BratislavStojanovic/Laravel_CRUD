@section('title')
     Users
@endsection

@extends('master')

@section('main')
 

<div class="container">
  <div class="row">
    <h1>Users view</h1>
    <div class="col s8 offset-s2">
       <table>
         <thead>
           <th>Id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Created</th>
         </thead>
         <tbody>
           @foreach ($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                </tr>
           @endforeach
         </tbody>
       </table>
    </div>
  </div>
</div>
@endsection