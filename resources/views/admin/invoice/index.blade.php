 @extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">                
        <h1 class="page-header">Invoice</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <table id="example" cellspacing="0" border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Used Id</th>
                <th>Customer Id</th>
                <th>Invoice Date</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Number Used</th>
                <th>Unit Price</th>
                <th>Amount</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Actions</th>
            </tr>
        </thead>
        <?php $no=1;?>
        <tbody>
            @foreach($invoice as $invoice)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$invoice->use_id}}</td>
                <td>{{$invoice->customer_id}}</td>
                <td>{{$invoice->invDate}}</td>
                <td>{{$invoice->startDate}}</td>
                <td>{{$invoice->endDate}}</td>
                <td>{{$invoice->numUsed}}</td>
                <td>{{$invoice->unitPrice}}</td>
                <td>{{$invoice->amount}}</td>
                <td>{{$invoice->discount}}</td>
                <td>{{$invoice->tax}}</td>
                <td>
                    <a href="{{ route('invoices.edit',$invoice->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Are you sure you want to delete?')) { return true } else {return false };">
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