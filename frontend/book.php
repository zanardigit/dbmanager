<?php
    $id = empty($_GET['id']) ? '' : $_GET['id'];
if ($id)
{

    $url = "http://dbmanager.local/index.php?resource=book&id=$id&action=get&format=json";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $books = json_decode(curl_exec($ch));
    if (json_last_error() != JSON_ERROR_NONE)
    {
        die("Invalid JSON");
    }
}
$book = $books[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inserimento/modifica libro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="form">
            <h1>Inserimento libro</h1>
            <form action="http://dbmanager.local/index.php">
                <label for="title">Titolo</label>
                <input id="title" name="title" type="text" value="<?php echo $book->title ?>" />
                <label for="author">Autore</label>
                <input id="author" name="author" type="text" value="<?php echo $book->author ?>" />
                <select name="year">
                    <option value="">Scegli l'anno</option>
                    <option value="2014" <?php if ($book->year == "2014") echo 'selected="selected"' ?>>2014</option>
                    <option value="2013" <?php if ($book->year == "2013") echo 'selected="selected"' ?>>2013</option>
                    <option value="2012" <?php if ($book->year == "2012") echo 'selected="selected"' ?>>2012</option>
                    <option value="2011" <?php if ($book->year == "2011") echo 'selected="selected"' ?>>2011</option>
                </select>
                <?php if ($book->id): ?>
                    <input type="submit" value="Aggiorna" />
                <?php else: ?>
                    <input type="submit" value="Crea" />
                <?php endif ?>
                <input type="hidden" name="id" value="<?php echo $book->id ?>" />
                <input type="hidden" name="resource" value="book" />
                <input type="hidden" name="action" value="post" />
            </form>
        </div>
    </body>
</html>
