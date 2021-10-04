<?php

setcookie("user", "Fulanito de Tal", time() + 3600);

//ojo para guardar arrays:
$hobbies = ['futbol', 'música rock', 'tocar la guitarra con mis amigos'];
setcookie("hobbies", serialize($hobbies), time() + 3600);
setcookie("hobbies2", json_encode($hobbies), time() + 3600);

//y objetos:
$persona = new Persona("Juan", "Pérez", 21);
setcookie("persona", serialize($persona), time() + 3600);
setcookie("persona2", json_encode($persona), time() + 3600);
