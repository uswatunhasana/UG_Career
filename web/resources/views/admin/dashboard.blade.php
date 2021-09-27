@extends('layouts.masterbackend')
@section('title', 'Dashboard')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Dashboard</h4>
	<div class="btn-group btn-group-page-header ml-auto">
		<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-ellipsis-h"></i>
		</button>
			@php
            $jumlah_perusahaan = \App\Models\Perusahaan::count();
            @endphp
		<!-- <div class="dropdown-menu">
			<div class="arrow"></div>
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="#">Separated link</a>
		</div> -->
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<div class="card card-stats card-round">
			<div class="card-body ">
				<div class="row align-items-center">
					<div class="col-icon">
						<div class="icon-big text-center icon-primary bubble-shadow-small">
							<i class="fas fa-users"></i>
						</div>
					</div>
					<div class="col col-stats ml-3 ml-sm-0">
						<div class="numbers">
							<p class="card-category">Jumlah User Almuni</p>
							<h4 class="card-title"></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="card card-stats card-round">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-icon">
						<div class="icon-big text-center icon-info bubble-shadow-small">
							<i class="far fa-newspaper"></i>
						</div>
					</div>
					<div class="col col-stats ml-3 ml-sm-0">
						<div class="numbers">
							<p class="card-category">Jumlah User Perusahaan</p>
							<h4 class="card-title">{{ $jumlah_perusahaan }}</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="card card-stats card-round">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-icon">
						<div class="icon-big text-center icon-success bubble-shadow-small">
							<i class="far fa-chart-bar"></i>
						</div>
					</div>
					<div class="col col-stats ml-3 ml-sm-0">
						<div class="numbers">
							<p class="card-category">Jumlah Pertanyaan</p>
							<h4 class="card-title">$ 1,345</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="card card-stats card-round">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-icon">
						<div class="icon-big text-center icon-success bubble-shadow-small">
							<i class="far fa-chart-bar"></i>
						</div>
					</div>
					<div class="col col-stats ml-3 ml-sm-0">
						<div class="numbers">
							<p class="card-category">Jumlah Responden Almuni</p>
							<h4 class="card-title">$ 1,345</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="card card-stats card-round">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-icon">
						<div class="icon-big text-center icon-secondary bubble-shadow-small">
							<i class="far fa-check-circle"></i>
						</div>
					</div>
					<div class="col col-stats ml-3 ml-sm-0">
						<div class="numbers">
							<p class="card-category">Jumlah Responden Perusahaan</p>
							<h4 class="card-title">576</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="card card-stats card-round">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-icon">
						<div class="icon-big text-center icon-secondary bubble-shadow-small">
							<i class="far fa-check-circle"></i>
						</div>
					</div>
					<div class="col col-stats ml-3 ml-sm-0">
						<div class="numbers">
							<p class="card-category">Jumlah Berita</p>
							<h4 class="card-title">576</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>               

@endsection
