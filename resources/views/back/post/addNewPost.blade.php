@extends('back.master')

@section('content')
<h3>Add New Cover</h3>
<form action="/new-cover" method="POST" class="form-horizontal">{{ csrf_field() }}
	<div class="form-group">
		<label for="" class="col-md-2 control-label">Title</label>
		<div class="col-md-10">
			<input type="text" name="title" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-md-2 control-label">Description</label>
		<div class="col-md-10">
			<textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-md-2 control-label">Category</label>
		<div class="col-md-10">
			<select name="category" id="" class="form-control">
				<option value="1">IT/Telecommunication</option>
				<option value="2">Design & Multimedia</option>
				<option value="3">Conseltancy</option>
				<option value="4">IT/Telecommunication</option>
				<option value="5">IT/Telecommunication</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-md-2 control-label">Featured Image</label>
		<div class="col-md-10">
			<input type="file" name="image" class="">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-md-2 control-label">Tags</label>
		<div class="col-md-10">
			<input type="text" name="tag" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-10 col-md-offset-2">
			<input type="submit" name="" id="" class="btn btn-success" value="Save">
		</div>
	</div>
</form>

@if(session()->has('status'))
<div class="alert alert-success" role="alert">
	{{ session()->get('status') }}
</div>
@endif

@endsection