# docker php örnekleri
docker ile php, mysql (mariadb), mongodb, redis kullanımı

## gereksinimler
windows için şu an en sorunsuz dağıtım docker toolbox:

https://github.com/docker/toolbox/releases

docker desktop için hyper-v vs. gerekiyor. toolbox ise virtualbox üzerinden çalışıyor.

composer kurulu olmalı. değilse docker php-fpm e bash ile login olup composer install oradan da yapılabilir.

## kullanım

docker-toolbox kuruluysa şöyle kullanabiliriz.

```
git clone https://github.com/cnra/docker-php
cd docker-php
composer install
docker-compose up
```

**not:** projenin c:\users\user altında olduğundan emin ol. docker toolbox'ın varsayılan virtualbox paylaşımlı klasörleri farklı yerleri görmüyor. masaüstü, belgelerim vs. üzerinden çalışılabilir. 

ardından 8080 portu üzerinden bağlabiliriz

http://192.168.99.100:8080

bağlantı sağlanamazsa docker-machine ip'si farklı olabilir bunu öğrenmek için

```
docker-machine ip
```


### sorun çözüm

docker-machine çalıştığından emin ol:

```
docker-machine start
```
