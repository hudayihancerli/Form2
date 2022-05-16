<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'C:\wamp64\www\Form/style.css'; ?></style>

    <title>Form</title>
</head>
<body>
    <div class="container">
        
        <div class="form">
        <div class="logo">
            <img src="./logo.svg" class="logo" alt="logo">
        </div>
            <form  id="form" name="form" method="post" action="info.php">
                <label for="ad"> Ad :</label>
                <input type="text" name="ad" id="ad" placeholder="Furkan">
                <label for="soyad"> Soyad :</label>
                <input type="text" name="soyad" id="soyad" placeholder="Altundaş">
                <label for="eposta"> E-posta :</label>
                <input type="email" name="eposta" id="eposta" placeholder="Furkan@hotmail.com">
                <label for="pass"> Şifre :</label>
                <input type="password" name="pass" id="pass" placeholder="********">
                <input type="submit" value="Gönder" name="submit">
            </form>
        </div>
        <div class="resim">
            <img src="./5141092.jpg" class="resim" alt="resim">
        </div>
    </div>
</body>
</html>