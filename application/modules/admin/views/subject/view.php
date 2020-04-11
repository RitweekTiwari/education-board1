		<div class="breadcome-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcome-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="breadcome-heading">
										<form role="search" class="sr-input-func">
											<input type="text" placeholder="Search..." class="search-int form-control">
											<a href="#"><i class="fa fa-search"></i></a>
										</form>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<ul class="breadcome-menu">
										<li><a href="#">Home</a> <span class="bread-slash">/</span>
										</li>
										<li><span class="bread-blod"><?php echo	$page ?></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
							<div class="product-status-wrap drp-lst">
								<table class="table table-striped table-bordered " id="table" data-toggle="table"
									data-pagination="true" data-search="true" data-show-columns="true"
									data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
									data-show-toggle="true" data-resizable="true" data-cookie="true"
									data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
									data-toolbar="#toolbar">
									<caption>
										<h4> Subject List</h4>
									</caption>
									<tr>
										<th>S.No</th>
										<th>Id</th>

										<th>Name</th>
										
										<th>Description</th>
										<th>Add Lesson</th>
										<th>Setting</th>
									</tr>
									<?php
                                            $i=1;
                                        foreach($subject as $row){?>
									<tr>
										<td> <?php echo $i ?></td>
										<td><?php echo $row['subject_id'] ?></td>
										<td><?php echo $row['name'] ?></td>
										
										<td><?php echo $row['description'] ?></td>
										<td> <a href="<?php echo base_url('admin/Subject/addLesson/').$row['subject_id'] ?>" 
												>Add Lesson</a></td>
										<td> <a data-target="<?php echo '#'.$row['subject_id']; ?>" class="text-center tip"
												data-toggle="modal" data-original-title="Edit"><i
													class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<a title="Trash" class="pd-setting-ed"
												onclick="delete_detail(<?php echo $row['subject_id'] ;?>)"><i class="fa fa-trash-o"
													aria-hidden="true"></i></a></td>
									</tr>

									<div id="<?php echo $row['subject_id'] ; ?>"
										class="modal  default-popup-PrimaryModal fade" role="dialog">
										<div class="modal-dialog" role="document ">
											<div class="modal-content">
												<form class="form-horizontal" method="post"
													action="<?php echo base_url('admin/Subject/Update/').$row['subject_id'] ?>"
													name="basic_validate" id="basic_validate" novalidate="novalidate">
													<div class="modal-header header-color-modal bg-color-1 ">
														<h6 class="modal-title">Edit Subject</h6>
														<div class="modal-close-area modal-close-df">
															<a class="close" data-dismiss="modal" href="#"><i
																	class="fa fa-close"></i></a>
														</div>
													</div>
													<div class="modal-body">
														<div class="widget-content nopadding">
															<div class="form-group ">
																<label >Name</label>
																
																	<input type="text" class="form-control" name="name"
																		value="<?php echo $row['name'] ?>" id="required">
																
															</div>
															
                                                            <div class="form-group">
																<label >Description</label>
																
																	<textarea name="description" class="summernote6"  ><?php echo $row['description'] ?></textarea>
																		
															
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<input type="hidden"
															name="<?php echo $this->security->get_csrf_token_name();?>"
															value="<?php echo $this->security->get_csrf_hash();?>">
														<input type="submit" value="Update" class="btn btn-primary">
														<a data-dismiss="modal" class="btn" href="#">Cancel</a>
													</div>
												</form>
											</div>
										</div>
									</div>
									<?php
                                                                    $i++ ;
                                                                    }?>
								</table>
							</div>
						
					
				</div>
			</div>
		</div>





		</div>
		</div>
		</div>
		<script>
			function delete_detail(id) {
				var del = confirm("Do you want to Delete");
				if (del == true) {
					var sureDel = confirm("Are you sure want to delete");
					if (sureDel == true) {
						window.location = "<?php echo base_url()?>admin/Category/Delete/" + id;
					}

				}
			}
		</script>