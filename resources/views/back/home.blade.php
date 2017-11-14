@extends('back.master')


@section('content')


<div class="row">
	<div class="col-md-3">
		<div class="left-menu">
			@include('back.include.left-nav')
		</div>
	</div>
	<div class="col-md-9">
		<div class="dash-contents">
			<div class="row">
				<div class="col-md-12">
					@yield('')
					
				</div>
			</div>
		</div>
	</div>
</div>


@endsection