@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Create New Customers </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::open(['action'=>'customerController@store','method'=>'POST'])!!}
          {{csrf_field()}}
          <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        {!!Form::label('name','Customer Name : ',[])!!}
                        {!!Form::text('name',null,['class'=>'form-control','required'=>'true','placeholder'=>'customer name...'])!!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('contactNo') ? ' has-error' : '' }}">
                        {!!Form::label('contactNo','Contact No : ',[])!!}
                        {!!Form::text('contactNo',null,['class'=>'form-control','required'=>'true','placeholder'=>'phone number...'])!!}
                        @if ($errors->has('contactNo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contactNo') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
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
          </div>
          <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('province_id') ? ' has-error' : '' }}">
                    {!!Form::label('province_id','Province Name :',[])!!}
                    {!!Form::select('province_id',[null=>'---Please select option---']+$provinces,null,['class'=>'form-control province_id','required'=>'true'])!!}
                    @if ($errors->has('province_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('province_id') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('district_id') ? ' has-error' : '' }}">
                    {!!Form::label('district_id','District Name :',[])!!}
                    {!!Form::select('district_id',[null=>'---Please select option---']+$districts,null,['class'=>'form-control district_id','required'=>'true','id'=>'dis_id'])!!}
                    @if ($errors->has('district_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('district_id') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('commune_id') ? ' has-error' : '' }}">
                    {!!Form::label('commune_id','Commune Name :',[])!!}
                    {!!Form::select('commune_id',[null=>'---Please select option---']+$communes,null,['class'=>'form-control commune_id','required'=>'true','id'=>'com_id'])!!}
                    @if ($errors->has('commune_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('commune_id') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('village_id') ? ' has-error' : '' }}">
                    {!!Form::label('village_id','Village Name :',[])!!}
                    {!!Form::select('village_id',[null=>'---Please select option---']+$villages,null,['class'=>'form-control','required'=>'true','id'=>'vil_id'])!!}
                    @if ($errors->has('village_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('village_id') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('homeNo') ? ' has-error' : '' }}">
                        {!!Form::label('homeNo','Home No : ',[])!!}
                        {!!Form::text('homeNo',null,['class'=>'form-control','required'=>'true','placeholder'=>'home no...'])!!}
                        @if ($errors->has('homeNo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('homeNo') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('streetNo') ? ' has-error' : '' }}">
                    {!!Form::label('streetNo','Street No : ',[])!!}
                    {!!Form::text('streetNo',null,['class'=>'form-control','required'=>'true','placeholder'=>'street no...'])!!}
                    @if ($errors->has('streetNo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('streetNo') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('cusbc') ? ' has-error' : '' }}">
                        {!!Form::label('cusbc','Customer BC : ',[])!!}
                        {!!Form::text('cusbc',null,['class'=>'form-control','placeholder'=>'customer bar code...'])!!}
                        @if ($errors->has('cusbc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cusbc') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('cusqr') ? ' has-error' : '' }}">
                        {!!Form::label('cusqr','Customer QR : ',[])!!}
                        {!!Form::text('cusqr',null,['class'=>'form-control','placeholder'=>'customer qr...'])!!}
                        @if ($errors->has('cusqr'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cusqr') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('cusStatus') ? ' has-error' : '' }}">
                    {!!Form::label('cusStatus','Customer Status : ',[])!!}
                    {!!Form::text('cusStatus',null,['class'=>'form-control','placeholder'=>'customer status...'])!!}
                    @if ($errors->has('cusStatus'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cusStatus') }}</strong>
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
@section('script')
<script type="text/javascript">
$(document).ready(function() {
  $('.province_id').on('change',function(e){
     var f =document.getElementById("dis_id");
     var province = $(this).val();
     var url = "/getProvince/";
     console.log(province);
     getValueCombo(province,url,f);
  });
   $('.district_id').on('change',function(e){
     var f =document.getElementById("com_id");
     var district = $(this).val();
     var url = "/getDistrict/";
     console.log(district);
     getValueCombo(district,url,f);
  });
   $('.commune_id').on('change',function(e){
     var f =document.getElementById("vil_id");
     var commune = $(this).val();
     var url = "/getCommune/";
     console.log(commune);
     getValueCombo(commune,url,f);
  });
});
</script>
@stop