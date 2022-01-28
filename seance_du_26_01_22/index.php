<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Mon formulaire</h1>
    <form action="action.php" method="GET">
        <div>
            Nom : 
            <input type="text" name="nom">
        </div>
        <br>
        <div>
            email : 
            <input type="email" name="email">
        </div>
        <br>
        <div>
            genre : 
            <select name="genre" id="genre">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
        </div>
        <br>
        <button type="submit">OK</button>
    </form>
</body>
</html>