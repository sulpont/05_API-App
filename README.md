
# 地震の最新情報が分かるアプリ
> 通知機能やグラフ表示など、アップデートを予定しています。

### 1. ディスクリプション・使い方

- P2P地震情報からリアルタイムに地震情報（直近50件）を取得し、最新のデータは日本地図にプロットされる。ホバーすると詳細表示される。
- 履歴はtableに追加・表示される。
- 15秒ごとに自動更新されます。

### 2. 今回頑張ったこと・できたこと・機能

- LeafletとOpenStreetMapで基本となる地図を作成し、47都道府県のポリゴンデータを乗せ、日本地図を実装した。
- 地震情報のオブジェクトから、必要な情報だけtableへ表示させた。 -> 配列の構造を理解するのにやや時間を要した...
- テーブルのカラムはHTML/CSSのみで固定化できた。

### 3-1. 難しかったこと

- 画面をリロードした際、テーブルへ地震情報がうまく反映されない時があり、一通りの非同期処理のあと、テーブル表示をsetTimeoutメソッドで500ミリ秒遅らせることで暫定対応。

### 3-2. 実装したかったけどできなかったこと

- **Google Charts API**を用いて"日付別の地震発生回数（棒グラフ）"などを作成し、可視化したかった。
- **Notifications API**を用いて、地震が発生するたびにWebプッシュ通知を送りたかった。->通知リクエストまでは実装完了。

### 4. 前回の課題からの成長！

- 並行して複数の処理を行うようになり、処理の順番やスコープに目を向けることが出来た。
- これらの非同期処理を思い通りに行うため、Promiseやasync/await、コールバック関数などを少しずつ取り入れた。

### 5. 参考にしたサイト等

- [Leaflet](https://leafletjs.com/download.html) -
- [OpenStreetMap](https://openstreetmap.jp/node/762) -
- [47都道府県のポリゴンデータ geojson](https://japonyol.net/editor/article/47-prefectures-geojson.html) -
- [P2P地震情報](https://www.p2pquake.net/develop/json_api_v2/#/P2P%E5%9C%B0%E9%9C%87%E6%83%85%E5%A0%B1%20API/get_history
) - 
- [地震情報 - Yahoo!天気・災害](https://typhoon.yahoo.co.jp/weather/jp/earthquake/) - 
- [stack overflow](https://stackoverflow.com/questions/46101450/explanation-of-leaflet-custom-icon-latlng-vs-xy-coordinates - LeafletカスタムアイコンのLatLng/XY座標の分かりやすい説明
)- 
- [stack overflow](https://stackoverflow.com/questions/67038441/notification-requireinteraction-setting-broken-in-chrome) - インスタンスプロパティ"Notification.requireInteraction"のMacの挙動について
