@extends('layouts.masterbackend')
@section('title', 'Pertanyaan Alumni')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Pertanyaan Alumni</h4>
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
			<a href="#">Tracer Study</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Pertanyaan Alumni</a>
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
						Tambah Pertanyaan
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
								<form role="form" action="{{ route('pert_alumni.store') }}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-md-6 pr-0">
											<div class="form-group form-group-default">
												<label><h4><b>Jenis Pertanyaan</b></h4></label>
												<select class="form-control" name="jenis_pertanyaan" required="required">
													<option disabled selected>-- Pilihan --</option>
													<option value="text">Teks</option>
													<option value="pilihan">Pilihan</option>
													<option value="checklist">Checks</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label><h4><b>Kode Pertanyaan</b></h4></label>
												<input id="addkodepertalumni" type="text" name="kd_pertanyaan" class="form-control" placeholder="kode pertanyaan (maks: 5 angka) ">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Pertanyaan</b></h4></label>
												<input id="addpertanyaan" type="text" name="pertanyaan" class="form-control" placeholder="Masukkan Pertanyaan ">
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
								<th>Kode Pertanyaan</th>
								<th>Pertanyaan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($pertanyaans as $pertanyaan)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $pertanyaan->kd_pertanyaan }}</td>
								<td>{{ $pertanyaan->pertanyaan }}</td>
								<td>
									<button data-toggle="modal" data-target="#editModal-{{ $pertanyaan->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $pertanyaan->id }}" onclick="deletepertanyaan(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $pertanyaan->id }}" action="{{ route('pert_alumni.destroy', $pertanyaan->id) }}" method="POST" style="display: none;">
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
	@foreach ($pertanyaans as $pertanyaan)
	<div class="modal fade" id="editModal-{{ $pertanyaan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('pert_alumni.update', $pertanyaan->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6 pr-0">
								<div class="form-group form-group-default">
									<label><h4><b>Jenis Pertanyaan</b></h4></label>
									<select class="form-control" name="jenis_pertanyaan"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
										<!-- <option disabled selected>-- Jenis pertanyaan --</option> -->
										<option value="text" {{ $pertanyaan->jenis_pertanyaan === 'text' ? 'selected' : '' }} >Text</option>
										<option value="pilihan" {{ $pertanyaan->jenis_pertanyaan === 'pilihan' ? 'selected' : '' }} >Pilihan</option>
										<option value="checklist" {{ $pertanyaan->jenis_pertanyaan === 'checklist' ? 'selected' : '' }} >Checklist</option>
									</select>
								</div>
							</div>
											
							<div class="col-md-6">
								<div class="form-group form-group-default">
									<label><h4><b>Kode pertanyaan</b></h4></label>
									<input id="addkodepertanyaan" type="text" name="kd_pertanyaan" class="form-control" value="{{ $pertanyaan->kd_pertanyaan }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama pertanyaan</b></h4></label>
									<input id="addpertanyaan" type="text" name="pertanyaan" class="form-control" value="{{ $pertanyaan->pertanyaan }}">
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

		function deletepertanyaan(id) {
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