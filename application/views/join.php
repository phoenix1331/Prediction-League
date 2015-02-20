<div class="titlebar">
  <div class="container">
    <h1><?php echo $title; ?></h1>
  </div>
</div>
<div class="container main">

     <?php 
        if(!empty($message)){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <?php echo $message; ?>
          </div>
    <?php } ?>

        <?php echo form_open('login/check',array('class'=>'form-control')) ?>
        <?php echo form_input($form['username']); ?>
        <?php echo form_input($form['password']); ?>
        <?php echo form_input($form['passwordAgain']); ?>
        <?php echo form_input($form['email']); ?>
        <?php echo form_submit(array('name'=>'submit', 'class'=>'submit'), 'Submit'); ?>
        <?php echo form_close(); ?>
      </p>
</div>
