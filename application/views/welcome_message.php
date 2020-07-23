<?php include_once('header.php'); ?>

<div class="container">
	<div>
		<h3>Bank-Branches List</h3>
	</div>
	
	<?php if($msg = $this->session->flashdata('msg')):?>
		<?php echo $msg; ?>
		<?php endif;?>
		<?php echo anchor('welcome/create', 'Add Branch', ['class'=>'btn btn-info']);?>
		
		<table class="table table-striped table-hover">
			<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Branch Id</th>
	  				<th scope="col">Bank Name</th>
      				<th scope="col">Branch Name </th>
	  				<th scope="col">Branch Code</th>
	  				<th scope="col">Creation Date</th>
	  				<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody class="text-center">
				<?php if(count($bankBranches)):?>
					<?php foreach($bankBranches as $bankBranch):?>
						<tr>
							<td><?php echo $bankBranch->bank_branch_id;?></td>
	  						<td><?php echo $bankBranch->bank_name;?></td>
	  						<td><?php echo $bankBranch->bank_branch_name;?></td>
	  						<td><?php echo $bankBranch->bank_branch_code;?></td>
	  						<td><?php echo $bankBranch->date_created;?></td>
	  						<td>
								  <?php echo anchor("welcome/update/{$bankBranch->bank_branch_id}", 'Edit', ['class'=>'btn btn-success']);?>
								  <?php echo anchor("welcome/delete/{$bankBranch->bank_branch_id}", 'Delete', ['class'=>'btn btn-danger']);?>
							</td>
						</tr>
					<?php endforeach;?>
				<?php else: ?>
					<tr>
						<td>No Records Founds!</td>
					</tr>
				<?php endif;?>
			</tbody>
		</table> 
</div>

<?php include_once('footer.php'); ?>