@extends('app-dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <h2>Profile!</h2>
      <hr />
			<div class="panel panel-default">
				<div class="panel-heading">Halaman Profil</div>
				<div class="panel-body">
					@if (Session::has('message'))
	        <div class="col-md-12">
						<div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
	        </div>
	        @endif
					{!! Html::ul($errors->all()) !!}
					{!! Form::model($user, array('route' => array('dashboard.profile.update', $user->id), 'method' => 'PUT')) !!}

					<div class="form-group">
					{!! Form::label('name', 'Nama') !!}
					{!! Form::text('name', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('password', 'Password') !!}
					<input type="password" class="form-control" name="password" placeholder="Password">
					</div>

					<div class="form-group">
					{!! Form::label('password_confirmation', 'Ketik Ulang Password') !!}
					<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
					</div>

					{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
