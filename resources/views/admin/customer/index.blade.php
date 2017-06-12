 @extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header">Customer</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <table id="example" cellspacing="0" border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Home No</th>
                <th>street No</th>
                <th>Village Name</th>
                <th>Commune Name</th>
                <th>District Name</th>
                <th>Province Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no=1;?>
        <tbody>
            @foreach($customer as $customer)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->contactNo}}</td>
                <td>{{$customer->homeNo}}</td>
                <td>{{$customer->streetNo}}</td>
                <td>{{$customer->village->name}}</td>
                <td>{{$customer->village->commune->name}}</td>
                <td>{{$customer->village->commune->district->name}}</td>
                <td>{{$customer->village->commune->district->province->name}}</td>
                <td>
                    <a href="{{ route('customers.edit',$customer->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Are you sure you want to delete?')) { return true } else {return false };">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></button>
                    </form>
                </td>
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