htmlとwordpress制作初期データ
======================
個人的に使用する制作初期データをちまちまとまとめます。  
またこのデータは自由に使用して頂いて構いません。  
普段はそこまでコードを書かないので、変な記述が多いと思います。

## 最初に行う
こちらのリポジトリをダウンロード後に  
'npm install'  
を実行  
  
その後  
'gulp'か'gulp url'  
を実行。  
更新されるファイルはgulpfile.jsを参照してください。  
'gulp url'はgulpfile.jsに記述したURLを経由してbrowser-syncします。  
FTPでアップロードしながら作業してる人はこっちを使用するといいです。  
普通はローカルに仮想環境作成して作業すると思うけど、どーしてもそうしないといけない事情があれば使ってください。