# MPager

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

A library to split results into multiple pages

## Install

Via Composer

``` bash
$ composer require mykola/pager
```

## Usage

``` php
$obj = new MPager\DirPager(
  new MPager\PagesList(),
  'photos',
  3,
  2);
echo "<pre>";
print_r($obj->getItems());
echo "</pre>";
echo "<p>$obj</p>";
```

``` php
$obj = new MPager\FilePager(
  new MPager\ItemsRange(),
  'largetextfile.txt');
echo "<pre>";
print_r($obj->getItems());
echo "</pre>";
echo "<p>$obj</p>";
```

``` php
try {
  $pdo = new PDO(
    'mysql:host=localhost;dbname=test',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  $obj = new MPager\PdoPager(
    new MPager\ItemsRange(),
    $pdo,
    'table_name');
  echo "<pre>";
  print_r($obj->getItems());
  echo "</pre>";
  echo "<p>$obj</p>";
}
catch (PDOException $e) {
  echo "Can't connect to database";
}
```

## License

The MIT License (MIT). Please see [License File](https://github.com/dnoegel/php-xdg-base-dir/blob/master/LICENSE) for more information.