@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Create New Usages </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-12">
        {!!Form::open(['action'=>'UsageController@store','method'=>'POST'])!!}
          {{csrf_field()}}
              <div class="row">
                  <div class="col-lg-6">
                   <div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
                    {!!Form::label('customer_id','Customer Name :',[])!!}
                    {!!Form::select('customer_id',[null=>'---Please select custome name---']+$customers,null,['class'=>'form-control customerid','required'=>'true'])!!}
                    @if ($errors->has('customer_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('customer_id') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-lg-2">
                   <div class="form-group {{ $errors->has('customerid') ? ' has-error' : '' }}">
                    {!!Form::label('customerid','Customer ID :',[])!!}
                    {!!Form::text('customerid',null,['class'=>'form-control cusId','readonly'=>'readonly','disabled'=>'true'])!!}
                    @if ($errors->has('customerid'))
                        <span class="help-block">
                            <strong>{{ $errors->first('customerid') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
            <div hidden class="mydiv">
              <div class="row">
                <div class="col-lg-3">
                   <div class="form-group {{ $errors->has('startNo') ? ' has-error' : '' }}">
                    {!!Form::label('startNo','Start No :',[])!!}
                    {!!Form::number('startNo',null,['class'=>'form-control','readonly'=>'readonly','disabled'=>'true'])!!}
                    @if ($errors->has('startNo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('startNo') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>  
                  <div class="col-lg-3">
                    <div class="form-group {{ $errors->has('endNo') ? ' has-error' : '' }}">
                      {!!Form::label('endNo','End No :',['class'=>'h'])!!}
                      {!!Form::number('endNo',null,['class'=>'form-control h','required'=>'true','placehoder'=>'end number...'])!!}
                      @if ($errors->has('endNo'))
                          <span class="help-block">
                              <strong>{{ $errors->first('endNo') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('homeNo') ? ' has-error' : '' }}">
                      {!!Form::label('homeNo','Home No :',[])!!}
                      {!!Form::text('homeNo',null,['class'=>'form-control cusHomeNo','readonly'=>'readonly','disabled'=>'true'])!!}
                      @if ($errors->has('homeNo'))
                          <span class="help-block">
                              <strong>{{ $errors->first('homeNo') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('streetNo') ? ' has-error' : '' }}">
                      {!!Form::label('streetNo','Street No :',[])!!}
                      {!!Form::text('streetNo',null,['class'=>'form-control cusStreetNo','readonly'=>'readonly','disabled'=>'true'])!!}
                      @if ($errors->has('streetNo'))
                          <span class="help-block">
                              <strong>{{ $errors->first('streetNo') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('startDate') ? ' has-error' : '' }}">
                      {!!Form::label('startDate','Start Date :',['class'=>'h'])!!}
                      {!!Form::date('startDate',null,['class'=>'form-control h','required'=>'true'])!!}
                      @if ($errors->has('startDate'))
                          <span class="help-block">
                              <strong>{{ $errors->first('startDate') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div> 
                    <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('endDate') ? ' has-error' : '' }}">
                      {!!Form::label('endDate','End Date :',['class'=>'h'])!!}
                      {!!Form::date('endDate',null,['class'=>'form-control h','required'=>'true'])!!}
                      @if ($errors->has('endDate'))
                          <span class="help-block">
                              <strong>{{ $errors->first('endDate') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('contactNo') ? ' has-error' : '' }}">
                      {!!Form::label('contactNo','Phone Number :',[])!!}
                      {!!Form::text('contactNo',null,['class'=>'form-control cusContactNo','readonly'=>'readonly','disabled'=>'true'])!!}
                      @if ($errors->has('contactNo'))
                          <span class="help-block">
                              <strong>{{ $errors->first('contactNo') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                      {!!Form::label('email','Customer Email :',[])!!}
                      {!!Form::text('email',null,['class'=>'form-control cusemail','readonly'=>'readonly','disabled'=>'true'])!!}
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                         <div class="form-group {{ $errors->has('isGenerateInv') ? ' has-error' : '' }}">
                          {!!Form::label('isGenerateInv','Is Generate Inv : ',[])!!}
                          {!!Form::select('isGenerateInv', ['1' => 'Yes', '0' => 'No'], null, ['class'=>'form-control','required'=>'true','placeholder'=> '---Select gernerate Invoice---'])!!}
                          @if ($errors->has('isGenerateInv'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('isGenerateInv') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('cusbc') ? ' has-error' : '' }}">
                      {!!Form::label('cusbc','Customer BC :',[])!!}
                      {!!Form::text('cusbc',null,['class'=>'form-control cusbc','readonly'=>'readonly','disabled'=>'true'])!!}
                      @if ($errors->has('cusbc'))
                          <span class="help-block">
                              <strong>{{ $errors->first('cusbc') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="form-group {{ $errors->has('cusStatus') ? ' has-error' : '' }}">
                      {!!Form::label('cusStatus','Customer Status :',[])!!}
                      {!!Form::text('cusStatus',null,['class'=>'form-control cusStatus','readonly'=>'readonly','disabled'=>'true'])!!}
                      @if ($errors->has('cusStatus'))
                          <span class="help-block">
                              <strong>{{ $errors->first('cusStatus') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  </div>
          <div class="well well-sm h">
            <button type="submit" class="btn btn-success h"> Create </button>
            <a href="{{ url()->previous() }}" class="btn btn-info pull-right h"> Back </a>
          </div>
      </div>
        {!!Form::close()!!}
      </div>
    </div>
@stop
@section('script')
<script type="text/javascript">
  $('.customerid').on('change',function(e){
      var cusId= $(this).val();
      $('.cusId').val(cusId);
      $('.mydiv').show(1000);
      if(cusId==''){
         $('.mydiv').hide(1000);
      };
      console.log(cusId);
      getEmailCustomer(cusId);
  });
  function getEmailCustomer(id){
    $.ajax({
      method: 'GET',
      url:'/getEmail/'+id,
      success:function(response){
        // console.log(response[0].email);
        $('.cusHomeNo').val(response[0].homeNo);
        $('.cusStreetNo').val(response[0].streetNo);
        $('.cusContactNo').val(response[0].contactNo);
        $('.cusemail').val(response[0].email);
        $('.cusbc').val(response[0].cusbc);
        $('.cusStatus').val(response[0].cusStatus);

      },
      error:function(error){
        console.log(error);
      }
    });
  }

  $(document).ready(function() {
  $(".customerid").select2();
});
</script>
@stop
  
<!-- <script type="text/javascript">
$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>

<select class="js-example-basic-single">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>
 -->
