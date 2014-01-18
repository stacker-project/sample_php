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

       $host_connection = mysql_connect(DATABASE_HOST.":".DATABASE_PORT, DATABASE_USER, DATABASE_PASSWORD);

       if (!$host_connection) {
         die('Unable to connect to database host');
       }

       echo "Connected to database host<br><br>";

       $db_connection = mysql_select_db(DATABASE_NAME,$host_connection);

       if (!$db_connection) {
         die('User credentials cannot use the database');
       }

       echo "Database user credentials are working<br><br>";

       mysql_close($host_connection);
      ?>
    </p>
  </body>
</html>
