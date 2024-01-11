<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="welcome.php">
    <h1>Buat account baru</h1>
    <h2>sign up form</h2>

    <label for="fisrtname"> Firstname : </label><br><br>
    <input type="text" name="first" required ><br><br>
    <label for="lastname"> Lastame : </label><br><br>
    <input type="text" name="last" required><br><br>

    <label for="Gender">Gender</label><br><br>
    <input type="radio" name="gender" value = "Laki-laki">laki laki <br>
    <input type="radio" name = "gender" value = "Perempuan">perempuan <br><br>

    <label for="Nationality">Nationality</label><br>
    <select name = "negara">
        <option value="Indonesia">Indonesia</option>
        <option value="Inggris">Inggris</option>
        <option value="Cina">cina</option>
    </select>
    <br><br>

    <label for="Languangen Spoken">Language Spoken</label><br>
    <input type="checkbox" name = "bahasa[]" value  = "Bahasa Indonesia">Bahasa Indonesia <br>
    <input type="checkbox" name = "bahasa[]" value = "Bahasa Inggris">Bahasa Inggris <br>
    <input type="checkbox" name = "bahasa[]" value = "Bahasa Cina">Bahasa cina 

    <br><br>

    <label for="bio">Bio</label><br>
    <textarea id="" cols="30" rows="10" name = "bio" required></textarea><br><br>
    <button type="submit">Sign up</button><br><br>
    </form>


</body>
</html>