<?php
include_once 'setting.php';
include 'front/admin_header.php';
?>
<div style="display:flex">
    <div style="border:1px solid #333; height:500px; width:30%">
    </div>
    <?
    if (!empty($_GET['goto'])) {
        $goto = $_GET['goto'];
    } else {
        $goto = 'admin';
    }
    $file = 'back/' . $goto . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        include 'back/admin.php';
    }
    ?>
    <div style="border:1px solid #333; height:500px;width:30%">

    </div>
</div>
<?
include("front/footer.php");
?>