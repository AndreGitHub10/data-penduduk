@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12 col-12">
	    <div class="card">
	        <div class="card-header">
	            <h4 class="card-title align-center">Data Diri</h4>
	        </div>
	        <div class="card-content">
	            <div class="card-body">
	                <form class="form form-horizontal" method="post" action="" enctype="multipart/form-data">
	                	@csrf
	                    <div class="form-body">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <label>Nama</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama">
	                            </div>
	                            <div class="col-md-3">
	                                <label>NIK</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" id="nik" class="form-control" name="nik" placeholder="NIK">
	                            </div>
	                            <div class="col-md-3">
	                                <label>Tempat dan Tanggal Lahir</label>
	                            </div>
	                            <div class="col-md-5 form-group">
	                                <input type="text" id="tempat" class="form-control" name="tempat_lahir" placeholder="Tempat lahir">
	                            </div>
	                            <div class="col-md-4 form-group">
	                            	<input type="date" name="tanggal" class="form-control" name="tanggal_lahir">
	                            </div>
	                            <div class="col-md-3">
	                                <label>Nomor HP</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" id="kontak" class="form-control"
	                                    name="kontak" placeholder="Nomor HP">
	                            </div>
	                            <div class="col-sm-12 d-flex justify-content-end">
	                                <button type="submit"
	                                    class="btn btn-primary me-1 mb-1">Submit</button>
	                                <button type="reset"
	                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
	                            </div>
	                        </div>
	                    </div>
	                </form>
	                <a class="btn btn-info btn-sm" href="">Show</a>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection