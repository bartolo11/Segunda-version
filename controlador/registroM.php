<?php
// Verificamos si se ha enviado algún archivo
if(isset($_FILES['archivo'])) {
    $archivo_temporal = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = $_FILES['archivo']['name'];
    
    // Directorio donde deseas guardar el archivo subido
    $directorio_destino = 'material/';
    
    // Movemos el archivo subido al directorio de destino
    if(move_uploaded_file($archivo_temporal, $directorio_destino . $nombre_archivo)) {
        echo "El archivo se ha subido correctamente.";
    } else {
        echo "Ha ocurrido un error al subir el archivo.";
    }
} else {
    echo "No se ha seleccionado ningún archivo.";
}
?>