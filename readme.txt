PHP-2. Урок 4.
Домашняя работа.

1. Написали класс базового контроллера (файл Controller.php). Добавили метод-диспетчер вызова действия.

2. Создали контроллеры для клиентских страниц новостей(в директории Controllers файлы Index.php, Article.php)
и для админ панели (файлы Admin.php, AdminAdd.php, AdmonDel.php, AdminUpdate.php).

3. Продумали систему адресов (пример: index.php?ctrl=CTRL, где CTRL - имя контроллера. Каждый контроллер выполняет одно действие).
Написали фронт-контроллер в соответствии с этой системой адресов.

4. Чтобы разделить пользовательскую часть и часть админки, сделали для админ-панели другую точку входа (в папке admin файл index.php).
Такое разделение возможно повысит безопасность приложения.

5. * Создали систему ЧПУ. Адрес вида /XXX/YYY/. Каждый контроллер выполняет одно действие.