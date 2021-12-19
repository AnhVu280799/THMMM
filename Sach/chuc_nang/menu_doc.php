<?php
    include("connect.php");
    $tv="select * from menu_doc order by id";
    $tv_1=mysqli_query($conn,$tv);
    echo "<div class='menu_doc' >";
    echo "<h3>Danh mục sản phẩm</h3>";
    echo "<ul>";
    while($tv_2=mysqli_fetch_array($tv_1))
    {
        echo "<li>";
        $link="?thamso=xuat_san_pham&id=".$tv_2['id'];
        echo "<a href='$link'>";
            echo $tv_2['ten'];
        echo "</a>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</div>";
?>