@extends('layouts.masterbackend')
@section('title', 'Hasil Survey Perusahaan')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Hasil Survey Perusahaan</h4>
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
			<a href="#">Hasil Survey Perusahaan</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			
			<div class="card-body">
<<<<<<< Updated upstream
				
=======
>>>>>>> Stashed changes
				<!-- Tabel Data -->
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="30px">No</th>
<<<<<<< Updated upstream
								<th>Kode Pertanyaan</th>
								<th>Hasil Pertanyaan</th>
=======
								<th>Tanggal</th>
								<th>Nama Responden</th>
>>>>>>> Stashed changes
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($jawaban_respondens as $jawaban_responden)
							<tr>
								<td>{{$no++ }}</td>
<<<<<<< Updated upstream
								<td>{{ $jawaban_responden->kd_pertanyaan }}</td>
								<td>{{ $jawaban_responden->jawaban }}</td>
								<td>
									<button data-toggle="modal" data-target="#editModal-{{ $pertanyaan->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $pertanyaan->id }}" onclick="deletepertanyaan(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $pertanyaan->id }}" action="{{ route('pert_perusahaan.destroy', $pertanyaan->id) }}" method="POST" style="display: none;">
=======
								<td>{{ $jawaban_responden->created_at }}</td>
								<td>{{ $jawaban_responden->user->name }}</td>
								<td>
									<button data-toggle="modal" data-target="#editModal-{{ $jawaban_responden->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $jawaban_responden->id }}" onclick="deletejawaban_responden(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $jawaban_responden->id }}" action="{{ route('pert_alumni.destroy', $jawaban_responden->id) }}" method="POST" style="display: none;">
>>>>>>> Stashed changes
										@csrf
										@method('DELETE')
									</form>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
<<<<<<< Updated upstream
=======
				</div>
				</div>
>>>>>>> Stashed changes
				</div>
			</div>
		</div>
	</div>

	<!-- Tambah Edit Modal -->
	@foreach ($jawaban_respondens as $jawaban_responden)
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
					<form role="form" action="{{ route('pert_perusahaan.update', $pertanyaan->id) }}" method="POST">
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

	function deletejawaban(id) {
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