<html>
  <head>
    <title></title>
  </head>
  <body>      
      <h1>Dati richiesti</h1>
      <dl>
        <?php foreach($data as $book): ?>
          <dt>Autore</dt>
          <dd><?php echo $book['author']; ?></dd>
          <dt>Titolo</dt>
          <dd><?php echo $book['title']; ?></dd>
          <dt>Anno</dt>
          <dd><?php echo $book['year']; ?></dd>
        <?php endforeach ?>
      </dl>
  </body>
</html>