

<div id="container">
    <a href="<?php echo site_url('user') ?>">Home</a>
    <a href="<?php echo site_url('user/users') ?>">All users</a>
    <p class="footer">Single users</p>
    <ul>
        <li><?php echo $user->email;?></li>
    </ul>

</div>
