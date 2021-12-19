
<?php
    session_start();
    include("connect.php");
    include("chuc_nang/ham/ham.php");    
    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
    }
    if(isset($_POST['cap_nhat_gio_hang']))
    {
        include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
        trang_truoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán sách</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                <a href="index.php">BookStore<span style="color:blue;">S</span><span style="color: red;">T</span><span style="color: blue;">U</span>
                </a>
            </h1>
        </div>
        <div id="logo">
            <a href="https://www.facebook.com"><img src="hinh_anh/banner/facebook-icon (1).png"></a>
            <a href="https://www.twitter.com"><img src="hinh_anh/banner/twitter-icon.png"></a>
            <a href="https://www.google.com"><img src="hinh_anh/banner/Web-Google-plus-alt-Metro-icon.png"></a>
        </div>
    </header>
    <table width="1000px">
    
        <tr>
            <td colspan="3" title="Hinh banner ve Sach" >
                <?php
                    include("chuc_nang/banner/banner.php"); 
                 ?> 
            </td>
        </tr>
        <tr>
            <td colspan="3">
                
                    <?php
                    include("chuc_nang/menu_ngang.php");
                    ?>
                
            </td>
        </tr>
        <tr>

                <td width="170px" valign="top">
                    
                        <?php
                            include("chuc_nang/menu_doc.php");
                            include("chuc_nang/san_pham/moi.php");
                            include("chuc_nang/quang_cao/trai.php");
                        ?>
                        <a href="https://tiki.vn/">
                            <img src="hinh_anh/banner/QCT.png">
                        </a>
                </td>
            <td width="650px" valign="top">
                <?php
                    include("chuc_nang/dieu_huong.php");
                ?>
            </td>
            <td width="170px" valign="top">
                <?php
                    
                    include("chuc_nang/tim_kiem/vung_tim_kiem.php");
                    include("chuc_nang/gio_hang/vung_gio_hang.php");
                    include("chuc_nang/san_pham/noi_bat.php");
                    include("chuc_nang/quang_cao/phai.php");
                    
                ?>    
               <a href="https://www.samsung.com/vn/">
                    <img src="hinh_anh/banner/QCP.png">
               </a>
            </td>
        </tr>
        
        <tr> 
            <td colspan="3">
                
                <?php
                 include("chuc_nang/footer/footer.php"); 
                 ?>
            </td>
        </tr>
    </table>
</body>
</html>