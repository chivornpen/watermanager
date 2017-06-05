@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header"><i class="fa fa-user"></i>Create New User</h1>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-md-12">
        {!!Form::open(['action'=>'UserController@index','method'=>'POST'])!!}
          {{csrf_field()}}
          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {!!Form::label('name','User name',[])!!}
            {!!Form::text('name',null,['class'=>'form-control'])!!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {!!Form::label('email','User email',[])!!}
            {!!Form::text('email',null,['class'=>'form-control'])!!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
          <a href="{{ url()->previous() }}" class="btn btn-success pull-right">Back</a>
        {!!Form::close()!!}
      </div>
    </div>
@stop
