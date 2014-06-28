<?php

// get option result message
$result = empty($_GET['result']) ? '' : $_GET['result'];

// get books list
$url = 'http://dbmanager.local/index.php?resource=book&action=get&format=json';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$books = json_decode(curl_exec($ch));
if (json_last_error() != JSON_ERROR_NONE)
{
    die("Invalid JSON");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Elenco libri</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <?php if ($result == 'success'): ?>
        <div class="alert alert-success">Salvato correttamente!</div>
        <?php endif ?>
        <?php if ($result == 'error'): ?>
        <div class="alert alert-danger">Errore nel salvataggio!</div>
        <?php endif ?>
        <div id="form">
            <h1>Elenco libri</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Anno</th>
                            <th>Visite</th>
                            <th>Acquistato</th>
                            <th>Modifica</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                            <tr>
                                <td><?php echo $book->id ?> </td>
                                <td><?php echo $book->title ?> </td>
                                <td><?php echo $book->author ?> </td>
                                <td><?php echo $book->year ?> </td>
                                <td><?php echo $book->hits ?> </td>
                                <td><?php echo $book->purchased ?> </td>
                                <td>
                                    <a href="/frontend/book.php?id=<?php echo $book->id ?>" title="Modifica">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </form>
        </div>
    </body>
</html>
