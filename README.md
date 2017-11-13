# Php Login 

Login page is created using PHP Data Objects (PDO).


```php
$host = 'localhost';
$db   = 'php_login';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);
```