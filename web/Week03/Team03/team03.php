<!DOCTYPE html>
<html>
    <head>
        <title>Team03</title>
    </head>
    <body>
        <form action="myFile.php" method="POST">
            <span>Name<input type="text" name="name"></span><br>
            <span>Email<input type="text" name="email"></span><br>
            <input type="radio" name="majors" value="Computer Science">Computer Science<br>
            <input type="radio" name="majors" value="Web Design and Development">Web Design and Development<br>
            <input type="radio" name="majors" value="Computer Information Technology">Computer Information Technology<br>
            <input type="radio" name="majors" value="Computer Engineering">Computer Engineering<br>
            <textarea name="comment" rows=5 cols=40 placeholder="Comments"></textarea><br>
            <input type="checkbox" name="continents[]" value="North America">North America<br>
            <input type="checkbox" name="continents[]" value="South America">South America<br>
            <input type="checkbox" name="continents[]" value="Asia">Asia<br>
            <input type="checkbox" name="continents[]" value="Africa">Africa<br>
            <input type="checkbox" name="continents[]" value="Europe">Europe<br>
            <input type="checkbox" name="continents[]" value="Antartica">Antartica<br>
            <input type="checkbox" name="continents[]" value="Austrialia">Austrialia<br>
            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>