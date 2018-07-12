@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Member 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}"><i class="fa fa-reply"></i></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('user.store') }}" method="post" >
			  		{{ csrf_field() }}
			  	 <div class="form-group has-feedback">
          <input placeholder="Full name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group has-feedback">
          <input placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
          <input placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
         <div class="form-group has-feedback">
          <input class="form-control" placeholder="Retype password" type="password" name="password_confirmation" required>
        </div>
			  			<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection