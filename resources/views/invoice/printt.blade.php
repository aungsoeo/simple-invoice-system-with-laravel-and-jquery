@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
		<table class = 'table table-bordered table-hover' style="width:500px;margin-left:10%;margin-right:10%;margin-top:20px">
			<?php 
		    foreach($data as $row){
		    ?>
			<tr>
				<td>Invoice Name</td>
				<td><?php echo $row->invoice_name ?></td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><?php echo $row->product_name ?></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><?php echo $row->product_price ?></td>
			</tr>
			<tr>
				<td>No of product</td>
				<td><?php echo $row->product_qty ?></td>
			</tr>
			<tr>
				<td>Total</td>
					<td><?php echo $row->total ?></td>
			</tr>
			<tr>
				<td>GrandTotal</td>
					<td><?php echo $row->grandtotal ?></td>
			</tr>
			<?php } ?>
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