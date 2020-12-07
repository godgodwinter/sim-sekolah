@extends('ppdb.layouts.halluarlogin')

@section('title','Masuk')
@section('link-nav-login','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')

<!-- Main -->
<div class="d-md-flex h-md-100 align-items-center">
	<div class="col-md-6 p-0 bg-indigo h-md-100">
		<div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
			<form class="border rounded p-5">
				<h3 class="mb-4 text-center">Form Masuk</h3>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required="">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label small text-muted" for="exampleCheck1">Ingat Saya</label>
				</div>
				<button type="submit" class="btn btn-success btn-round btn-block shadow-sm">Masuk</button>
				<small class="d-block mt-4 text-center"><a class="text-gray" href="#">Lupa Sandi ?</a></small>
			</form>
		</div>
	</div>
	<div class="col-md-6 p-0 bg-white h-md-100 registerarea">
		<div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
			<form class="border rounded p-5">
                <h3 class="mb-4 text-center">Form Daftar</h3>
                <div class="form-group">
					<input type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" placeholder="Nama" required="" name="nama">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required="" name="email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required=""  name="password">
                </div>
                <div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required=""  name="password2">
				</div>
			
				<button type="submit" class="btn btn-success btn-round btn-block shadow-sm">Daftar</button>
			</form>
		</div>
	</div>
</div>
<!-- End Main -->
    
@endsection
