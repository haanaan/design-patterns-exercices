<?php
require('../vendor/autoload.php');

use App\MySQLQueryBuilder;

$query1 = (new MySQLQueryBuilder())->table('users')
    ->select(['id', 'name', 'email'])
    ->where('age', '>', 18)
    ->where('status', '=', 'active')
    ->build();

echo "Test 1 - SELECT avec deux WHERE : <br>";
echo $query1 . "<br><br>";

$query2 = (new MySQLQueryBuilder())
    ->table('products')
    ->select(['*'])
    ->build();

echo "Test 2 - SELECT * sans WHERE : <br>";
echo $query2 . "<br><br>";

$query3 = (new MySQLQueryBuilder())
    ->table('orders')
    ->select(['id', 'total'])
    ->where('status', '=', 'pending')
    ->build();
echo "Test 3 - SELECT avec un WHERE : <br>";
echo $query3 . "<br><br>";

$query4 = (new MySQLQueryBuilder())
    ->table('employees')
    ->select(['name', 'position'])
    ->where('department', '=', 'sales')
    ->where('salary', '>', 50000)
    ->where('status', '=', 'active')
    ->build();
echo "Test 4 - SELECT avec trois WHERE : <br>";
echo $query4 . "<br><br>";
