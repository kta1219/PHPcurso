<?php
/*if($_SERVER['REQUEST_METHOD'] == 'GET'){
//    echo "se enviaron por get";
//}else{
//    echo "se enviaron por post";
//}*/
if (isset($_POST['submit'])) {
    echo "se han enviado los datos correctamente";
    print_r($_POST['submit']);
}
    
?>