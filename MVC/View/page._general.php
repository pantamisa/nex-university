<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php require_once'../Model/Conection.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/style2.css">
    <title>$ASDSAD</title>
</head>

<body>
    <header class="header">
        <div class="container">
            
            <div class="logo">
                <div class="icon-menu">
                    <i class='bx bx-menu'></i>
                    <div class="imgs">
                        <a href="./page._general.php">
                            <img src="..\assests\img\UNInex.png" alt="">
                        </a>  
                    </div>
                </div>

            </div>
            <div class="user">
                <div class="username">
                    <p>Username</p>
                    <p>rol</p>
                </div>

                <div class="profile-icon">
                    <i class='bx bxs-user-circle'></i>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
    <aside class="sidebar">
        <ul>
            <li>
                <a href="./page_map.php">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg"><h4>usuarios</h4></button>
                    </div>
                </a>
            </li>
            <li>
                <a href="./page_map.php">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg" ><h4>materias</h4></button>
                    </div>
                </a>
            </li>
            <li>
                <a href="./page_map.php">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg"><h4>carreras</h4></button>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
    <main class="main">
        <div class="intro">
            <h1>Hola</h1>
            <h3>Usserrname</h3>
        </div>
    </main>
    </div>
</body>
</html>