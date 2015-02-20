<div class="titlebar">
  <div class="container">
   <h1><?php echo $title; ?></h1>
  </div>
</div>
<div class="container main">

     <?php 
        $form = array(
          'username' => array(
              'name' => 'username',
              'id' => 'username',
              'placeholder' => 'Username',
              'autofocus'   => 'autofocus',
              'value' => ''),
          'password' => array(
              'name' => 'password',
              'id' => 'password',
              'placeholder' => 'Password',
              'value' => '')
        )
    ?>
     <?php 
        if(!empty($message)){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <?php echo $message; ?>
          </div>
    <?php } ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
       Sed rerum deleniti, quidem tempora quaerat ad quae porro doloribus molestiae, 
       ducimus nesciunt, sunt dolorum, laboriosam unde modi sint! Repudiandae, excepturi,
        eaque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem accusamus 
        iste dolor debitis ea, earum vero nam quasi fuga error nulla! Harum quis temporibus 
        doloremque cupiditate, quisquam deserunt error accusantium eaque sed recusandae ipsa 
        inventore repellat quo repudiandae eos nisi eius, eligendi assumenda dolore voluptatum 
        itaque cumque architecto commodi? Earum necessitatibus quae, at. Tempore, quia, deserunt! 
        Eos odit itaque doloremque temporibus nesciunt reiciendis. Reiciendis veniam, aliquam fugiat 
        animi inventore sint laboriosam? Quae enim, aliquid fugit quasi ab ullam, quo porro. 
        Blanditiis debitis ducimus fugit voluptatum suscipit possimus, a, nobis iusto dignissimos hic optio excepturi minus, saepe repellendus! Quasi, deleniti, vero!</p>

      <div class="formwrap clearfix">
        <?php echo form_open('login/check',array('class'=>'form-control')) ?>
        <?php echo form_input($form['username']); ?>
        <?php echo form_input($form['password']); ?>
        <?php echo form_submit(array('name'=>'submit', 'class'=>'submit'), 'Submit'); ?>
        <?php echo form_close(); ?>
      </div>
      <p>Forgot my login details</p>
</div>
