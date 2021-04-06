<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h1>
        Buat Account Baru!
    </h1>
    <h3>
        Sign Up Form
    </h3>
    <form action="/welcome" method="post">
        @csrf
        <p>Frist name:</p>
        <input type="text" name="nama_depan">

        <p>Last name:</p>
        <input type="text" name="nama_belakang">

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="Male">Male <br>
        <input type="radio" id="Female" name="gender" value="Female">Female <br>
        <input type="radio" id="Other" name="gender" value="Other">Other <br>
        
        <p>Nationality:</p>
        <select name="Nationality" id="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapure">Singapure</option>
            <option value="Malaisia">Malaisia</option>
            <option value="Australia">Australia</option>
        </select>

        <p>Leanguage Spoken:</p>
        <input type="checkbox" id="Bahasa_Indonesia" name="Bahasa_Indonesia" value="Bahasa Indonesia">
        <label for="Bahasa_Indonesia"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="English" name="English" value="English">
        <label for="English">English</label><br>
        <input type="checkbox" id="Other" name="Other" value="Other">
        <label for="English">Arabic</label><br>
        <input type="checkbox" id="Other" name="Other" value="Other">
        <label for="Other">Japanese</label><br>

        <p>Bio:</p>
        <textarea id="w3review" name="w3review" rows="10" cols="50">

        </textarea><br>
        <button>Sign Up</button>
    </form>
</body>
</html>