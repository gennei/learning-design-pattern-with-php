# visitor
データ構造と処理の分離をする。各データを訪問する訪問者を用意して処理は訪問者に持たせる。  
今回のサンプルでは File と Directory のデータ構造と データ構造の中身を表示する 訪問者を用意する。

### memo
- composite pattern ではデータ構造と処理が一致していたが今回はそこが分離された
- composite pattern では新しい処理を追加するときに FIle, Directory を修正する必要がある。visitor ではそれが分離された。
- The Open-Closed Principle というやつだ
