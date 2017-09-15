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
        <p><blockquote><?php echo $quote['q_description'] ?><br>
            <small>
              <?php echo $quote['a_fName']. ' ' .$quote['a_mName']. ' ' .$quote['a_lName'] ?>
            </small>
          </blockquote>
        </p>
    </article>
    <?php endforeach ?>

    <footer class="footer">
        <a href="#">QuoteDico</a> is a quote dictionnary app built modern PHP development.
    </footer>
</body>
</html>
