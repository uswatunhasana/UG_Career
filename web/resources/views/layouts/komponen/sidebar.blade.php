<div class="sidebar">
			
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav">
						<li class="nav-item">
							<a href="{{ route('administrator.dashboard') }}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Data Referensi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ route('user.index') }}">
											<span class="sub-item">Data Operator Sekjur</span>
										</a>
									</li>
									<li>
										<a href="{{ route('dataalumni.index') }}">
											<span class="sub-item">Data Alumni</span>
										</a>
									</li>
									<li>
										<a href="{{ route('perusahaan.index') }}">
											<span class="sub-item">Data Perusahaan</span>
										</a>
									</li>
									<li>
										<a href="{{ route('provinsi.index') }}">
											<span class="sub-item">Data Provinsi</span>
										</a>
									</li>
									<li>
										<a href="{{ route('kabkota.index') }}">
											<span class="sub-item">Data Kabupaten/Kota</span>
										</a>
									</li>
									<li>
										<a href="{{ route('prodi.index') }}">
											<span class="sub-item">Data Prodi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Tracer Study</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="/UG_Career/administrator/pert_alumni/text">
											<span class="sub-item">Daftar Pertanyaan Alumni</span>
										</a>
									</li>
									<li>
										<a href="/UG_Career/administrator/pert_perusahaan/text">
											<span class="sub-item">Daftar Pertanyaan Perusahaan</span>
										</a>
									</li>
									<li>
										<a href="{{ route('hasil_alumni.index') }}">
											<span class="sub-item">Hasil Survei Alumni</span>
										</a>
									</li>
									<li>
										<a href="{{ route('hasil_perusahaan.index') }}">
											<span class="sub-item">Hasil Survei Perusahaan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="{{ route('berita.index') }}">
								<i class="far fa-newspaper"></i>
								<p>Berita</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('dataweb.index') }}">
								<i class="fas fa-desktop"></i>
								<p>Setting Data Web</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>