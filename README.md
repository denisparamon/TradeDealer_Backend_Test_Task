# TradeDealer_Backend_Test_Task
TradeDealer Backend Test Task

## Установка и воспроизведение

1. Клонируйте репозиторий на свой локальный компьютер:  
``` 
git clone git@github.com:denisparamon/TradeDealer_Backend_Test_Task.git
```
2. Запустите следующие команды для создания и запуска контейнеров Docker:  
``` 
docker compose up -d --build
```
3. Убедиться что докер поднялся
```
docker ps
```
4. Установите зависимости проекта
```
composer install
```
5. Перейдите в директорию проекта и запустите встроенный сервер следующим образом:
```
symfony serve --no-tls
```
6. Используйте команду в терминале или Postman чтобы дернуть Апи Ручку 
```
curl http://localhost:8000/api/v1/cars
```

Требования:  
•	Создать API для Frontend команды <span style="color: green;">&#10003;</span>  
•	Получение всего списка авто <span style="color: green;">&#10003;</span>  
•	Получение одного авто с детализированной информацией  <span style="color: red;">&#10006;</span>  
•	Расчет кредита по указанным параметрам из кредитной формы  <span style="color: red;">&#10006;</span>  
•	Сохранение заявки с указанными параметрами из кредитной формы  <span style="color: red;">&#10006;</span>  
•	Автотесты <span style="color: red;">&#10006;</span>

Стек технологий  
•	PHP 7.+  <span style="color: green;">&#10003;</span>  
•	Framework: Symfony  <span style="color: green;">&#10003;</span>  
•	Обернуть в Docker  <span style="color: green;">&#10003;</span>  
•	БД: MariaDB <span style="color: green;">&#10003;</span>  

### Аннотация

Я нашел готовое решение здесь https://github.com/kircheson/tradedealer_test и в первые дни я вообще руки опустил, пушта этот чел, по моим меркам, очень крутой

Но потом я решил, что сделаю то что смогу, и вот, написал (первый раз в жизни!) одну, самую примитивнейшую Апи Ручку на получение списка авто, которое хранится, КОНЕЧНО ЖЕ, не в таблицах, а просто, в самом контроллере :)  

Миграций тут нет, БД прикрутил в Докер, просто показать, что кажется я понимаю, как это работает, сервер закрутить в Докер - я не победил

Но чтобы разобраться в том как сходить в базу и получить от туда список авто - для моего скилла требуется на много больше времени
