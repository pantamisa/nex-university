<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>University nex</title>
</head>
<body id="logU">
    
    <div class="Boxheigt">
        <img src=".\assests\img\UNInex.png" alt="">
        <h1>Login here</h1>
        <div id="boxlogin">
            <form action="./controllers/autenticator.php" method="POST">
                <div class="input_box">
                    <input type="text" name="user" placeholder="Enter user" id="user" >
                    <i class='bx bx-user'></i>
                </div>
                <div class="input_box">
                    <input type="password" name="password" placeholder="Enter password" id="password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
