<div class="alert alert-danger" role="alert">
	<a href="<?php echo base_url(); ?>">Back to the homepage</a>
</div>
<!-- End Top Menu -->

<!-- Start Content -->
<div class="row">
	<div class="col-md-12">

		<!-- Start Form Update -->
		<form method="post" action="<?php echo base_url(); ?>update/update/">
			<table class="table table-striped table-bordered">

				<!-- Start User Head Information -->
			    <thead>
			        <tr>
					    <th class="col-md-1">Id:</th>
					    <th class="col-md-3">NIM:</th>
					    <th class="col-md-3">NAMA:</th>
					    <th class="col-md-2">KELAS:</th>
						<th class="col-md-2">Aksi</th>
					    <th class="col-md-3"></th>
			        </tr>
			    </thead>
		    	<!-- End User Head Information -->

		    	<!-- Start User Content Form -->
			    <tbody>
			    	<?php foreach($user->result() as $row): ?>
				        <tr>
						    <td>
						        <?php echo $row->id; ?>
						        <input type="hidden" name="id" class="form-control" value="<?php echo $row->id; ?>">
						    </td>
						    <td>
						        <input type="text" name="nim" class="form-control" placeholder="<?php echo $row->nim; ?>">
						    </td>
						    <td>
						        <input type="text" name="nama" class="form-control" placeholder="<?php echo $row->nama; ?>">
						    </td>
						    <td>
						        <input type="text" name="kelas" class="form-control" placeholder="<?php echo $row->kelas; ?>">
						    </td>
						    <td>
						        <button type="submit" class="btn btn-default">Submit</button>
						    </td>
				        </tr>
				    <?php endforeach; ?>
			    </tbody>
		    	<!-- End User Content Form -->

			</table>
		</form>
		<!-- End Form Update -->
	
	</div>
</div>
<!-- End Content -->