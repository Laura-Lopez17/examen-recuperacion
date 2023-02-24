<?php
$usuarios = $datosParaVista['datos'];

if(count($usuarios) == 0 && isset($_POST['search'])) {
    echo "<div class='alert alert-primary' role='alert'>";
    echo "No existen usuarios con el patron ({$_POST['search']})";
    echo "</div>"; 
}else {
    echo <<<END
    <form action="index.php?controlador=busqueda&accion=search" method="POST">
        <input type="text" id="search" name="search"/>
        <button type="submit">search</button>
    </form>
    END;

if (isset($_POST['search'])) {
    echo "<div>Usuarios encontrados con el patron <b>{$_POST['search']}</b></div>";
}
foreach ($usuarios as $usuario) {
        if ($usuario->getAvatar()) {
            echo "<img src='{$usuario->getAvatar()}'>";
        } else {
            echo "<img src='assets/img/bender.png'";
            
        }
        echo <<<END
                <div>
                    <h5>{$usuario->getNombre()}</h5>
                </div>
            </div>
        END;
}
}
