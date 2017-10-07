<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="quote.css" rel="stylesheet" />
    <title>QuoteDico - Home</title>
</head>
<body>
    <header>
        <h1>QuoteDico</h1>
        <p>un dictionnaire de citation que tout le monde peut améliorer</p>
    </header>

    <?php
    foreach ($quotes as $quote): ?>
    <article>
        blabla
    </article>
    <?php endforeach ?>
<?php
echo "<pre>";
print_r($quotes);
echo "</pre>";

/*foreach ($variable as $key => $value) {
  # code...
}*/

echo "Voici la derniere ID :";
echo "<pre>";
print_r($quotes);
echo "</pre>";
?>

    <footer class="footer">
        <a href="#">QuoteDico</a> is a quote dictionnary app built modern PHP development.
    </footer>
</body>
</html>
