@extends('layouts.masterbackend')
@section('title', 'Data prodi')
@section('content',)               
                <div class="page-header">
						<h4 class="page-title">Data Kabupaten/Kota</h4>
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
								<a href="#">Data prodi</a>
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
											Tambah Data Kab/Kota
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
                                                <form role="form" action="{{ route('prodi.store') }}" method="POST">
                                                    @csrf
                                                    @method('POST')
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Provinsi</b></h4></label>
																	<select class="form-control" name="id_provinsi" required="required">
                                                                        <option disabled selected>-- Daftar Provinsi --</option>
                                                                        @foreach ($provinsis as $provinsi)
                                                                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                                                        @endforeach
                                                                    </select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Kab/Kota</b></h4></label>
																	<input id="addprodi" type="text" name="nama_prodi" class="form-control" placeholder="nama kabupaten/kota">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Kode Kab/Kota</b></h4></label>
																	<input id="addkodeprodi" type="text" name="kd_prodi" class="form-control" placeholder="kode kabupaten/kota">
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
													<th>Nama Provinsi </th>
													<th>Nama Kab/Kota</th>
													<th>Kode Kab/Kota</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@php
													$no = 1;
												@endphp
												@foreach($prodis as $prodi)
												<tr>
													<td>{{$no++ }}</td>
													<td>{{ $prodi->kd_prodi }}</td>
                                                    <td>{{ $prodi->nama_prodi }}</td>
													<td>
													<button data-toggle="modal" data-target="#editModal-{{ $prodi->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
													<button class="btn btn-sm btn-danger" type="button" id="{{ $prodi->id }}" onclick="deleteprodi(this.id)"> <i class="fa fa-trash"></i>
													</button>
													<form id="delete-form-{{ $prodi->id }}" action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display: none;">
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
                                    @foreach ($prodis as $prodi)
                                    <div class="modal fade" id="editModal-{{ $prodi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form role="form" action="{{ route('prodi.update', $prodi->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Provinsi</b></h4></label>
																	<select class="form-control" name="id_provinsi" required="required">
                                                                        <option disabled selected>-- Daftar Provinsi --</option>
                                                                        @foreach ($provinsis as $provinsi)
                                                                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                                                        @endforeach
                                                                        @foreach($provinsis as $provinsi)
                                                                        <option 
                                                                        @if($prodi->id_provinsi ==  $provinsi->id)
                                                                            selected="selected" 
                                                                        @endif
                                                                        value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                                                        @endforeach
                                                                    </select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Kab/Kota</b></h4></label>
																	<input id="addprodi" type="text" name="nama_prodi" class="form-control" value="{{ $prodi->nama_prodi }}">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Kode Kab/Kota</b></h4></label>
																	<input id="addkodeprodi" type="text" name="kd_prodi" class="form-control" value="{{ $prodi->kd_prodi }}">
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

        function deleteprodi(id) {
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