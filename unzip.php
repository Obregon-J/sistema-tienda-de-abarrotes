<?php
$zip = new ZipArchive;
if ($zip->open('adminlte4.zip') === TRUE) {
    $zip->extractTo('adminlte4/');  // Carpeta destino
    $zip->close();
    echo '✔ AdminLTE descomprimido correctamente dentro de la carpeta adminlte4/';
} else {
    echo '❌ Error al descomprimir adminlte4.zip';
}
?>
