@extends('back.master')

@section('content')
<h3>My All Cover letters</h3>
<table class="table dash-coverlist">
	<tr>
		<th>Title</th>
		<th>Image</th>
		<th>Posted at</th>
		<th>Views</th>
		<th>Offers</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<tr>
		<td><a href="">Laravel Developer looking for a good job</a></td>
		<td><img src="{{ url('img/vue.jpg') }}" alt=""></td>
		<td>18 Dec, 2017</td>
		<td>11</td>
		<td>0</td>
		<td><span class="label label-success">Active</span></td>
		<td>
			<a href="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>
</a>
			<a href="#" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>
</a></td>
	</tr>
	<tr>
		<td><a href="">Laravel Developer looking for a good job</a></td>
		<td><img src="{{ url('img/vue.jpg') }}" alt=""></td>
		<td>18 Dec, 2017</td>
		<td>11</td>
		<td>3</td>
		<td><span class="label label-danger">Inactive</span></td>
		<td>
			<a href="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>
</a>
			<a href="#" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>
</a></td>
	</tr>
</table>

@endsection