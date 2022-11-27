<?php
echo "PHP Connected";
pg_connect("host=127.0.0.1 user=postgres password=postgres dbname=dbdemo port=5432");
$q=pg_query("insert into tbldemo(uname)values('randomvalue')");
?>
