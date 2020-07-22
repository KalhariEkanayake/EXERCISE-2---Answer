<?php include_once('header.php'); ?>

<div class="container">
<!-- form -->
  <?php echo form_open('welcome/save', ['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Add Bank Branch</legend>
    
    <div class="form-group">
      <label for="bank_branch_id">Branch Id</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_branch_id', 'placeholder'=>'Bank Branch Id', 'class'=>'form-control']);?>
        <?php echo form_error('bank_branch_id', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="bank_name">Bank Name</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_name', 'placeholder'=>'Bank Name', 'class'=>'form-control']);?>
        <?php echo form_error('bank_name', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="bank_branch_name">Branch Name</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_branch_name', 'placeholder'=>'Bank Branch Name', 'class'=>'form-control']);?>
        <?php echo form_error('bank_branch_name', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <label for="bank_branch_code">Bank Branch Code</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'bank_branch_code', 'placeholder'=>'Bank Branch Code', 'class'=>'form-control']);?>
        <small id="branch_code" class="form-text text-muted">It should be 3 digits number code.</small>
        <?php echo form_error('bank_branch_code', '<div class="text-danger">', '</div>');?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-5">
        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-warning']);?>
        <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-success']);?>
      </div>
    </div>
  </fieldset>
  <?php echo form_close();?>
<!-- form -->
</div>

<?php include_once('footer.php'); ?>