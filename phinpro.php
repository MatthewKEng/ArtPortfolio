<html>
  <head>
    <style type="text/css">
      h1,p {
        text-align: center;
      }
      body {
        background-color: #b3ffd9;
      }
      h1 {
        font-size: 400%;
        background-color: #b3ffd9;
        font-family: Carton Six;
      }
      p {
        font-size: 20px;
        background-color: #b3ffd9;
      }
      input[type=submit] {
        background-color: #00FFFF;
        font-size: 15px;
      }
      #back {
        display: flex;
        justify-content: center;
        margin-top: 80px;
      }
      .button {
        font-size: 20px;
        color: grey;
        text-align: center;
      }

    </style>
  </head>

  <body>

    <?php

    /*
    multiline
    comment
    */

    //single line comment

    # comment, as well

    echo "<H1>Phineas' Funny Fables</H1></br>";
    ?>
    <img src="https://lh3.googleusercontent.com/zKhRsIDCGjsHRv-qbUIPu20WaZNP6hDuqXwEqNx-bHSjMLCIsMlDbpJw8wdgL22ciypP1AxtEpa9iIHQi9mCOnHiVMNpBDurTFlBPlNGSPWPaTKAOsS7VyR8119mz-z8NpX4tZKyEs-WHWNtQZal09TiMwN7yabOGQjnnmBGHnN7FonnSG7-_ikk_Vs1Kf_GWGxG77ZWmz215Wghi5OJGIGonyzwO5Qkzw41l4ilQcCPvNYvxC5Y-BVYDr6IijJhm7LIYPmbDBixCdelb0HP1Lev9ikIgSnCibRjOMBckn_YciDowAo__VIQ_zsWpJMptlRcVP2CKp7q3k9n9MpF6f9ePHi8hVl7Z8TGpNkOIzkxksaHIkGpJ_rYD9l4VyKkRGWONfr1Y5_TzeONf1Rr_48cV1wiSiuqVfVGXt6H-swlsIj4zaU2_T3BAAUBkY_m_bhFDea-svH2hSCYB7Nvmb1vzfBG5Nni4sIvPUBYsePsbJQgJJyAtyKjc3LvgJpwfyGFE-ja-Fm21VDXncY0zv2mqLot9jtRs3E9AzIw8iYGet7KT2e74WKabvORltWKV62jbOvDNA6lF9bgI66_kKfZBPSkyya_afyruErTtVWAQD9-=w916-h873-no" alt="Phineas" style="width:auto;height:200px;display:block;margin:auto;">;
    <?php
    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adjective = $_POST['adjective'];

    $string = <<<EOD
    The other day, I took my $noun for a walk.</br>
    He loves to $verb.</br> He is very
    $adjective that way!
EOD;

    echo "<p>".$string."</p>";
    echo "</br>";
    echo "<p>Ha ha HA HA!!!</p>";

    ?>
    <form align="center" method="link" action="infoform.html">
    <input type="submit" value="Do It AGAIN!!!">
    </form>

    <div id="back">
      <a href="http://localhost/PhinPro/main.php" class="button">Back to Main</a>
    </div>

  </body>

</html>
