<div align="left" style="width:350px;  border:1px solid #333; margin:auto">
    <?php
    //我是註解
    echo "註解方式和 C 相同 <br>";
    echo "變數統一用 $ 開頭 <br> 型態會自動偵測 <br>";
    echo "運算規則和 C 一樣 <br>";
    $name = "jeffery";
    $AppleQuantity = 10;
    $ApplePrice = 40;
    $total = $AppleQuantity * $ApplePrice;
    echo 'Ex :<br>';
    echo '$name = "jeffery";<br>';
    echo '$AppleQuantity = 10;<br>';
    echo '$ApplePrice = 40;<br>';
    echo '$total = $AppleQuantity * $ApplePrice;<br>';
    echo 'echo "{$name} need to spend {$total} dollars";<br>';
    echo '輸出 : ';
    echo "{$name} need to spend {$total} dollars ";
    ?>
</div>