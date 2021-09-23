@extends('layouts.masterbackend')
@section('title', 'Data Perusahaan')
@section('content',)               
                <div class="page-header">
						<h4 class="page-title">Data Perusahaan</h4>
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
								<a href="#">Data Perusahaan</a>
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
											Tambah Data Perusahaan
										</button>
									</div>
								</div>
								<div class="card-body">

                                    <!-- Tambah Data Modal -->
                                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form role="form" action="{{ route('perusahaan.store') }}" method="POST">
                                                    @csrf
                                                    @method('POST')
														<div class="row">
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama User</b></h4></label>
                                                                    <select class="form-control" name="id_user" required="required">
                                                                        <option disabled selected>-- Daftar User --</option>
                                                                        @foreach ($users as $user)
                                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                                        @endforeach
                                                                    </select>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label><h4><b>Nomor Telepon</b></h4></label>
																	<input id="addnotelpperusahaan" type="text" name="no_telp" class="form-control" placeholder="08XXXXXXXXXXX">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>URL Web</b></h4></label>
																	<input id="addurlwebperusahaan" type="text" name="url_web" class="form-control" placeholder="https://xxxxxxxx.xxx">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Alamat</b></h4></label>
																	<input id="addalamatperusahaan" type="text" name="alamat" class="form-control" placeholder="nama contact person">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Contact Person</b></h4></label>
																	<input id="addnamacpperusahaan" type="text" name="nama_cp" class="form-control" placeholder="nama contact person">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Jabatan</b></h4></label>
																	<input id="addjabatanperusahaan" type="text" name="jabatan" class="form-control" placeholder="jabatan contact person">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Email Contact Person</b></h4></label>
																	<input id="addemailcpperusahaan" type="text" name="email_cp" class="form-control" placeholder="email contact person">
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
													<th>Nama Instansi </th>
													<th>No. Telp</th>
													<th>URL Web</th>
													<th>Email</th>
													<th>Alamat</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@php
													$no = 1;
												@endphp
												@foreach($perusahaans as $perusahaan)
												<tr>
													<td>{{$no++ }}</td>
													<td>{{ $perusahaan->user->name }}</td>
													<td>{{ $perusahaan->no_telp }}</td>
													<td>{{ $perusahaan->url_web }}</td>
													<td>{{ $perusahaan->email }}</td>
													<td>{{ $perusahaan->alamat }}</td>
													<td>
													<!-- <button data-toggle="modal" data-target="#editModal-{{ $perusahaan->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button> -->
													<button data-toggle="modal" data-target="#editModal-{{ $perusahaan->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
													<button class="btn btn-sm btn-danger" type="button" id="{{ $perusahaan->id }}" onclick="deleteperusahaan(this.id)"> <i class="fa fa-trash"></i>
													</button>
													<form id="delete-form-{{ $perusahaan->id }}" action="{{ route('perusahaan.destroy', $perusahaan->id) }}" method="POST" style="display: none;">
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
                                    @foreach ($perusahaans as $perusahaan)
                                    <div class="modal fade" id="editModal-{{ $perusahaan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form role="form" action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                        <div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Instansi</b></h4></label>
																	<input id="addperusahaan" type="text" name="name" class="form-control" value="{{ perusahaan->user->name }}">
																</div>
															</div>
														</div>
                                                        <div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Email Perusahaan</b></h4></label>
																	<input id="addnotelpperusahaan" type="text" name="email" class="form-control" value="{{ perusahaan->user->email }}">
																</div>
															</div>
														</div>
                                                        <div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nomor Telepon</b></h4></label>
																	<input id="addnotelpperusahaan" type="text" name="no_telp" class="form-control" value="{{ perusahaan->no_telp }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>URL Web</b></h4></label>
																	<input id="addurlwebperusahaan" type="text" name="url_web" class="form-control" value="{{ perusahaan->url_web }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Contact Person</b></h4></label>
																	<input id="addnamacpperusahaan" type="text" name="nama_cp" class="form-control" value="{{ perusahaan->nama_cp }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Jabatan</b></h4></label>
																	<input id="addjabatanperusahaan" type="text" name="jabatan" class="form-control" value="{{ perusahaan->jabatan }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Email Contact Person</b></h4></label>
																	<input id="addemailcpperusahaan" type="text" name="email_cp" class="form-control" value="{{ perusahaan->email_cp }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Username</b></h4></label>
																	<input id="addusernameperusahaan" type="text" name="username" class="form-control" value="{{ perusahaan->user->username }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Password</b></h4></label>
																	<input id="addpasswordperusahaan" type="text" name="password" class="form-control" value="{{ perusahaan->user->password }}">
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

        function deleteperusahaan(id) {
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
	</script>

@endsection