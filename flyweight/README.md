# flytweight
毎回インスタンスを作るのではなく同一オブジェクトで問題無い場合は一度作ったものを使いまわす

### memo
- 1つ変更すると全部変更してしまうので使い所を見分ける必要がある
- メモリ以外にもファイルハンドラやウインドハンドラなどもリソースが限られているので使いまわすことを考える
