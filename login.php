<?php
if(!isset($_POST["usuario"]) || !isset($_POST["pass"]))
{
  header("Location: ./index.php?status=1");
  exit;
}
else {
  $usuario = $_POST["usuario"];
  $password = $_POST["pass"];
  //echo "$usuario $password";
  $conn = oci_connect("adminfarmacia", "adminf2939", "localhost/XE");
  if (!$conn) {
     $m = oci_error();
     trigger_error(htmlentities($m['message']), E_USER_ERROR);
     echo "Error";
   }else {
     $stid = oci_parse($conn, "select password, tipo, idempleado from empleado where usuario='".$usuario."'");
      oci_execute ($stid);
      $row = oci_fetch_array($stid, OCI_BOTH);
      $user = $usuario;
      $pass = $row['PASSWORD'];
      $tipo = $row['TIPO'];
      $id = $row['IDEMPLEADO'];
    //  echo "$user $pass $tipo";
      if(!isset($tipo) || !isset($pass))
      {
        header("Location: ./index.php?status=1");
      }
      else if($password == $pass){
        session_start();
        $_SESSION["Usuario"]["User"]=$usuario;
        $_SESSION["Usuario"]["id"]=$id;
        if($tipo=="Admin"){
          $_SESSION["Usuario"]["Tipo"]="Admin";
          header("Location: ./vender.php");
        }
        else if($tipo =="Estan") {
            $_SESSION["Usuario"]["Tipo"]="Estan";
            header("Location: ./vender.php");
        }
      }
      else {
        header("Location: index.php?status=1");
      }
    }
}
?>
