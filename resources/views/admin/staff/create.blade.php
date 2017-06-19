@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Create New Staffs </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::open(['action'=>'StaffController@store','method'=>'POST'])!!}
          {{csrf_field()}}
          <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        {!!Form::label('name','Name : ',[])!!}
                        {!!Form::text('name',null,['class'=>'form-control','required'=>'true','placeholder'=>'provide staff name...'])!!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-2">
                   <div class="form-group {{ $errors->has('sex') ? ' has-error' : '' }}">
                    {!!Form::label('sex','Gender : ',[])!!}
                    {!!Form::select('sex', ['M' => 'Male', 'F' => 'Female'], null, ['class'=>'form-control','required'=>'true','placeholder'=> '--Select gender--'])!!}
                    @if ($errors->has('sex'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sex') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="form-group {{ $errors->has('contactNo') ? ' has-error' : '' }}">
                    {!!Form::label('contactNo','Contact No : ',[])!!}
                    {!!Form::number('contactNo',null,['class'=>'form-control','required'=>'true','placeholder'=>'provide phone number...'])!!}
                    @if ($errors->has('contactNo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('contactNo') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="form-group {{ $errors->has('ssid') ? ' has-error' : '' }}">
                        {!!Form::label('ssid','SSID : ',[])!!}
                        {!!Form::number('ssid',null,['class'=>'form-control','required'=>'true','placeholder'=>'provide SSID...'])!!}
                        @if ($errors->has('ssid'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ssid') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        {!!Form::label('email','Email : ',[])!!}
                        {!!Form::text('email',null,['class'=>'form-control','required'=>'true','placeholder'=>'example@email.com'])!!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                    {!!Form::label('position','Position : ',[])!!}
                    {!!Form::text('position',null,['class'=>'form-control','required'=>'true','placeholder'=>'provide position...'])!!}
                    @if ($errors->has('position'))
                        <span class="help-block">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('salary') ? ' has-error' : '' }}">
                    {!!Form::label('salary','Salary : ',[])!!}
                    {!!Form::text('salary',null,['class'=>'form-control','required'=>'true','placeholder'=>'provide salary...'])!!}
                    @if ($errors->has('salary'))
                        <span class="help-block">
                            <strong>{{ $errors->first('salary') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                   <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                    {!!Form::label('address','Address : ',[])!!}
                    {!!Form::textarea('address',null,['class'=>'form-control','required'=>'true','rows'=>'3','placeholder'=>'provide address...'])!!}
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
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