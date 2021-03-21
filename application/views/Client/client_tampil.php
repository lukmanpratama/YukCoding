<link href="vendor/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tables</h1>
	<h1 class="h3 mb-4 text-gray-800"><a href="#" data-toggle="modal" data-target="#tambah_data_client"><button type="button" class="btn btn-primary">Tambah Data</button></a></h1>
	
	<?php $this->session->flashdata('notif')?>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="dataTables_length" id="dataTable_length"><label>Show <select
										name="dataTable_length" aria-controls="dataTable"
										class="custom-select custom-select-sm form-control form-control-sm">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select> entries</label></div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
										class="form-control form-control-sm" placeholder=""
										aria-controls="dataTable"></label></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
								role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 309.889px;">Name</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 461.889px;">No Telephone</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Office: activate to sort column ascending"
											style="width: 231.889px;">E-Mail</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Age: activate to sort column ascending"
											style="width: 119.889px;">Alamat</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Start date: activate to sort column ascending"
											style="width: 219.889px;">Instansi</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">Name</th>
										<th rowspan="1" colspan="1">No Telepon</th>
										<th rowspan="1" colspan="1">E-Mail</th>
										<th rowspan="1" colspan="1">Alamat</th>
										<th rowspan="1" colspan="1">Instansi</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
										foreach($client as $i):
									?>

									<tr role="row" class="odd">
										<td class="sorting_1"><?php echo $i->nama_client;?></td>
										<td><?php echo $i->no_hp;?></td>
										<td><?php echo $i->email;?></td>
										<td><?php echo $i->alamat;?></td>
										<td><?php echo $i->instansi;?></td>
									</tr>
									<?php endforeach ;?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1
								to 10 of 57 entries</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="dataTable_previous"><a
											href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
											class="page-link">Previous</a></li>
									<li class="paginate_button page-item active"><a href="#" aria-controls="dataTable"
											data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
									<li class="paginate_button page-item next" id="dataTable_next"><a href="#"
											aria-controls="dataTable" data-dt-idx="7" tabindex="0"
											class="page-link">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="tambah_data_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Client</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form action="<?php echo site_url('client/tambah')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label" for="nama_client">Nama Client</label>
						<input type="text" name="nama_client" class="form-control" <?php echo form_error('nama_client') ? 'is-invalid':'' ?>" id="nama_client" placeholder="Nama Client" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="no_hp">No Telephone Client</label>
						<input type="tel" name="no_hp" class="form-control" <?php echo form_error('no_telp') ? 'is-invalid':'' ?>" id="no_telp" placeholder="No Telephone Client" id="no_telp" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="email">E-mail Client</label>
						<input type="email" name="email" class="form-control" <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="Email Client" id="email" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="alamat">Alamat Client</label>
						<input type="text" name="alamat" class="form-control" <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="Alamat Client" id="alamat" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="instansi">Instansi Client</label>
						<input type="text" name="instansi" class="form-control" <?php echo form_error('instansi') ? 'is-invalid':'' ?>" id="instansi" placeholder="Instansi Client" id="instansi" required>
					</div>
				</div>
			</form>
				<div class="modal-footer">
					<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        $('#data_table').DataTable();
    });
</script>
