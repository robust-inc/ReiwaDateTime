## インストール

> user $ composer require robust-inc/csv2Sql

## サンプル実行(システム日付のローカライズ)
> $ ./vendor/bin/now
> $ ./vendor/bin/now 2019-05-01

## 使い方

```php
<?php
$d = new RobustInc\ReiwaDateTime\ReiwaDateTime('2019-5-1');
echo $d->localize("只今 Y年m月d日 です。") . PHP_EOL;
//出力 只今 令和元年05月01日 です。
```
