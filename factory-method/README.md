# factory method

インスタンス生成をスーパークラスに定義する。

### memo
- namespace framework と idcard の実装に依存がない
- DBの接続のためのクラス設計に役立ちそう。接続のインスタンスの作り方が定義され、接続の実装はサブクラスに任せる。
