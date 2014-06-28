<!DOCTYPE html>
<html>
    <head>
        <title>Inserimento Autori</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="form">
            <h1>Inserimento autore</h1>
            <form action="index.php">
                <label for="firstname">nome</label>
                <input id="firstname" name="firstname" type="text" />
                <label for="lastname">cognome</label>
                <input id="lastname" name="lastname" type="text" />
                <select name="birthdate">
                    <option value="">Scegli l'anno di nascita</option>
                    <?php for($i=2014;$i>=1900;$i--): ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php endfor ?>
                </select>
                <input type="submit" value="Crea" />
                <input type="hidden" name="resource" value="author" />
                <input type="hidden" name="action" value="post" />
            </form>
        </div>
    </body>
</html>
