@extends('layouts.default')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      Add New Member
    </div>
    <div class="pull-right">
      <a href="{{ route('members.index') }}" class="btn btn-primary">back</a>
    </div>
  </div>
</div>
<br>
@if (count($errors) > 0)
<div class="alert alert-danger">
  <string>Whoops!</strong There ware some problem with you input <br>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

{!! Form::open(array('route' => 'members.store','method'=>'POST')) !!}

  @include('members.form')

{!! Form::close() !!}

@endsection
