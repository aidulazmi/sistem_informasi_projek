<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bolder my-1 fs-3">Data Proyek</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">
										<a href="../../demo2/dist/index.html" class="text-white text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">Data Proyek</li>
									<!--end::Item-->
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
										</div>
										<!--end::Search-->
									</div>
									<!--begin::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
											<!--begin::Filter-->
											<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->Filter</button>
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-dark fw-bolder">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Separator-->
												<!--begin::Content-->
												<div class="px-7 py-5" data-kt-user-table-filter="form">
													<!--begin::Input group-->
													<div class="mb-10">
														<label class="form-label fs-6 fw-bold">Nama Pemilik:</label>
														<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
															
															<option></option>
															<?php                                
								                              foreach ($user as $row) {  
								                              echo "<option value='".$row->nama_pemilik."'>".$row->nama_pemilik."</option>";
								                              }
								                            ?>
														</select>
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
														<button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Content-->
											</div>
											<!--end::Menu 1-->
											<!--end::Filter-->
											
											<!--begin::Add user-->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
												</svg>
											</span>
											Add Proyek</button>
											<!--end::Add user-->
										</div>
										<!--end::Toolbar-->
										<!--begin::Group actions-->
										<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
											<div class="fw-bolder me-5">
											<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
											<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
										</div>
										<!--end::Group actions-->
										
										<!--begin::Modal - Add task-->
										<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
											<!--begin::Modal dialog-->
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<!--begin::Modal content-->
												<div class="modal-content">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_user_header">
														<!--begin::Modal title-->
														<h2 class="fw-bolder">Add Proyek</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
														<!--begin::Form-->
														<form method="post" id="kt_modal_add_user_form" class="form" action="<?php echo site_url('C_admin/simpan_proyek')?>">
															<!--begin::Scroll-->
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Nama Proyek</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="nama_proyek" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name"/>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Nama Lokasi</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="Text" name="lokasi_proyek" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nama Lokasi" />
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Nama Pemilik</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="Text" name="nama_pemilik" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nama Pemilik" />
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Anggaran(Rp.)</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="Text" name="anggaran" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Anggaran" onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Tanggal Kontrak</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="Date" name="tanggal_kontrak" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Tanggal Kontrak" />
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Nomor Kontrak</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="Text" name="nomor_kontrak" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nomor Kontrak" />
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Masa Kerja</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="Text" name="masa_kerja" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Masa Kerja" />
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Tanggal Mulai</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="date" name="tanggal_mulai" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Tanggal Mulai" />
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Tanggal Selesai</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="date" name="tanggal_selesai" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Tanggal Selesai" />
																	<!--end::Input-->
																</div>
															</div>
															<!--end::Scroll-->
															<button type="submit" class="btn btn-primary">
																	<span class="indicator-label">Simpan Data</span>	
																</button>
														</form>
														<!--end::Form-->
													</div>
													<!--end::Modal body-->
												</div>
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
										<!--end::Modal - Add task-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
												<th class="w-10px pe-2">
													<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
														<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
													</div>
												</th>
												<th class="min-w-125px">Nama Proyek</th>
												<th class="min-w-125px">Nama Pemilik</th>
												<th class="min-w-125px">Masa Kerja</th>
												<th class="min-w-125px">Anggaran</th>
												<th class="min-w-125px">Tanggal Mulai</th>
												<th class="min-w-125px">Tanggal Selesai</th>
												<th class="text-end min-w-100px">Actions</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="text-gray-600 fw-bold">
											<!--begin::Table row-->
											  <?php $i=0; foreach($user as $u){ echo ''; $i++; ?>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<?php echo $u->nama_proyek ?>
												</td>
												<td><?php echo $u->nama_pemilik ?></td>
												<td>
													<?php echo $u->masa_kerja ?>
												</td>
												<td>
													Rp. <?php echo number_format($u->anggaran, 0, ".", ".")?>
												</td>
												<td><?php echo $u->tanggal_mulai ?></td>
												<td><?php echo $u->tanggal_selesai ?></td>
												<td class="text-end">
													<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="../../demo2/dist/apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
														</div>
														<div class="menu-item px-3">
															<a href="<?php echo site_url('C_admin/hapus_proyek/'.$u->kode_proyek);?>" class="menu-link px-3" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Delete</a>
														</div>
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
