@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Barang 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}"><i class="fa fa-reply"></i></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama" class="form-control" required>
                        <label for="cc-payment" class="control-label mb-1">gambar</label>
                        <input name="gambar" type="file" required>
                    </div>
                   <div class="form-group {{ $errors->has('kondisi') ? ' has-error' : '' }}">
   
			  			<label class="control-label">kondisi</label>
			  			<input type="text" name="kondisi" class="form-control" required>
			  			@if ($errors->has('barang'))
                             <span class="help-block">
                                <strong>{{ $errors->first('barang') }}</strong>
                            </span>
                        @endif

			  		</div>
			  		 <div class="form-group {{ $errors->has('stok') ? ' has-error' : '' }}">
         
			  			<label class="control-label">stok</label>
			  			<input type="text" name="stok" class="form-control" required>
			  			@if ($errors->has('barang'))
                             <span class="help-block">
                                <strong>{{ $errors->first('barang') }}</strong>
                            </span>
                        @endif

			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div> 
</div>
@endsection