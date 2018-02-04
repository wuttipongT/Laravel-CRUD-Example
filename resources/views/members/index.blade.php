@extends('layouts/default')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      Member CRUD
    </div>
    <div class="pull-right">
      <a href="{{ route('members.create') }}" class="btn btn-success">Create</a>
    </div>
  </div>
</div>

<br>

@if( $message = Session::get('success') )
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
@endif

<table class="table">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>email</th>
    <th style="width: 500px;">Operation</th>
  </tr>

  @foreach($members as $member)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $member->name }}</td>
    <td>{{ $member->email }}</td>
    <td>
      <a class="btn btn-info" href="{{ route('members.show', $member->id) }}">Show</a>
      <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">Edit</a>
      {!! Form::open(array('route' => ['members.destroy', $member->id], 'method' => 'DELETE', 'style'=>'display:inline;')) !!}
      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}
    </td>
  </tr>
  @endforeach
</table>
@endsection
