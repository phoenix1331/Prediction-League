
<div id="jumbo">
  <div class="container">


  </div>
</div>

<div class="container center">

     <?php 
        $form = array(
          'username' => array(
              'name' => 'username',
              'id' => 'username',
              'value' => ''),
          'password' => array(
              'name' => 'password',
              'id' => 'password',
              'value' => '')
        )
    ?>
      <p>
        <?php echo $message; ?>
        <?php echo form_open('login/check') ?>
        <label for="username">Username <span class="required">*</span></label>
        <?php echo form_input($form['username']); ?>
        <label for="password">Password <span class="required">*</span></label>
        <?php echo form_input($form['password']); ?>
        <?php echo form_submit(array('name'=>'submit'), 'Submit'); ?>
        <?php echo form_close(); ?>
</p>
</div>
