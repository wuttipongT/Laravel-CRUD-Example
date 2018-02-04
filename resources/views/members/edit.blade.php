@extends('layouts.default')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      Member edit
    </div>
    <div class="pull-right">
      <a href="{{ route('members.index') }}" class="btn btn-primary">back</a>
    </div>
  </div>
</div>
<br>
@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops! </strong>There some problem with you input <br>
  <ul>
    @foreach ($errors->all() as $error)
      <li>
        {{ $error }}
      </li>
    @endforeach
  </ul>
</div>
@endif

{!! Form::model($member, ['route' => ['members.update', $member->id], 'method' => 'PATCH']) !!}
 @include('members.form')
{!! Form::close() !!}
@endsection
