<html>
  <head>
    <style type="text/css">
      h1,p {
        text-align: center;
      }
      h1 {
        font-size: 400%;
      }
      p {
        font-size: 20px;
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
    //<img src="https://lh3.googleusercontent.com/zKhRsIDCGjsHRv-qbUIPu20WaZNP6hDuqXwEqNx-bHSjMLCIsMlDbpJw8wdgL22ciypP1AxtEpa9iIHQi9mCOnHiVMNpBDurTFlBPlNGSPWPaTKAOsS7VyR8119mz-z8NpX4tZKyEs-WHWNtQZal09TiMwN7yabOGQjnnmBGHnN7FonnSG7-_ikk_Vs1Kf_GWGxG77ZWmz215Wghi5OJGIGonyzwO5Qkzw41l4ilQcCPvNYvxC5Y-BVYDr6IijJhm7LIYPmbDBixCdelb0HP1Lev9ikIgSnCibRjOMBckn_YciDowAo__VIQ_zsWpJMptlRcVP2CKp7q3k9n9MpF6f9ePHi8hVl7Z8TGpNkOIzkxksaHIkGpJ_rYD9l4VyKkRGWONfr1Y5_TzeONf1Rr_48cV1wiSiuqVfVGXt6H-swlsIj4zaU2_T3BAAUBkY_m_bhFDea-svH2hSCYB7Nvmb1vzfBG5Nni4sIvPUBYsePsbJQgJJyAtyKjc3LvgJpwfyGFE-ja-Fm21VDXncY0zv2mqLot9jtRs3E9AzIw8iYGet7KT2e74WKabvORltWKV62jbOvDNA6lF9bgI66_kKfZBPSkyya_afyruErTtVWAQD9-=w916-h873-no" alt="Phineas" style="width:auto;height:200px;display:block;margin:auto;">;

    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adjective = $_POST['adjective'];

    $string = <<<EOD
    The other day, I took my $noun for a walk.
    He loves to $verb. He is very
    $adjective that way!
EOD;

    echo "<p>".$string."</p>";
    echo "</br>";
    echo "<p>Ha ha HA HA!!!</p>";

/*

    date_default_timezone_set('America/Chicago');

    echo date ('h:i a, l F jS Y');

*/

    ?>

  </body>

</html>
