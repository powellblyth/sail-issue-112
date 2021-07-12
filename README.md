`composer install`
`composer require  brianium/paratest`
`sail up -d`
`sail test --parallel`
```
.E                                                                  2 / 2 (100%)

Time: 00:01.371, Memory: 20.00 MB

There was 1 error:

1) Tests\Feature\ExampleTest::test_example
Illuminate\Database\QueryException: SQLSTATE[42000]: Syntax error or access violation: 1044 Access denied for user 'sail'@'%' to database 'sail_issue_112_test_2' (SQL: drop database if exists `sail_issue_112_test_2`)

/var/www/html/vendor/laravel/framework/src/Illuminate/Database/Connection.php:692
/var/www/html/vendor/laravel/framework/src/Illuminate/Database/Connection.php:652
/var/www/html/vendor/laravel/framework/src/Illuminate/Database/Connection.php:486
/var/www/html/vendor/laravel/framework/src/Illuminate/Database/Schema/MySqlBuilder.php:29
/var/www/html/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php:261
/var/www/html/vendor/laravel/framework/src/Illuminate/Testing/Concerns/TestDatabases.php:83
/var/www/html/vendor/laravel/framework/src/Illuminate/Testing/Concerns/TestDatabases.php:120
/var/www/html/vendor/laravel/framework/src/Illuminate/Testing/Concerns/TestDatabases.php:85
/var/www/html/vendor/laravel/framework/src/Illuminate/Testing/Concerns/TestDatabases.php:50
```
