<!DOCTYPE html>
<html>
<head>
	<title>add product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 classs="mb-3">Add product form</h1>
		@if(Session::has('msg'))
		<div class="alert alert-success">
			{{session::get ('msg')}}
			
		</div>
		@endif

		<form method="post" enctype="multipart/form-data" action="{{route('storeproduct')}}">
			@csrf
			    <div class="col-md-6">
				<label for="product">productname</label>
				<input type="text" name="pname" placeholder="enter product name" class="form-control">
			   </div>
				<div class="col-md-6">
				<label for="productprice">productprice</label>
				<input type="number" name="price" placeholder="enter productprice" class="form-control">
				</div>
				<div class="col-md-6">
				<label for="productquantity">produtquantity</label>
				<input type="number" name="quantity" class="form-control">
				</div>
				<div class="col-md-6">
				<label for="productdescription">productdescription</label>
				<input type="text" name="description" class="form-control">
				</div>
				<div class="col-md-6">
				<label for="image">productimage</label>
				<input type="file" name="image" class="form-control">
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-primary">Add product</button>
				</div>
				
			</div>
		</form>
		
	</div>

</body>
</html>