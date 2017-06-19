@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header">Usages</h1>
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
                <th>CustomerID</th>
                <th>StartNo</th>
                <th>EndNo</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>IsGenerateInv</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no=1;?>
        <tbody>
            @foreach($usage as $usage)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$usage->customer->name}}</td>
                <td>{{$usage->startNo}}</td>
                <td>{{$usage->endNo}}</td>
                <td>{{$usage->startDate}}</td>
                <td>{{$usage->endDate}}</td>
                <td>
                    <?php
                        if($usage->isGenerateInv==1){
                            echo "Yes";
                        }elseif($usage->isGenerateInv==0){
                            echo "No";
                        }
                    ?>
                </td>
                <td>
                    <a href="{{ route('usages.edit',$usage->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('usages.destroy', $usage->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Are you sure you want to delete?')) { return true } else {return false };">
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