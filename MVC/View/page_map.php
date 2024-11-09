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
                <a href="#">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg"><h4>usuarios</h4></button>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg"><h4>materias</h4></button>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg"><h4>carreras</h4></button>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
    <main class="main">
        <div class="title">
            <legend>Lista de x</legend>
        </div>
        <div class="bar_search">
            <div class="col-md-6">
                <div class="input-group ">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                    <input type="text" class="form-control" placeholder="Buscar por nombre" aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="btn-group" role="group" >
                <button id="btn_borrar" type="button" class="btn btn-secondary">Borrar filtros</button>
                <button id="btn_crear" type="button" class="btn btn-primary" >Crear</button>
            </div>
        </div>
        <div class="table_content">
            <table class="table" >
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th>Nombre Completo</th>
                    <th>Cédula</th>
                    <th>Rol</th>
                    <th>Celular</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>estudiante</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td scope="row">
                            <a href="" type="button" class="btn btn-danger  btn-sm">Borrar</a>
                            <a href="" type="button" class="btn btn-success  btn-sm  ">Actualizar</a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    </div>
</body>
</html>