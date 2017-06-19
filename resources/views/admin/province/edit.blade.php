@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Edit Province </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::model($province,['action'=>['ProvinceController@update',$province->id],'method'=>'PATCH'])!!}
          {{csrf_field()}}
            <div class="row">
              <div class="col-lg-12">
                   <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        {!!Form::label('name','Province Name : ',[])!!}
                        {!!Form::text('name',null,['class'=>'form-control','required'=>'true','placeholder'=> 'Please provide village name...'])!!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
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
