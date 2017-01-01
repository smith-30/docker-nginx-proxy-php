### .env.default.exampleの設定を変更

### create Model

```
php artisan make:model Models/[Model]
```

### Modelにヘルパー適用

```
php artisan ide-helper:models --dir="Models"
```

### ide-helper生成

```
php artisan ide-helper:generate
```

### php artisan migrate

```
php artisan make:migration create_hoge_table
```

./database/migrations 参照


### php artisan db:seed
./database/seeds 参照  

新たにseederを足す場合  

```
php artisan make:seeder HogeTableSeeder
```

DatabaseSeederに追記

```
$this->call(HogeTableSeeder::class);
```

データ入れ直し
```
php artisan migrate:refresh --seed
```

### マスタ配列

config/const.phpに記述

呼び出し

```
return [
  'name'=> 'COMTOPIA',
];
```


```
Config::get('const.name')
```