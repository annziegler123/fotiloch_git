<?php
require_once('fotiloch_data.php');
  function filter_data($input)
    {
      $db = get_db_connection();
      $input = strip_tags($input); //php und html tags werden maskiert - es wird also davon befreit//
      $input = trim($input); //Leerzeichen am Anfang und Schluss werden weggenommen//
      $input = mysqli_real_escape_string($db, $input); //Datenbank filtert aus diesem String alle Datenbankbefehle heraus//
      mysqli_close($db);
      return $input;
    }





?>
