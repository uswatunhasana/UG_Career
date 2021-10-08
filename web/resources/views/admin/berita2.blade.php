@extends('layouts.masterbackend')
@section('title', 'Berita')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Berita</h4>
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
			<a href="#">Berita</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<h4 class="card-title"></h4>
					<div class="form-group">
								<label for="exampleInputPassword1">Kategori</label>
								<select class="form-control input-sm" id="select_category" name="kategori">
									<option value="Pengumuman" @if (Request::segment( 3 ) == "Pengumuman")selected="selected" @endif >Pengumuman</option>
									<option value="Loker" @if (Request::segment( 3 ) == "Loker")selected="selected" @endif>Lowongan Kerja</option>
									<option value="Internship" @if (Request::segment( 3 ) == "Internship")selected="selected" @endif>Internship</option>
								</select>
							</div>
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
						<i class="fa fa-plus"></i>
						Tambah berita
					</button>
				</div>
			</div>
			<div class="card-body">
				<!-- Tambah Data Modal -->
				<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Data berita</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form role="form" action="{{ route('berita.store') }}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Kategori</b></h4></label>
												<select class="form-control input-sm" id="select_category" name="jenis_berita">
                                                    <option value="Pengumuman" @if (Request::segment( 3 ) == "Pengumuman")selected="selected" @endif >Pengumuman</option>
                                                    <option value="Loker" @if (Request::segment( 3 ) == "Loker")selected="selected" @endif>Lowongan Kerja</option>
                                                    <option value="Internship" @if (Request::segment( 3 ) == "Internship")selected="selected" @endif>Internship</option>
                                                </select>
											</div>
										</div>
									</div>
                                    <div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Judul Berita</b></h4></label>
									<input id="addberita" type="text" name="judul_berita" class="form-control" placeholder="Judul Berita">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
									<label><h4><b>Preview Berita</b></h4></label>
									<hr/>
									<textarea id="default" name="preview_berita">Hello, World!</textarea>
									<!-- <input id="addberita" type="text" name="isi_berita" class="form-control" placeholder="Isi berita"> -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
									<label><h4><b>Isi Berita</b></h4></label>
									<hr/>
									<textarea id="default"type="text" name="isi_berita">Hello, World!</textarea>
									<!-- <input id="addberita" type="text" name="isi_berita" class="form-control" placeholder="Isi berita"> -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Foto</b></h4></label>
									<input type="file" class="form-control-file" id="addberita" name="foto">
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
               
<!-- Detail Modal -->
				<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Detail</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								Pilihan Jawaban
								<hr/>
								<table id="detailtable" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="10px">No</th>
								<th>Pilihan Jawaban</th>
							</tr>
						</thead>
						<tbody id="detail-table">

						</tbody>
						</table>
							</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
								<th>Jenis Berita</th>
								<th>Judul Berita</th>
								<th>Tanggal Posting</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($beritas as $berita)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $berita->jenis_berita }}</td>
								<td>{{ $berita->judul_berita }}</td>
								<td>{{ tanggal_indonesia($berita->created_at) }}</td>
								<td>
                                    <img src="{{ asset('img/'. $berita->foto )}}" height="50" width="50" alt="" srcset="">
                                </td>
								<td>
                                    <button type="button" id="detail" class="btn btn-sm btn-primary detail"data-target="#detailModal" data-tooltip="tooltip" data-toggle="modal" data-jenis="{{ $berita->jenis_berita }}" data-judul="{{ $berita->judul_berita }}" data-isi="{{ $berita->isi_berita }}" data-foto="{{ $berita->foto }}" data-placement="bottom" title="Detail"><i class="fa fa-eye"></i></button>
                                    <button data-toggle="modal" data-target="#editModal-{{ $berita->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" id="{{ $berita->id }}" onclick="deleteberita(this.id)"> <i class="fa fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $berita->id }}" action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: none;">
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
	@foreach ($beritas as $berita)
	<div class="modal fade" id="editModal-{{ $berita->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('berita.update', $berita->id) }}" method="POST">
						@csrf
						@method('PUT')

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
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
				$('#select_category').change(function() {
					var val = $(this).val(); 
					window.location = "/UG_Career/administrator/berita" +"/" +val;
					
				});
			});

			$(document).ready(function() {
				$('#kategori_berita').change(function() {
					var val = $(this).val(); 
					if(val == "text"){
						$("#pilihan_jawaban").remove();
					}else{
						var html='<div id="pilihan_jawaban"><hr/><label><h4><b>Pilihan Jawaban</b></h4></label><div class="row control-group after-add-more"><div class="col-sm-9 "><input id="addpilihanjawaban" type="text" name="pilihan_jawaban[]" class="form-control" placeholder="Masukkan Pilihan Jawaban "></div><div class="col-sm-3"><button class="btn btn-success add-more" type="button"><i class="fas fa-plus-square"></i> Add</button></div></div>';
						$("#container_pilihan_jawaban").html(html);
					}	
				});
			});
	
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

		$(document).on("click", ".add-more", function() { 
          var html = $(".copy").html();
          $(".after-add-more").after(html);

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });


		function deleteberita(id) {
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
	
		$(document).on('click', '#detail', function() {
			var id = $(this).data('id');
			$.ajax({
				url: '/UG_Career/administrator/berita/detail'+"/"+id,
				method: "GET",
				dataType: 'json',
				success: function(datas) {
					var htmlkom = '';
						for (i = 0; i < datas.length; i++) {
							htmlkom += '<tr><td>'+ (i+1) +'</td><td>'+ datas[i].pilihan_jawaban +'</td></tr>';
						}
						$('#detail-table').html(htmlkom);
					
				}
			});
		});
		
	</script>

	@endsection