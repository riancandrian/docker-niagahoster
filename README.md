# Installation

Halo tim Niagahoster,
Di arcvive ini tedapat 2 direcory yang masing-masing berisikan Dockerfile sesuai dengan bahan test yang diminta.

## Landingpage
Dalam pengerjaan website ini saya menggunakan framework Codeigniter. Untuk menjalankannya langsung anda bisa copy kan seluruh file project ini ke webserver anda.
Selain itu anda juga bisa menjalankannya via Dockerfile. Dengan menjalankan perintah berikut di terminal anda :
```
$ docker build --tag niagahoster-landingpage:1.0 .
$ docker container create --name niagahoster-landingpage -p 8080:80 niagahoster-landingpage:1.0
$ docker container start niagahoster-landingpage
```
Jika tidak terdapat error, anda bisa melanjutkan dengan mengaksesnya melalui browser dengan url **localhost:8080**

## Boxbilling
Untuk menjalankan Boxbilling ada 2 cara, menggunakan Dockerfile dan DockerCompose. Untuk menjalankan dengan menggunakan Dockerfile :
1. Pastikan anda sudah mempunyai container mariadb/mysql dengan status **started** dan sudah dikonfigurasi user, passwordnya.
2. Build Dockerfile dengan menjalankan perintah berikut:
```
$ docker build --tag boxbilling:3.0 .
$ docker container create --name boxbilling -p 8004:80 -e DB_HOST=[nama container database] -e DB_NAME=boxbilling -e MYSQL_ROOT_PASSWORD=[password root] -e DB_USER=root -e DB_PASS=[password root] boxbilling:3.0 
```
3. Gabungkan kedua container tadi kedalam satu network agar bisa saling berkomunikasi
```
$ docker network create -d bridge box_network
$ docker network connect box_network boxbilling
$ docker network connect box_network [mariadb/mysql container name]
```
4. Jalankan container boxbilling
```
$ docker container start boxbilling
```
5. Import Database
Selanjutnya import database seeder. Silahkan buka browser, akses url :
**localhost:8004/boxbilling/import_db.php**
6. Akses Boxbilling
**localhost:8004/boxbilling**

Untuk credintial Boxbilling
- Username : admin@niagahoster.com
- Passowrd : admin

## Boxbilling via DockerCompose
Docker compose ini sudah include : boxbilling, database app, landingpage
1. Pull repository git
```
$ git clone https://github.com/riancandrian/docker-niagahoster.git
```
2. Run Dokcer Compose
```
$ cd docker-niagahoster
$ docker-compose up -d
```
3. Selanjutnya import database, dengan cara mengakses URL **localhost:8004/boxbilling/import_db.php** pada browser anda.
