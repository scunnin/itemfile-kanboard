How to run units and functional tests?
======================================

[PHPUnit](https://phpunit.de/) is used to run automatic tests on Kanboard.

You can run tests across different databases (Sqlite, Mysql and Postgresql) to be sure that the result is the same everywhere.

Requirements
------------

- Linux/Unix machine
- PHP command line
- PHPUnit installed
- Mysql and Postgresql (optional)

Install the latest version of PHPUnit
-------------------------------------

Simply download the PHPUnit PHAR et copy the file somewhere in your `$PATH`:

```bash
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit
phpunit --version
PHPUnit 4.2.6 by Sebastian Bergmann.
```

Running unit tests
------------------

### Testing with Sqlite

Sqlite tests use a in-memory database, nothing is written on the file system.

The config file is `tests/units.sqlite.xml`.
From your Kanboard directory, run the command `phpunit -c tests/units.sqlite.xml`.

Example:

```bash
phpunit -c tests/units.sqlite.xml

PHPUnit 4.2.6 by Sebastian Bergmann.

Configuration read from /Volumes/Devel/apps/kanboard/tests/units.sqlite.xml

................................................................. 65 / 74 ( 87%)
.........

Time: 9.05 seconds, Memory: 17.75Mb

OK (74 tests, 6145 assertions)
```

**NOTE:** PHPUnit is already included in the Vagrant environment

### Testing with Mysql

You must have Mysql or MariaDb installed on localhost.

By default, those credentials are used:

- Hostname: **localhost**
- Username: **root**
- Password: none
- Database: **kanboard_unit_test**

For each execution the database is dropped and created again.

The config file is `tests/units.mysql.xml`.
From your Kanboard directory, run the command `phpunit -c tests/units.mysql.xml`.

Example:

```bash
phpunit -c tests/units.mysql.xml

PHPUnit 4.2.6 by Sebastian Bergmann.

Configuration read from /Volumes/Devel/apps/kanboard/tests/units.mysql.xml

................................................................. 65 / 74 ( 87%)
.........

Time: 49.77 seconds, Memory: 17.50Mb

OK (74 tests, 6145 assertions)
```

### Testing with Postgresql

You must have Postgresql installed on localhost.

By default, those credentials are used:

- Hostname: **localhost**
- Username: **postgres**
- Password: none
- Database: **kanboard_unit_test**

Be sure to allow the user `postgres` to create and drop databases.
For each execution the database is dropped and created again.

The config file is `tests/units.postgres.xml`.
From your Kanboard directory, run the command `phpunit -c tests/units.postgres.xml`.

Example:

```bash
phpunit -c tests/units.postgres.xml

PHPUnit 4.2.6 by Sebastian Bergmann.

Configuration read from /Volumes/Devel/apps/kanboard/tests/units.postgres.xml

................................................................. 65 / 74 ( 87%)
.........

Time: 52.66 seconds, Memory: 17.50Mb

OK (74 tests, 6145 assertions)
```

Running functionals tests
-------------------------

Actually only the API calls are tested.

Real HTTP calls are made with those tests.
So a local instance of Kanboard is necessary and must listen on `http://localhost:8000`.

Don't forget that all data will be removed/altered by the test suite.
Moreover the script will reset and set a new API key.

1. Start a local instance of Kanboard `php -S 127.0.0.1:8000`
2. Run the test suite from another terminal

The same method as above is used to run tests across different databases:

- Sqlite: `phpunit -c tests/functionals.sqlite.xml`
- Mysql: `phpunit -c tests/functionals.mysql.xml`
- Postgresql: `phpunit -c tests/functionals.postgres.xml`

Example:

```bash
phpunit -c tests/functionals.sqlite.xml

PHPUnit 4.2.6 by Sebastian Bergmann.

Configuration read from /Volumes/Devel/apps/kanboard/tests/functionals.sqlite.xml

..........................................

Time: 1.72 seconds, Memory: 4.25Mb

OK (42 tests, 160 assertions)
```

Continuous Integration with Travis-ci
-------------------------------------

After each commit pushed on the main repository, unit tests are executed across 5 different versions of PHP:

- PHP 7.0
- PHP 5.6
- PHP 5.5
- PHP 5.4
- PHP 5.3

Each version of PHP is tested against the 3 supported database: Sqlite, Mysql and Postgresql.

That mean we run 15 jobs each time the repository is updated. The execution time is around 25 minutes.

The Travis config file `.travis.yml` is located on the root directory of Kanboard.
