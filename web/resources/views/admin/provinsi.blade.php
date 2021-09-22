@extends('layouts.masterbackend')
@section('title', 'Data Provinsi')
@section('content',)               
                <div class="page-header">
						<h4 class="page-title">Data Provinsi</h4>
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
								<a href="#">Data Provinsi</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Cominggsoon</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Tambah Data Provinsi
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><h4><b>Nama Provinsi</b></h4></label>
																	<input id="addProvinsi" type="text" name="namaprovinsi" class="form-control" placeholder="nama provinsi">
																</div>
															</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Tambah</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead class="thead-light">
												<tr>
													<th width="30px">No</th>
													<th>Nama Provinsi</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<!-- <tfoot>
												<tr>
												<th width="30px">No</th>
												<th>Nama Provinsi</th>
												</tr>
											</tfoot> -->
											<tbody>
												@php
													$no = 1;
												@endphp
												@foreach($provinsis as $provinsi)
												<tr>
													<td>{{$no++ }}</td>
													<td>{{ $provinsi->nama_provinsi }}</td>
													<td>
													<button data-toggle="modal" data-target="#editModal-{{ $provinsi->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
													<button class="btn btn-sm btn-danger" type="button" id="{{ $provinsi->id_provinsi }}" onclick="deleteprovinsi(this.id)"> <i class="fa fa-trash"></i>
													</button>
													<form id="delete-form-{{ $provinsi->id_provinsi }}" action="{{ route('provinsi.destroy', $provinsi->id_provinsi) }}" method="POST" style="display: none;">
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

    function deleteprovinsi(id) {
        Swal.fire({
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
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success')
            } else (
                result.dismiss === swal.DismissReason.cancel
            ) 
        });
      } 
  
	</script>

@endsection