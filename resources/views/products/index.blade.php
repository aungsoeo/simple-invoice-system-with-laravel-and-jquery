
@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?= 'productform' ?>" class="btn btn-primary" align="right">Add Product</a>
	<table class = 'table table-bordered table-hover' style="width:1000px;margin-left:10%;margin-right:10%">
<thead>
<th>ProductID</th>
<th>ProductName</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Grandtotal</th>
<th>Action</th>

</thead>
<tbody>
<?php 
foreach($data as $row){
?>
<tr>
<td><?php echo $row->invoice_name ?></td>
<td><?php echo $row->product_name ?></td>
<td><?php echo $row->product_price ?></td>
<td><?php echo $row->product_qty ?></td>
<td><?php echo $row->total ?></td>
<td><?php echo $row->grandtotal ?></td>

<td>
    <a href='<?php echo 'EditProduct/'. $row->id ?>'>Edit</a> |
    <a href='<?php echo 'DeleteProduct/'.$row->id ?>'>Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>

<div class="col-md-offset-2 col-md-8">
        @if (Session::has('message'))
                <!-- Success Message -->
        <div class="alert alert-success">
            <strong>Success</strong>
            <br>
            {{ Session::get('message') }}
        </div>
        @endif
    </div>
</body>
</html>

