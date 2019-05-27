  <?php ob_start(); ?>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold"><span style="font-size: 20px">Welcome to</span> <br />SBiZ Framework</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">
            SBiZ framework is the MVC PHP Framework, SBiZ Framework is a Powerful framework that is very fast and very easy to use. You can easily turn this framework become a new mvc php framework
          </p>
  
           <a class="btn btn-primary btn-xl js-scroll-trigger" href="http://dendieisme.blogspot.com/2019/05/sbiz-framework.html">Documentation</a>
           <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo $globalUrl ?>app-sample/guestbook/index">Sample App (Guest  Book)</a><br /><br />
          <img src="app-welcome/assets/img/sbiz-framework.png" width="300px" />
        </div>
      </div>
    </div>
  </header>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - SBiZ Framework</div>
    </div>
  </footer>

<?php $templateContent = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php include_once 'app-welcome/template/main.php' ?>
