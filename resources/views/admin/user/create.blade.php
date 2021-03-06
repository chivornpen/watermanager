@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header"><i class="fa fa-user"></i>Create New User</h1>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::open(['action'=>'UserController@index','method'=>'POST'])!!}
          {{csrf_field()}}
          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!!Form::label('name','User name',[])!!}
            {!!Form::text('name',null,['class'=>'form-control','required'=>'true'])!!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {!!Form::label('email','User email',[])!!}
            {!!Form::text('email',null,['class'=>'form-control','required'=>'true'])!!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {!!Form::label('password','Password',[])!!}
            {!!Form::password('password',['class'=>'form-control','required'=>'true'])!!}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                {!!Form::label('password-confirm','Confirm Password',[])!!}
                {!!Form::password('password_confirmation',['class'=>'form-control','required'=>'true','id'=>'password-confirm'])!!}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                {!!Form::label('role_id','Role Name',[])!!}
                {!!Form::select('role_id',['0'=>'Choose Options']+$roles,null,['class'=>'form-control','required'=>'true'])!!}
              </div>
            </div>
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{ url()->previous() }}" class="btn btn-info pull-right">Back</a>
          </div>
          
        {!!Form::close()!!}
      </div>
    </div>
@stop
