<?php
$connection = new mysqli("localhost", "teacherdhapps", "TeacherDHApps23!!", "teacherdhapps");
if ($connection->connect_error) {
    die("La conexión a la base de datos falló: " . $connection->connect_error);
} else {
    echo ("Conexión establecida"); # Confirmación de conexión
}
