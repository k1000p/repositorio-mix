<?php
$resultado = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}sd
$fila       = mysql_fetch_assoc($resultado);
$longitudes = mysql_fetch_lengths($resultado);
text = mix

print_r($fila);
print_r($longitudes);
sasdasda

ncurses_assume_default_colors(as, bg)
?>