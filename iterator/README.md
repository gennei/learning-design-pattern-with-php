# iterator

```php
$a = [1,2,3];
for(i=0; i < count($a); i++) {
  echo $a[i];
}
```

繰り返し処理をするときに上記のようなコードを書くことが繰り返しある。この変数 `i` の動きを抽象化し一般化したものを *iterator pattern* という

### サンプルプログラム
本棚のなかにある本を順番に表示するプログラム。


### memo
- 最近の言語では `foreach`, `map`, などが存在するので自分で実装する必要がなくなったように思える。