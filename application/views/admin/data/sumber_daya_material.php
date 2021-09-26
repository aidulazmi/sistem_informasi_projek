<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bolder my-1 fs-3">Sumber Daya Material</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">
										<a href="../../demo2/dist/index.html" class="text-white text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">Sumber Daya Material</li>
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
																					
											
											<!--begin::Add user-->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
												</svg>
											</span>
											Add T Pekerjaan</button>
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
														<h2 class="fw-bolder">Add</h2>
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
														<form method="post" id="kt_modal_add_user_form" class="form" action="<?php echo site_url('C_admin/simpan_sumber_daya_material')?>">
															<!--begin::Scroll-->
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
																	
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Nama Sumber Daya</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="nama_sumber_daya" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Sumber Daya Material"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Satuan</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="satuan" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="satuan"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Koofisien</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="koofisien" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="koofisien" onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Volume</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="volume_kontrak" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="volume" onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Harga Satuan(Rp.)</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="harga_satuan" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="satuan" onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Jumlah</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="jumlah" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Jenis Pekerjaan" onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Jenis Pekerjaan</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid fw-bolder" name="id_jenis_pekerjaan">
																		
																		<option>Silahakan Isi Projek</option>
																		<?php                                
											                              foreach ($user3 as $row) {  
											                              echo "<option value='".$row->id_jenis_pekerjaan."'>".$row->nama_jenis_pekerjaan."</option>";
											                              }
											                            ?>
																	</select>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Kode Projek</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid fw-bolder" name="kode_proyek">
																		
																		<option>Silahakan Isi Projek</option>
																		
											                            <?php                                
											                              foreach ($user2 as $row) {  
											                              echo "<option value='".$row->kode_proyek."'>".$row->nama_proyek."</option>";
											                              }
											                            ?>

																	</select>
																	<!--end::Input-->
																</div>
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="required fw-bold fs-6 mb-2">Kode Tahap Pekerjaan</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid fw-bolder" name="kode_tahap_pekerjaan">
																		
																		<option>Silahakan Isi Projek</option>
																		
											                            <?php                                
											                              foreach ($user4 as $row) {  
											                              echo "<option value='".$row->kode_tahap_pekerjaan."'>".$row->nama_tahap_pekerjaan."</option>";
											                              }
											                            ?>

																	</select>
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
												
												<th class="min-w-125px">Nama Sumber Daya</th>
												<th class="min-w-125px">Satuan</th>
												<th class="min-w-125px">Koofisien</th>
												<th class="min-w-125px">Volume</th>
												<th class="min-w-125px">Harga Satuan</th>
												<th class="min-w-125px">Jumlah</th>
												
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
													<?php echo $u->nama_sumber_daya?>
												</td>
												<td>
													<?php echo $u->satuan?>
												</td>
												<td>
													<?php echo $u->koofisien?>
												</td>
												<td>
													<?php echo $u->volume_kontrak?>
												</td>
												<td>
													Rp. <?php echo number_format($u->harga_satuan, 0, ".", ".")?>
												</td>
												<td>
													<?php echo $u->jumlah?>
												</td>
												
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
															<a href="<?php echo site_url('C_admin/hapus_sumber_daya_material/'.$u->kode_sumber_daya_material);?>" class="menu-link px-3" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Delete</a>
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
