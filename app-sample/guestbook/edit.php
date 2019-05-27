<?php include 'editRead.php' ?>

<?php ob_start(); ?>
<h1>
  <?php echo language::get('sample-app-guestbook','title'); ?>
</h1>
<hr />
<form action="<?php echo $globalUrl ?>app-sample/guestbook/editSave" method="post">
  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
  <table>
      <tr>
        <td>
           <b><?php echo language::get('sample-app-guestbook','name'); ?></b><br /> 
           <input type="text" name="name"value="<?php echo $data['name'] ?>" />
           <div style="color:red"><?php echo isset($msgError['name']) ? $msgError['name'] : '' ?></div>
        </td>
      </tr>  
      <tr>
        <td>
           <b><?php echo language::get('sample-app-guestbook','message'); ?></b><br /> 
           <textarea name="message"><?php echo $data['message'] ?></textarea>
           <div style="color:red"><?php echo isset($msgError['message']) ? $msgError['message'] : '' ?></div>
        </td>
      </tr>  
      <tr>
        <td>
            <input type="submit" name="submit" value="<?php echo language::get('sample-app-guestbook','save'); ?>">
            <a href="<?php echo $globalUrl ?>app-sample/guestbook/index">
              <?php echo language::get('sample-app-guestbook','cancel'); ?>              
            </a>
        </td>
      </tr>  
  </table>
</form>


<?php $templateContent = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php include_once 'app-sample/template/main.php' ?>
