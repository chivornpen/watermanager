@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header">User</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>
@include('nav.message')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<table id="example" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
				<th>Email</th>
				<th>Actions 
				<!-- 
					 {!!Form::label('check','show all:',[])!!}					
					 {!!Form::checkbox('check',null,['class'=>'form-control'])!!} -->	
					
				</th>
            </tr>
        </thead>
		<?php $no=1;?>
        <tbody>
			@foreach($users as $user)
				@if($user->userStatus==0)
		            <tr>
						<td>{{$no++}}</td>
		                <td>{{$user->name}}</td>
		                <td>{{$user->email}}</td>
						<td>
							<a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
							<form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
		    					<input type="hidden" name="_method" value="DELETE">
		              			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    					<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></button>
		    				</form>
						</td>
		            </tr>
				@endif
			@endforeach
        </tbody>
    </table>
		</div>
	</div>
</div>
@stop
@section('script')
<script type="text/javascript">
	$(document).ready(function() {
                $('#example').DataTable();
	} );
</script>
@stop