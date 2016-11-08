
<style>
    .col-md-3 {
        max-height: 360px;

    }
    p {
        height: 100px;
        overflow: hidden;
        text-align: center;
        font-size: 14px;
    }
    .panel-heading {
        height: 42px;
        padding: 0;
        text-align: center;
        font-size: 14px;
        margin: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .panel-body {
        height: 300px;
    }
    .text-center {
        height: 50px;
    }
</style>
<!--              ///////////////////   /////       / header/////////////////////-->
<header>
    <div class="container">
        <div id="header" class="row">
            <div class="col-md-2 text-center">
                <p>Website name </p>
            </div>
            <div class="col-md-2 pull-right text-center">

                <div class="nav navbar-nav navbar-right">

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <form action="<?php echo site_url('User/login');?>" method="post" name="form" id="form">
                                <div class="form-group">
                                    <label for="login">Email:</label>
                                    <input type="text" class="form-control" id="login" value="<?php set_value('login')?>"   title="login" name="login" placeholder="Enter email"><?= form_error('login') ?>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password"  placeholder="Enter password">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                                <button type="submit" name="add" class="btn btn-default">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</header>

<!--         /////////// search////////////////////-->
<section>
    <div class="container">
        <div id="search" class="row">
            <div class="col-md-12 text-center">


                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control" id="sel1">
                            <option>category</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="what du you want ti find?">
                    </div>
                    <button type="submit" class="btn btn-default">Searches</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!--                                 /////////// section contact//////////////-->
<section id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-offset-1 col-md-10">
                <?php foreach ($organisation as $item ): ?>
                    <div class="col-md-3">
                        <div class="panel panel-primary">

                            <div class="panel-heading panel panel-primary"><?=$item['name']; ?></div>
                            <div class="panel-body">
                                <img src="<?php echo base_url();?>img/Logo_360_decor.jpg" class="img-responsive" alt="logo">
                                <p><?= $item['description']; ?></p>

                                <button type="button" class="btn btn-primary">Like</button>
                                <button type="button" class="btn btn-default">Hide</button>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
            </div>
        </div>


    </div>
</section>


