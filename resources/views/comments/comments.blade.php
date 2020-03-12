@extends('layouts.app')
@section('content')
<div class="container">
@if(Session::has('msg'))
    <div class="alert alert-success">
        {{session('msg')}}
    </div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">comment text</th>
        <th scope="col">user</th>
        <th scope="col">created at</th>
        <th scope="col"> image</th>
      </tr>
    </thead>
    <tbody>
@foreach ($comments as $item)
      <tr>
        <th scope="row">{{ $item->id}}</th>
        <td>{{ $item->commenttext}}</td>
        <td>{{ $item->user->name}}</td>
        <td>{{ $item->created_at}}</td>
        <td><img height="100" src="{{$item->fileimage}}"/></td>
      </tr>

      @endforeach
    </tbody>
  </table>

    </tbody>
  </table>
</div>

@endsection
