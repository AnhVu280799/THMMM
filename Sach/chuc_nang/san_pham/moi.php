
<center>
    <div class="moi">
        <?php
            include("connect.php");
            $tv="select id,ten,hinh_anh from san_pham order by id desc limit 0,3";
            $tv_1=mysqli_query($conn,$tv);
            echo "<div class='moi' >";
            echo "<ul style='margin-top:400px'>";
            while($tv_2=mysqli_fetch_array($tv_1))
            {
                echo "<li>";
                $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
                $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
                echo "<a href='$link_chi_tiet' >";
                    echo "<img src='$link_anh' width='150px' height='200px' style='margin-right:20px'>";
                echo "</a>";
                echo "<br><br>";
                echo $tv_2['ten'];
                echo "<br>";
                echo "<br>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</div>";
        ?>
    </div>
</center>
