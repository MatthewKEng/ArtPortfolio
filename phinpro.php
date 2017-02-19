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
