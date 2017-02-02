@extends('layouts.app')


@section('content')
<div class="container">
	<div class="row">
		<h1>register.</h1>

		<form method="POST" action="/register">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="username">username:</label>
				<input name="username" id="username" class="form-control" value="{{ old('username') }} " required></input>
			</div>

			<div class="form-group">
				<label for="email">email:</label>
				<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"required></input>
			</div>

			<div class="form-group">
				<label for="password">password:</label>
				<input type="password" name="password" id="password" class="form-control" value=""required></input>
			</div>

			<div class="form-group">
				<label for="password_confirmation">password confirmation:</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value=""required></input>
			</div>

			<div class="form-group">
				<label for="firstname">first name:</label>
				<input name="firstname" id="firstname" class="form-control" value="{{ old('firstname') }}"required></input>
			</div>

			<div class="form-group">
				<label for="lastname">last name:</label>
				<input name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}"required></input>
			</div>

			<div class="form-group">
				<label for="pref_position">default position:</label>
				<select options="CB" default="hello" name="pref_position" id="pref_position" class="form-control">
					<option value="cb" selected>Centre-back</option>
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary pull-right">submit</button>
			</div>

			@if (count($errors))
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
			@endif
		</form>
	</div>
</div>
@endsection