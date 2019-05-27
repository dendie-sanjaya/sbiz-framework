<?php include 'indexRead.php' ?>

<?php ob_start(); ?>

<h1> <?php echo language::get('sample-app-guestbook','title'); ?> </h1>
<hr />

<button onclick="window.location='<?php echo $globalUrl ?>app-sample/guestbook/add'"><?php echo language::get('sample-app-guestbook','add'); ?></button>
<hr />

<?php if(mysqli_num_rows($data) < 1) : ?>
    <center> Belum Ada Pesan </center>
<?php else : ?>  
    <table width="100%" border="1">
        <tr>
            <th><?php echo language::get('sample-app-guestbook','no'); ?></th>
            <th><?php echo language::get('sample-app-guestbook','name'); ?></th>
            <th><?php echo language::get('sample-app-guestbook','message'); ?></th>
            <th> 
            </th>    
        </tr>
        <?php $i=1 ?>        
        <?php foreach($data as $val): ?>   
            <tr>
                <td align="center"><?php echo $i ?></td>
                <td style="padding-left: 10px"><?php echo $val['name'] ?></td>
                <td style="padding-left: 10px"><?php echo $val['message'] ?></td>
                <td align="center">
                    <a href="<?php echo $globalUrl ?>app-sample/guestbook/edit?id=<?php echo $val['id'] ?>">
                        <?php echo language::get('sample-app-guestbook','edit'); ?>
                    </a>
                    &nbsp;
                    <a href="<?php echo $globalUrl ?>app-sample/guestbook/delete?id=<?php echo $val['id'] ?>">
                        <?php echo language::get('sample-app-guestbook','delete'); ?>
                    </a>
                </td>
            </tr>
        <?php $i++ ?>                    
        <?php endforeach; ?>        
    </table>    
<?php endif; ?>



<?php $templateContent = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php include_once 'app-sample/template/main.php' ?>
