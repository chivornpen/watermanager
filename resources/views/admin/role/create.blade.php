@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Create New Roles </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::open(['action'=>'RoleController@store','method'=>'POST'])!!}
          {{csrf_field()}}
          <div class="row">
              <div class="col-lg-6">
                   <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        {!!Form::label('name','User name : ',[])!!}
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
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-success"> Create </button>
            <a href="{{ url()->previous() }}" class="btn btn-info pull-right"> Back </a>
          </div>
          
        {!!Form::close()!!}
      </div>
    </div>
@stop
