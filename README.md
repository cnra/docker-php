# docker php örnekleri
docker ile php, mysql (mariadb), mongodb, redis kullanımı

## gereksinimler
windows için şu an en sorunsuz dağıtım docker toolbox:

https://github.com/docker/toolbox/releases

docker desktop için hyper-v vs. gerekiyor. toolbox ise virtualbox üzerinden çalışıyor.

## kullanım

docker-toolbox kuruluysa şöyle kullanabiliriz.

```
git clone https://github.com/cnra/docker-php
cd docker-php
docker-compose up
```

**not:** projenin c:\users\user altında olduğundan emin ol. docker toolbox'ın varsayılan virtualbox paylaşımlı klasörleri farklı yerleri görmüyor. masaüstü, belgelerim vs. üzerinden çalışılabilir. 


### sorun çözüm

docker-machine çalıştığından emin ol:

```
docker-machine start
```
