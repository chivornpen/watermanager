@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header">User</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<table id="example" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
				<th>Email</th>
				<th>Action</th>
            </tr>
        </thead>
		<?php $no=1;?>
        <tbody>
			@foreach($users as $user)
            <tr>
				<td>{{$no++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
				<td><a href="{{ route('users.edit',$user->id)}}">Edit</a></td>
            </tr>
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