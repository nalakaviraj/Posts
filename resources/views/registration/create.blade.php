@extends('layout')



@section('content')

	<div class='col-sm-8'>

		<h1> Register </h1>

		<form method="POST" action="/register">

			{{csrf_field()}}

			<div class="form-group">

				<label for='name'> Name: </label>

				<input type="text" class="form-controll" id="name" name="name">

			</div>

			<div class="form-group">

				<label for='email'> Email: </label>

				<input type="email" class="form-controll" id="email" name="email">

			</div>



			<div class="form-group">

				<label for='password'> Password: </label>

				<input type="password" class="form-controll" id="password" name="password">

			</div>

			<div class="form-group">

				<label for='password_confirmation'> Password: </label>

				<input type="password" class="form-controll" id="password_confirmation" name="password_confirmation">

			</div>

			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">
					
					Register

				</button>



			</div>

			<div class="form-group">

			@include('layouts.errors')

		</div>


		</form>



	</div>


	@endsection
