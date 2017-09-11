# небольшая система управления контентом
>learning php cms

###### Настройки подключения к базе данных лежат в файлах: 
  + _config.php_
  + _/views/files.php_
  + _/views/upload.php_

Файл **_".htpasswd"_** пусть, следует сгенерировать при помощи htpasswd.exe

**_"engin"_** BD содержащая таблицы. 
Таблица для хранения статей **_"articles"_**
|          id        |       title      |   content       |   date   |
|--------------------|------------------|-----------------|----------|
|  AUTO_INCREMENT  |  varchar(225)  |    text       |  date  |
|         -         |utf8_gentral_ci  |utf8_gentral_ci |   -    |

##### SQL запрос для формирования тиблицы

```sql
CREATE TABLE `engin`.`articles` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `content` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
```

Табилца **_"documentation"_** хранящая файлы в базе данных содержит два поля:
|       id       |    img    |
|----------------|-----------|
| AUTO_INCREMENT |  longblob |

##### SQL запрос для формирования таблицы: 
```sql
CREATE TABLE `engin`.`documentation` ( `id` INT NOT NULL AUTO_INCREMENT , `img` LONGBLOB NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
```

***

##### Были использованы дополнительные библиотеки

[Progressively](https://github.com/thinker3197/progressively)

[Font Awesome](https://fontawesome.ru/)

[Bootstrap](https://getbootstrap.com/)
