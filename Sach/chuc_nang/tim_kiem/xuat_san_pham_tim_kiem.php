<?php
    
    include("connect.php");
    
    if(trim($_GET['tu_khoa'])!=""){
        $m=explode(" ",$_GET['tu_khoa']);  
        
        $chuoi_tim_sql="";
        for($i=0;$i<count($m);$i++)
        {
            $tu=trim($m[$i]);
            if($tu!="")
            {
                $chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
            }
        }

        $m_2=explode(" ",$chuoi_tim_sql);  
        $chuoi_tim_sql_2="";
        for($i=0;$i<count($m_2)-1;$i++)
        {
            $chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
        }

        $so_du_lieu=15;
        $tv="select count(*) from san_pham  where $chuoi_tim_sql_2";
        $tv_1=mysqli_query($conn,$tv);
        // if (!$tv_1) {
        //     printf("Error: %s\n", "Bạn không thể nhập từ khóa . Xin lỗi bạn ! (Em đã sửa lỗi thầy giao rồi ạ )");
        //     exit();
        // }
        //$tv_2=$conn->prepare($tv);
        //$tv_1->execute();
        $tv_2=mysqli_fetch_array($tv_1);
        
        $so_trang=ceil($tv_2[0]/$so_du_lieu);
       
      
        if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
      
        $tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";

        $tv_1=mysqli_query($conn,$tv);
        //$tv_1=$conn->prepare($tv);
        //$tv_1->execute();
        echo "<table>";
       
        
        
        while($tv_2=mysqli_fetch_array($tv_1))
        {
            echo "<tr>";
                for($i=1;$i<=3;$i++)
                {
                    echo "<td width='150px' ></td>";
                    echo "<td align='center' width='215px' valign='top' >";
                        if($tv_2!=false)
                        {
                            $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
                            $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
                            $gia=$tv_2['gia'];
                            $gia=number_format($gia,0,",",".");
                            //sort($gia);
                            echo "<a href='$link_chi_tiet' >";
                                echo "<img src='$link_anh' width='230px' height='270px' style='margin-right:10px; margin-left:10px' >";
                            echo "</a>";
                            echo "<br>";
                            echo "<br>";
                            echo "<a href='$link_chi_tiet' >";
                                echo $tv_2['ten'];
                            echo "</a>";
                            echo "<div style='margin-top:5px' >";                       
                            echo $gia;
                            echo "</div>";
                            echo "<br>";
                        }
                        else
                        {
                            
                                echo "&nbsp;";
                        }
                    echo "</td>";
                    if($i!=3)
                    {
                        $tv_2=mysqli_fetch_array($tv_1);
                    }
                }
            echo "</tr>";
        }
       
        echo "<tr>";
        echo "<td width='150px' ></td>";
            echo "<td colspan='3' align='center' >";
                
                echo "<div class='phan_trang' >";
                echo "<td width='150px' > </td>";
                    for($i=2;$i<=$so_trang;$i++)
                    {
                        //isset($_GET['tu_khoa'])?(string)(int)$_GET['tu_khoa']:false;
                        $link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
                        echo "<a href='$link' >";
                            echo $i;
                            echo "";
                        echo "</a>";
                    }
                echo "</div>";
            echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
    else
    {
    echo "Bạn chưa nhập từ khóa";
    }


   
?>