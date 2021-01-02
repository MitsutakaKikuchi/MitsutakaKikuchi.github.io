<!DOCTYPE html>
<html lang="en">
<head>
    <title>お稽古場のご案内</title>
    <?php include("inc/head.php"); ?>
  </head>


  <body>
    <div id="wrapper">
      <!-- ヘッダーここから -->      
       <?php include("inc/header.php"); ?>
       
      <div class="header-pad">
      <!-- メイン画像 -->

      <div id="subimage">
        <h2>お稽古場のご案内</h2>
      </div>
      <container class="news-container">
        <!-- 以下、稽古場情報 -->
        <div id="news" class="box-shadow">

        <?php include("inc/keiko_info.php"); ?>


        </div>

        <!-- サブメニュー -->
        <div id="submenu">
          <ul>
            <li class="box-shadow">
              <a class="subcontents sensu" href="about.php"
                >直派分家若柳流とは</a
              >
            </li>
            <!-- <li class="box-shadow"><a class="subcontents keiko" href="info.php">お稽古場のご案内</a></li> -->
            <li class="box-shadow">
              <a
                class="subcontents senjukai"
                href="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126"
                >活動の様子</a
              >
            </li>
            <li class="box-shadow">
              <a class="subcontents contact" href="contact.php">お稽古をご希望の方</a>
            </li>
          </ul>
          
        </div>

      </container>
    </div>
  </div>


    <!-- フッター -->

  </body>
</html>
