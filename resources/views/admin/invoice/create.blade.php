@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Create New Invoice </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::open(['action'=>'InvoiceController@store','method'=>'POST'])!!}
          {{csrf_field()}}
            <div class="row">
                  <div class="col-lg-6">
                   <div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
                    {!!Form::label('customer_id','Customer Name :',[])!!}
                    {!!Form::select('customer_id',[null=>'---Please select custome name---']+$customers,null,['class'=>'form-control customer_id','required'=>'true'])!!}
                    @if ($errors->has('customer_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('customer_id') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-lg-2">
                   <div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
                    {!!Form::label('customer_id','Customer ID :',[])!!}
                    {!!Form::text('customer_id',null,['class'=>'form-control cusId','readonly'=>'readonly'])!!}
                    @if ($errors->has('customer_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('customer_id') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
          <div hidden class="mydiv">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group {{ $errors->has('invDate') ? ' has-error' : '' }}">
                        {!!Form::label('invDate','Invoice Date : ',[])!!}
                        {!!Form::date('invDate',\Carbon\Carbon::now(),['class'=>'form-control','required'=>'true','readonly'=>'readonly'])!!}
                        @if ($errors->has('invDate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('invDate') }}</strong>
                            </span>
                        @endif
                </div>
              </div>
              <div class="col-lg-4">
                  <div class="form-group {{ $errors->has('startDate') ? ' has-error' : '' }}">
                        {!!Form::label('startDate','Start Date : ',[])!!}
                        {!!Form::date('startDate',null,['class'=>'form-control','required'=>'true'])!!}
                        @if ($errors->has('startDate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('startDate') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('endDate') ? ' has-error' : '' }}">
                        {!!Form::label('endDate','End Date : ',[])!!}
                        {!!Form::date('endDate',null,['class'=>'form-control','required'=>'true'])!!}
                        @if ($errors->has('endDate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('endDate') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('numUsed') ? ' has-error' : '' }}">
                        {!!Form::label('numUsed','Number Used : ',[])!!}
                        {!!Form::text('numUsed',null,['class'=>'form-control','required'=>'true','readonly'=>'readonly'])!!}
                        @if ($errors->has('numUsed'))
                            <span class="help-block">
                                <strong>{{ $errors->first('numUsed') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('unitPrice') ? ' has-error' : '' }}">
                        {!!Form::label('unitPrice','Unit Price : ',[])!!}
                        {!!Form::text('unitPrice',null,['class'=>'form-control','required'=>'true','placeholder'=>'unit price...'])!!}
                        @if ($errors->has('unitPrice'))
                            <span class="help-block">
                                <strong>{{ $errors->first('unitPrice') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                        {!!Form::label('amount','Amount : ',[])!!}
                        {!!Form::text('amount',null,['class'=>'form-control','readonly'=>'readonly'])!!}
                        @if ($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('discount') ? ' has-error' : '' }}">
                        {!!Form::label('discount','Discount : ',[])!!}
                        {!!Form::number('discount',null,['class'=>'form-control','required'=>'true','placeholder'=>'phone number...'])!!}
                        @if ($errors->has('discount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('discount') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('tax') ? ' has-error' : '' }}">
                        {!!Form::label('tax','Tax : ',[])!!}
                        {!!Form::number('tax',null,['class'=>'form-control','required'=>'true','placeholder'=>'phone number...'])!!}
                        @if ($errors->has('tax'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tax') }}</strong>
                            </span>
                        @endif
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('invExpireDate') ? ' has-error' : '' }}">
                        {!!Form::label('invExpireDate','invExpireDate : ',[])!!}
                        {!!Form::date('invExpireDate',null,['class'=>'form-control','readonly'=>'readonly'])!!}
                        @if ($errors->has('invExpireDate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('invExpireDate') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('invStatuts') ? ' has-error' : '' }}">
                        {!!Form::label('invStatuts','invStatuts : ',[])!!}
                        {!!Form::text('invStatuts',null,['class'=>'form-control','placeholder'=>'customer qr...'])!!}
                        @if ($errors->has('invStatuts'))
                            <span class="help-block">
                                <strong>{{ $errors->first('invStatuts') }}</strong>
                            </span>
                        @endif
                  </div>
              </div>
              <div class="col-lg-4">
                   <div class="form-group {{ $errors->has('printed') ? ' has-error' : '' }}">
                    {!!Form::label('printed','printed : ',[])!!}
                    {!!Form::text('printed',null,['class'=>'form-control','placeholder'=>'customer status...'])!!}
                    @if ($errors->has('printed'))
                        <span class="help-block">
                            <strong>{{ $errors->first('printed') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
            </div>
            <div class="well well-sm">
              <button type="submit" class="btn btn-success"> Create </button>
              <a href="{{ url()->previous() }}" class="btn btn-info pull-right"> Back </a>
            </div>
          </div>
        {!!Form::close()!!}
      </div>
    </div>
@stop
@section('script')
<script type="text/javascript">
  $('.customer_id').on('change',function(e){
      var cusid= $(this).val();
      $('.cusId').val(cusid);
      $('.mydiv').show(1000);
      console.log(cusid);
      if(cusid==''){
         $('.mydiv').hide(1000);
      }
  });
  $(document).ready(function() {
  $(".customer_id").select2();
});
</script>

@stop
