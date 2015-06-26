# Paiza試験用テストツール
[https://paiza.jp](https://paiza.jp)のコーディングスキルチェック用テストツール

## 使い方

```
./paiza [command]
```

## コマンド
コマンド名 | 役割
:-:|:-:
new | テストケースを削除し、新しいテストケースを作成します。
add | インクリメントされたテストケースを作成します。
run | テストケースを全て実行・評価します。
clean | テストケースを全て削除します。

## テスト環境について
```
cat .language

# スクリプト実行ファイルのパス
language=$(which php)

# テスト用スクリプトのパス
target=app.php.example
```
