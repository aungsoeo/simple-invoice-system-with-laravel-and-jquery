
@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action = "<?= URL::to('search') ?> " method = "post">
    <input type="hidden" name="_token" value="{{csrf_token() }}" >
    <input type="text" name="search" id="search" style="margin-left:20%;margin-top:20px">
    <input type = "submit" value = "Search" class = "btn btn-primary">
    </form>
	<a href="<?= 'productform' ?>" class="btn btn-primary" align="right" style="margin-left:80%">Add Invoice</a>
	<table class = 'table table-bordered table-hover' style="width:1000px;margin-left:10%;margin-right:10%;margin-top:20px">
        <thead>
        <th>Invoice Name</th>
        <th>#of items</th>
        <th>Total</th>
        <th> </th>
        </thead>
        <tbody>
    <?php 
    foreach($data as $row){
    ?>
    <tr>
    <td><?php echo $row->invoice_name ?></td>
    <td><?php echo $row->product_qty ?></td>
    <td><?php echo $row->grandtotal ?></td>
    <td><a href="#" class="btn btn-success" >PDF</a>  <a href='<?php echo 'EditProduct/'. $row->id ?>' class="btn btn-primary">Edit</a></td>
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

