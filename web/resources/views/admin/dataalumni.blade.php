@extends('layouts.masterbackend')
@section('title', 'Data alumni')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Data Alumni Terdaftar</h4>
	<ul class="breadcrumbs">
		<li class="nav-home">
			<a href="{{ route('administrator.dashboard') }}">
				<i class="flaticon-home"></i>
			</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Data Referensi</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Data Alumni Terdaftar</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<h4 class="card-title"></h4>
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
						<i class="fa fa-plus"></i>
						Tambah Data Alumni
					</button>
				</div>
			</div>
			<div class="card-body">

				<!-- Tambah Data Modal -->
				<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Data Alumni</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form role="form" action="{{ route('dataalumni.store') }}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nama Alumni</b></h4></label>
												<input id="name" type="text" name="name" class="form-control" placeholder="Nama Alumni">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Email</b></h4></label>
												<input id="addnotelpalumni" type="text" name="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')" placeholder="email alumni">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Username</b></h4></label>
												<input id="usernamealumni" type="text" name="username" class="form-control" placeholder="Masukkan Username Pengguna">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Password</b></h4></label>
												<div class="input-group input-group-merge" id="show_hide_password">   
													<input class="form-control" type="password" placeholder="******" id="password" placeholder="password (min 8 kombinasi karakter angka)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
													<div class="input-group-append">
														<span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class='col-sm-12'>
											<div class="form-group form-group-default">
												<label><h4><b>Tanggal Lahir</b></h4></label>
												<div class="input-group">
													<input type="text" class="form-control" id="datepicker" name="datepicker">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="fa fa-calendar"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Jenis Kelamin</b></h4></label>
												<select class="form-control input-sm"  id="jenis_kelamin" name="jenis_kelamin">
													<option value="P">Perempuan</option>
													<option value="L">Laki-Laki</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Alamat Sekarang</b></h4></label>
												<input id="alamatsekarang" type="text" name="alamat_sekarang" class="form-control" placeholder="Masukkan Alamat Sekarang">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Alamat Tetap</b></h4></label>
												<input id="alamat_tetap" type="text" name="alamat_tetap" class="form-control" placeholder="Masukkan Alamat Tetap (KTP)">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nomor Telepon</b></h4></label>
												<input id="no_telp" type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telpon Aktif">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Tahun Lulus</b></h4></label>
												<input id="tahunlulus" type="Text" name="tahun_lulus" class="form-control" placeholder="Masukkan Tahun Lulus Kuliah">
											</div>
										</div>
									</div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
									<button type="submit" class="btn btn-primary">Simpan Data</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Tabel Data -->
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="30px">No</th>
								<th>Nama Alumni </th>
								<th>Username</th>
								<th>Email</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;

							@endphp
							@foreach($alumnis as $alumni)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $alumni->user->name }}</td>
								<td>{{ $alumni->user->username}}</td>
								<td>{{ $alumni->user->email }}</td>
								<td>
									<!-- <button data-toggle="modal" data-target="#editModal-{{ $alumni->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button> -->
									<button data-toggle="modal" data-target="#editModal-{{ $alumni->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $alumni->id }}" onclick="deletealumni(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $alumni->id }}" action="{{ route('dataalumni.destroy', $alumni->id) }}" method="POST" style="display: none;">
										@csrf
										@method('DELETE')
									</form>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tambah Edit Modal -->
	@foreach ($alumnis as $alumni)
	<div class="modal fade" id="editModal-{{ $alumni->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('dataalumni.update', $alumni->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama</b></h4></label>
									<input id="addalumni" type="text" name="name" class="form-control" value="{{ $alumni->user->name }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Email</b></h4></label>
									<input id="addnotelpalumni" type="text" name="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')"value="{{ $alumni->user->email }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Username</b></h4></label>
									<input id="addalumninamealumni" type="text" name="username" class="form-control" value="{{ $alumni->user->username }}" disabled>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Ubah Password</b></h4></label>
									<div class="input-group input-group-merge" id="show_hide_password">   
										<input class="form-control" type="password" placeholder="******" id="password" name="password">
										<div class="input-group-append">
											<span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
						<button type="submit" class="btn btn-primary">Ubah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endforeach

	@endsection
	@section('customjs')
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});
	

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});


		function deletealumni(id) {
			swal({
				title: 'Yakin Ingin Hapus Data ini?',
				text: "Data Tidak Bisa Dikembalikan Setelah Dihapus!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Hapus!',
				cancelButtonText: 'Tidak',
				confirmButtonClass: 'btn btn-success',
				cancelButtonClass: 'btn btn-danger',
				buttonsStyling: false,
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					event.preventDefault();
					document.getElementById('delete-form-'+id).submit();
					swal(
						'Deleted!',
						'Your file has been deleted.',
						'success')
				} else (
					result.dismiss === swal.DismissReason.cancel
					) 
			})
		} 

		$(document).ready(function() {
			$("#show_hide_password a").on('click', function(event) {
				event.preventDefault();
				if($('#show_hide_password input').attr("type") == "text"){
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass( "fa-eye-slash" );
					$('#show_hide_password i').removeClass( "fa-eye" );
				}else if($('#show_hide_password input').attr("type") == "password"){
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass( "fa-eye-slash" );
					$('#show_hide_password i').addClass( "fa-eye" );
				}
			});
		});
		$('#datepicker').datetimepicker({
				format: 'MM/DD/YYYY',
			});
	</script>

	@endsection