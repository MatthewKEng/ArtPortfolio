<html>
  <head>
  </head>

  <body>

    <?php

    /*
    multiline
    comment
    */

    //single line comment

    # comment, as well

    echo "<H1>Phineas P Phantastically</H1></br>";

    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adjective = $_POST['adjective'];

    $string = <<<EOD
    The other day, I took my $noun for a walk.
    He loves to $verb. He is very
    $adjective that way!
EOD;

    echo "</br>";
    echo $string;
    echo "</br>";
    echo "</br>";

    date_default_timezone_set('America/Chicago');

    echo date ('h:i a, l F jS Y');




    ?>


  </body>


</html>
