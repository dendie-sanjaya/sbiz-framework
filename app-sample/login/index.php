<?php ob_start(); ?>
    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('<?php echo $config['app']['path'] ?>admin/assets/img/bg/21.jpg');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="<?php echo $config['app']['path'] ?>admin/assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->
                    <h5 class="text-center text-muted font-weight-normal mb-4">Login to Administrator</h5>

					<?php if(isset($_GET['msg'])) : ?>
                        <div class="alert alert-dark-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Login Tidak Berhasil
                        </div>
					<?php endif ?>

                    <!-- Form -->                    
					<form action="<?php echo $globalUrl  ?>/admin/login/signin" method="post">
                        <input type="hidden" name="token" value="<?php echo  $_SESSION['token'] ?>">
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label d-flex justify-content-between align-items-end">
                                <span>Password</span>
                            </label>
                            <input type="password" name="password" class="form-control">
                            <div class="clearfix"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>
                    <!-- [ Form ] End -->
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

<?php $templateContent = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php include_once 'sbiz/template/admin-login.php' ?>
