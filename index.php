<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" />
    <title>QuoteDico - Home</title>
</head>
<body>
    <header>
        <h1>QuoteDico</h1>
    </header>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=dictionnary;charset=utf8', 'test', 'test');
    $quotes = $bdd->query('select * from t_quote order by q_id desc');
    foreach ($quotes as $quote): ?>
    <article>
        <p><blockquote><?php echo $quote['q_description'] ?><br />
            <small><?php echo $quote['q_author'] ?></small></blockquote>
        </p>
    </article>
    <?php endforeach ?>
    <footer class="footer">
        <a href="#">QuoteDico</a> is a quote dictionnary app built modern PHP development.
    </footer>
</body>
</html>