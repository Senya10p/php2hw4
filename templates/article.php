<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новость</title>
</head>
<body>
    <h1>PHP-2</h1>
    <h2>4 урок</h2>
    <h2>Модели данных и ООП</h2>
    <h4>Домашняя работа</h4>
    <h2>Новости</h2>

    <h3><?php echo $article->header; ?></h3>
    <article><?php echo $article->text; ?></article>
    <p>Автор: <?php echo $article->author->name ?? 'неизвестен'; ?></p>
    <br><br>
    <a href="/index/">Все новости</a>
</body>
</html>