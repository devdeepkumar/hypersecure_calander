<?php
if (isset($_POST['submit'])) {
    // Define recipient email
    $email_to = "4exult@gmail.com, gchauhan.dm@gmail.com, himanshu.lifelinkr@gmail.com, leads@lifelinkr.com, Srishti.lifelinkr@gmail.com";
    $email_subject = "Query from Hypersecure.com Form";

    // Sanitize and assign POST data to variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $company_email = isset($_POST['email']) ? $_POST['email'] : '';

    // Function to sanitize input data
    function clean_string($string) {
        $bad = ["content-type", "bcc:", "to:", "cc:", "href"];
        return str_replace($bad, "", $string);
    }

    // Prepare email message
    $email_message = "
        <p><strong>Name:</strong> " . clean_string($name) . "</p>
        <p><strong>Phone:</strong> " . clean_string($phone) . "</p>
        <p><strong>Company Email:</strong> " . clean_string($company_email) . "</p>
    ";

    // Email headers
    $headers = "From: leads@lifelinkr.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email to admin
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        echo "Thank you! Your query has been submitted successfully.";
    } else {
        echo "There was an error submitting your query. Please try again.";
    }
}
?>

<html>
<style>
/* Add your existing styles here */
body {
    background: #ffffff;
    background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}
form input, form button {
    width: calc(100% - 20px);
    margin: 10px auto;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
form button {
    background: #023acd;
    color: #fff;
    border: none;
    cursor: pointer;
}
form button:hover {
    background: #0056d3;
}
</style>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="email" name="email" placeholder="Company Email" required>
        <button type="submit" name="submit">Send</button>
    </form>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KCVQJS23');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCVQJS23" 
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        window.onload = function() {       
            setTimeout(function() {
                window.location.href = 'https://www.hypersecure.in/';
            }, 8000); 
        }
    </script>
</body>
</html>
