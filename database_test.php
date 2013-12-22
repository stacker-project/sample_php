<html>
  <head>
    <title>
      PHP Sample Application - Database Test
    </title>
  </head>
  <body>
    <h3>PHP Sample Application - Database Test</h3>
    <p>
      <?php
        include 'database_config.php';
       
       $host_connection = mysql_connect(DB_HOST.":".DB_PORT, DB_USER, DB_PASSWORD);

       if (!$host_connection) {
         die('Unable to connect to the database host');
       }

       echo "Connected to the database host";

       $db_connection = mysql_select_db(DB_NAME,$host_connection);

       if (!$db_connection) {
         die('User credentials cannot use the database');
       }

       echo "Database user credentials can use the database";

       mysql_close($host_connection);
      ?>
    </p>
  </body>
</html>
