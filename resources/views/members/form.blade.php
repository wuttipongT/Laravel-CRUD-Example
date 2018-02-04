<div class="form-group row">
  <label class="col-sm-2" for="name">Name :</label>
  <div class="col-sm-10">
    {!! Form::text('name', null, array('placeholder' => 'Name',
    'class' => 'form-control', 'id'=>'name')) !!}
  </div>
</div>

<div class="form-group row">
  <label for="email" class="col-sm-2">Email :</label>
  <div class="col-sm-10">
    {!! Form::email('email', null, array('placeholder' => 'Email',
    'class' => 'form-control', 'id'=> 'email')) !!}
  </div>
</div>

<div class="form-group row">
  <div class="col-sm-10 col-sm-offset-2">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
