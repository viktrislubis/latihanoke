<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form SanberBook</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="/tabwelcome" method="post">
        @csrf
        <label>First Name:</label><br />
        <input type="text" name="firstName" /> <br /><br />

        <label>Last Name:</label><br />
        <input type="text" name = "lastName" /> <br /><br />

        <label>Gender:</label><br />
        <input type="radio" name="Gender:" />Male<br />
        <input type="radio" name="Gender:" />Female<br />
        <input type="radio" name="Gender:" />Other<br /><br />

        <label>Nationality:</label><br />
        <select name="bahasa">
            <option value="">Indonesian</option>
            <option value="">English</option>
            <option value="">Other</option>
        </select><br /><br />

        <label>Language Spoken:</label><br />
        <input type="checkbox" name="Language Spoken:" />Bahasa Indonesia<br />
        <input type="checkbox" name="Language Spoken:" />English<br />
        <input type="checkbox" name="Language Spoken:" />Other<br /><br />

        <label>Bio:</label><br />
        <textarea cols="15" rows="10"></textarea> <br /><br />

        <input type="submit" value="Sign Up" />
    </form>
</body>

</html>
