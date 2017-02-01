## 設定手順
https://github.com/KoheiMisu/docker-nginx-proxy-php/wiki/%E8%A8%AD%E5%AE%9A%E6%89%8B%E9%A0%86

## nginx-proxy
environmentのVIRTUAL_HOSTを持つコンテナを参照してくれる

./docker-configs/nginx-proxy/certsにssl化したいコンテナの証明書を入れる。  
コモンネームと鍵のファイル名はenvironmentのVIRTUAL_HOSTに合わせる。  

これだけでnginx-proxyが証明書を読み込みssl環境が作れる

こちらが詳しい  
http://qiita.com/sigelinde/items/95c154dc807a4bbc9cf0

## mysql

## phpmyadmin

localhost:8085で接続

## php5.6

- composer  
pretissimo入っているので10倍速でinstallされます

- node v5.12.0
- git

## php7.1

- composer  
pretissimo入っているので10倍速でinstallされます

- node v5.12.0
- git

apacheのドキュメントルートの設定はdocker-compose.yml参照

### ssl設定

```
$ cd docker-configs/nginx-proxy/certs/
$ sudo sh -c "openssl genrsa 2048 > [hostName].key"
$ sudo sh -c "openssl req -new -key [hostName].key > [hostName].csr"

common nameは[hostName]にする

$ sudo sh -c "openssl x509 -days 3650 -req -signkey [hostName].key < [hostName].csr > [hostName].crt"
```
