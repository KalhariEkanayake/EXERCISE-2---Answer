<?php include_once('header.php'); ?>

<div class="container">
<!-- form --> 
  <?php echo form_open("welcome/change/{$bankBranches->bank_branch_id}", ['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Edit Bank Branch</legend>
    
    <div class="form-group">
      <label for="bank_branch_id">Bank Branch Id</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_branch_id', 'placeholder'=>'Bank branch id', 'class'=>'form-control', 'value'=>set_value('bank_branch_id', $bankBranches->bank_branch_id)]);?>
        <?php echo form_error('bank_branch_id', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="bank_name">Bank Name</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_name', 'placeholder'=>'Bank Name', 'class'=>'form-control', 'value'=>set_value('bank_name', $bankBranches->bank_name)]);?>
        <?php echo form_error('bank_name', '<div class="text-danger">', '</div>');?>
      </div>
    </div>
     
    <div class="form-group">
      <label for="bank_branch_name">Branch Name</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_branch_name', 'placeholder'=>'Bank Branch Name', 'class'=>'form-control', 'value'=>set_value('bank_branch_name', $bankBranches->bank_branch_name)]);?>
        <?php echo form_error('bank_branch_name', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="bank_branch_code">Bank Branch Code</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_branch_code', 'placeholder'=>'Bank Branch Code', 'class'=>'form-control', 'value'=>set_value('bank_branch_name', $bankBranches->bank_branch_code)]);?>
        <small id="branch_code" class="form-text text-muted">It should be 3 digits number code.</small>
        <?php echo form_error('bank_branch_code', '<div class="text-danger">', '</div>');?>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-5">
        <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-warning']);?>
        <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-info']);?>
      </div>
    </div>
  </fieldset>
  <?php echo form_close();?>
<!-- form -->
</div>

<?php include_once('footer.php'); ?>