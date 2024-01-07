<?php  
  function autoload($clase) {
    $ruta_clase = str_replace('\\', DIRECTORY_SEPARATOR, $clase) . '.php';
    
    if (file_exists($ruta_clase)) {
        require_once($ruta_clase);
    }
}

spl_autoload_register("autoload");

?>