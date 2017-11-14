@extends('auth.master')

@section('content')


<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1 class="text-center">Login</h1>
		<div class="panel">
			<div class="panel-body">
				<div class="Register">
					<form action="/login" method="POST">{{ csrf_field() }}
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="Password" name="password" class="form-control">
						</div>
						<input type="submit" name="" class="btn btn-primary" value="Login">
					</form>
					<a href="/register">Not registered? Register here</a>
				</div>
				
			</div>
		</div>
	</div>
</div>


@endsection