# adapter

既に提供されているものと必要なものの間のずれを埋めるようなパターン。Wrapper という言葉のほうが馴染みがあるかもしれない。

アダプターパターンの実装は2パターンある。

- クラスによる Adapter パターン (継承)
- インスタンスによるAdapter パターン (移譲)

### memo
- 十分にテストされたコードを変更するのではなくかぶせるだけで済む
- バージョンアップのときにアダプターをかぶせる
