
singleusersadaaaaaaaaaaaaaaaaaaaaaaaaaa
<?php if($items) { ?>
    <?php foreach ($items as $item ):?>
        <p class="cong">CONGRATULATION YOU HAVE SUCCESSFULLY LOGIN</p>
        <p class="cong">Your are login in <?= $item['username']?></p>
    <?php endforeach  ?>
<?php } ?>
<?php if(!$items) { ?>
    <p class="cong">You Have enter incorrect Login or password please go back and reenter your login and password</p>
    <a class = "link" href="<?php echo base_url();?>/user">BACK IN HOME PAGE? </a>
<?php } ?>
