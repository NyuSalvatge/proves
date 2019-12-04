<?php 

class Password {
    const SALT = 'EstoEsUnSalt';
    public static function hash($password) {
        return hash('sha512', self::SALT . $password);
    }
    public static function verify($password, $hash) {
        return ($hash == self::hash($password));
    }
}

$contrasenya1=md5("Contrasenya");

define("SALT","MiauGuauCuack");
// Crear la contraseña:
$contrasenya= hash("sha512",SALT."micontra");
$hash = Password::hash('micontra');


echo $contrasenya."<br>";
echo $contrasenya1."<br>";
echo $hash."<br>";


// Comprobar la contraseña introducida
if (Password::verify('micontraseña', $hash)) {
    echo 'Contraseña correcta!\n';
} else {
    echo "Contraseña incorrecta!\n";
}



$url="rebre.php?pas=$contrasenya"


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="<?php echo $url ?>">afdsfdsdfa</a>
</body>
</html>