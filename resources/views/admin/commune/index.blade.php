 @extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header">Commune</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <table id="example" cellspacing="0" border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>District Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no=1;?>
        <tbody>
            @foreach($commune as $commune)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$commune->name}}</td>
                <td>{{$commune->district->name}}</td>
                <td>
                    <a href="{{ route('communes.edit',$commune->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('communes.destroy', $commune->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Are you sure you want to delete?')) { return true } else {return false };">
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