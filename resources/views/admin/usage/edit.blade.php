@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h2 class="page-header"><i class="fa fa-user"></i> Edit Usage </h2>
    </div>
               <!-- /.col-lg-12 -->
</div>
    <div class="row">
      <div class="col-lg-64">
        {!!Form::model($usage,['action'=>['UsageController@update',$usage->id],'method'=>'PATCH'])!!}
          {{csrf_field()}}
           <div class="row">
                  <div class="col-lg-6">
                   <div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
                    {!!Form::label('customer_id','Customer Name :',[])!!}
                    {!!Form::select('customer_id',[null=>'---Please select customer name---']+$customers,null,['class'=>'form-control customerid','required'=>'true'])!!}
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
            <div id="mydiv">
              <div class="row">
                <div class="col-lg-6">
                   <div class="form-group {{ $errors->has('startNo') ? ' has-error' : '' }}">
                    {!!Form::label('startNo','Start No :',[])!!}
                    {!!Form::text('startNo',null,['class'=>'form-control','required'=>'true'])!!}
                    @if ($errors->has('startNo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('startNo') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>  
                  <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('endNo') ? ' has-error' : '' }}">
                      {!!Form::label('endNo','End No :',['class'=>'h'])!!}
                      {!!Form::text('endNo',null,['class'=>'form-control h','required'=>'true'])!!}
                      @if ($errors->has('endNo'))
                          <span class="help-block">
                              <strong>{{ $errors->first('endNo') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
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
                    <div class="col-lg-6">
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
                </div>
                <div class="row">
                    <div class="col-lg-12">
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
                </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-success"> Update </button>
            <a href="{{ url()->previous() }}" class="btn btn-info pull-right"> Back </a>
          </div>
          
        {!!Form::close()!!}
      </div>
    </div>
@stop
@section('script')
<script type="text/javascript">
  $('.customerid').on('change',function(e){
      var cusid= $(this).val();
      $('.cusId').val(cusid);
      $('#mydiv').show(1000);
      console.log(cusid);
      if(cusid==''){
         $('#mydiv').hide(1000);
      }
      // console.log(getClassname(studentid));
  });
  $(document).ready(function() {
  $(".customerid").select2();
});
  // function getClassname(id){
//   //console.log('hi');
//     $.ajax({
//       method: 'GET',
//       url: '/admin/studentscores/getclassname/'+id,
//       success:function(response){
//             console.log(response);
//             $('#classname').val(response);

//       },
//       error:function(error){
//         console.log(error);
//       }
//     });
// };
</script>

@stop