<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="controller/controller.php" method="POST">
        <div>
            Nom: 
            <input type="text" name="firstname">
        </div>
        <br>
        <div>
            PostNom: 
            <input type="text" name="lastname">
        </div>
        <br>
        <div>
            Prenom: 
            <input type="text" name="name">
        </div>
        <br>
        <div>
            Matricule: 
            <input type="text" name="mat">
        </div>
        <br>
        <div>
            Genre: 
            <select name="genre" id="gender">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
        </div>
        <br>
        <div>
            Promotion: 
            <input type="text" name="promotion">
        </div>
        <br>
        <div>
            Email
            <input type="email" name="email">
        </div>
        <button type="submit">OK</button>
    </form>
</body>

</html>