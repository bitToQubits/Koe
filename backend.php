<?php
    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['nombre_empresa']) && isset($_POST['mensaje'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nombre_empresa = $_POST['nombre_empresa'];
        $mensaje = $_POST['mensaje'];

        $to = "
            <h1>Nombre:</h1>
            <p>$name</p>
            <h1>Correo:</h1>
            <p>$email</p>
            <h1>Nombre de la empresa: </h1>
            <p>$nombre_empresa</p>
            <h1>Mensaje: </h1>
            <p>$mensaje</p>
        ";

        $subject = "Solicitud de contacto Koe.com";

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'jlbciriaco@gmail.com';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->isHTML(true);

            $mail->setFrom($email, 'Pagina web Koe');
            $mail->addAddress('jlbciriaco@gmail.com');
            $mail->Body = $to;
            $mail->Subject = $subject;
            $mail->send();
            echo json_encode(array("status" => "success"));

        } catch (Exception $e) {
            echo json_encode(array("status" => "error"));
        }


    }else{
        echo json_encode(array("status" => "error"));
    }

?>