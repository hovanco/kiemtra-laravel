<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Categories</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('bootstrap-4.0/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Quantity</th>
					<th>Status</th>
					<th>Option</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($cate as $value)
					<tr align="center">
						<td>{!! $value["id"] !!}</td>
						<td>{!! $value["Name"] !!}</td>
						<td>{!! $value["Quantity"] !!}</td>
						<td>{!! $value["Status"] !!}</td>

						<td>
							<a href="{!! url('addcategory') !!}">Add</a>
							<a href="{!! url('edit',$value["id"]) !!}">Edit</a>
							<a href="{!! url('delete',$value["id"]) !!}">Delete</a>
							<!-- addcategory, edit, delete:Chính là tên đường dẫn trong view -->
						</td>
					</tr>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>