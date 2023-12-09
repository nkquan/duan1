<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <?php require_once 'components/css.php' ?>

</head>

<body>
    <h2>Bình luận</h2>
    
    <?php
    foreach ($comment as $comments) {
        if (isset($_GET['idsp'])) { 
            $id_pro=$_GET['idsp'];
        }
    ?>
        <p><label for="name"><?=$comments['username'] ?></label></p>
        <input type="hidden" name="idsp" value="<?=$id_pro ?>">
        <table cellspacing=0 >
            <tr>
                <td><?=$comments['content'] ?></td>
                <td class="text-muted"><?=$comments['date_cmt']?></td>
            </tr>
        </table>
        <hr>
    <?php }?>
    <?php
    if (isset($_SESSION['user'])) {
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="hidden" name="idsp">
            <div class="submit-review">


                <p><label for="review"></label> <textarea name="content" id="" cols="5" rows="10"></textarea></p>
                <p><input type="submit" value="Submit" name="btn-submit"></p>
            </div>
        </form>
    <?php
    } else {
    ?>
        <h4 class="text-danger">Vui lòng Đăng nhập để bình luận!</h4>
    <?php } ?>


</body>

</html>