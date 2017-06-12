@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header"><i class="fa fa-user"></i> Edit Roles</h1>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::model($role,['action'=>['RoleController@update',$role->id],'method'=>'PATCH'])!!}
          {{csrf_field()}}
          <div class="row">
            <div class="col-lg-6">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  {!!Form::label('name','User Name : ',[])!!}
                  {!!Form::text('name',null,['class'=>'form-control','required'=>'true'])!!}
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
            </div>
            <div class="col-lg-6">
                   <div class="form-group {{ $errors->has('displayName') ? ' has-error' : '' }}">
                  {!!Form::label('displayName','Display Name : ',[])!!}
                  {!!Form::text('displayName',null,['class'=>'form-control','required'=>'true'])!!}
                  @if ($errors->has('displayName'))
                      <span class="help-block">
                          <strong>{{ $errors->first('displayName') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-success"> Update </button>
            <a href="{{ url()->previous() }}" class="btn btn-info pull-right">Back</a>
          </div>
          
        {!!Form::close()!!}
      </div>
    </div>
@stop
