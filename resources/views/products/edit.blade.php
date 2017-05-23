@extends('master')
@section('content')

    <form action ="<?= URL::to('update') ?>" method = "post" style="width:400px;margin-left:10%;margin-right:20%;margin-top:20px">
        <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
        <input type = "hidden" name = "id" value = "<?= $row->id ?>">
        ProductName<input type = "text" name = "product_name" value = "<?= $row->product_name ?>" class="form-control">
        Price<input type = "text" name = "product_price" value = "<?= $row->product_price ?>" class="form-control">
        Quantity<input type = "text" name = "product_qty" value = "<?= $row->product_qty ?>" class="form-control">
        <br />
        <input type = "submit" value = "Edit Record" class="btn btn-primary"></input>
    </form>
@stop
