<?php

echo "BEGIN TESTS<br><br>";

echo "testing postgres...<br><br>";

$connStr = "host=dbpostgres port=5432 dbname=a user=postgres";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "select * from test");
var_dump(pg_fetch_all($result));

echo "<br><br>";
echo "testing environment variables...<br><br>";

echo "MY_ENV: " . getenv('MY_ENV');

echo "<br><br>";
echo "testing short_open_tags...<br><br>";

?>

<p>Open tags here: <? echo "It's working!!!" ?></p>

<?php

echo "END TESTS<br><br>";

?>

