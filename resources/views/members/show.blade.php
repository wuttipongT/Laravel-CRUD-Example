@extends('layouts.default')
@section('content')
<div class="row">
  <div class="co-lg-12 margin-tb">
    <div class="pull-left">
      Show member
    </div>
    <div class="pull-right">
      <a href="{{ route('members.index') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="form-group">
      <strong>Name :</strong>
      {{ $member->name }}
    </div>
  </div>

<div class="col-xs-12 col-md-12 col-sm-12">
  <div class="form-group">
    <strong>Email</strong>
    {{ $member->email }}
  </div>
</div>

</div>
@endsection
