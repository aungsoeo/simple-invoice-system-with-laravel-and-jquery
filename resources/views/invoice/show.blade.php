@extends('master')
@section('content')
<div class="panel panel-default" style="width:900; margin:20px auto;">
		<div class="panel-heading">
				<div class="clearfix">
						<span class="panel-title">Invoices</span>
						<a href="<?= 'create' ?>" class="btn btn-success pull-right">+ Add Invoice</a>
				</div>
		</div>
		<div class="search" style="margin:20px 0px 0 20px; ">
			<form action = "<?= URL::to('invoicemain') ?> " method = "post">
					<input type="hidden" name="_token" value="{{csrf_token() }}" >
					<input type="text" name="search" id="search" >
					<input type = "submit" value = "Search" class = "btn btn-primary" >
			</form>
		</div>

		<div class="panel-body">
				<table class="table table-striped">
						<thead>
								<tr>
									<th>Invoice Name</th>
									<th>#of items</th>
									<th>Total</th>
									<th>Action </th>
								</tr>
						</thead>
						<tbody>
							<?php	 foreach($data as $row){    ?>
								<tr>
											<td><?php echo $row->name ?></a></td>
											<td><?php echo $row->item ?></td>
											<td><?php echo $row->total ?></td>
											<td>
												<a href='#' class="btn btn-primary">PDF</a>
												<a href="#" class="btn btn-success">Edit</a>
												<a href='#'class="btn btn-danger">Delete</a>
											</td>
								</tr>
							<?php } ?>
						</tbody>
				</table>

		</div>
</div>
@endsection
