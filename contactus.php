<?php
/* Template Name: Contact us  */
get_header();

$success = '';
$error = '';

if ( isset($_POST['contact_submit']) ) {

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    if ( empty($name) || empty($email) || empty($message) ) {
        $error = "Ju lutem plotësoni të gjitha fushat.";
    } elseif ( !is_email($email) ) {
        $error = "Email nuk është i saktë.";
    } else {

        $to = get_option('admin_email'); // ose shkruaj email-in tënd
        $subject = "Mesazh i ri nga Contact Us";
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: '.$name.' <'.$email.'>'
        );

        $body = "
            <h3>Mesazh i ri</h3>
            <p><strong>Emri:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mesazhi:</strong><br>$message</p>
        ";

        if ( wp_mail($to, $subject, $body, $headers) ) {
            $success = "Mesazhi u dërgua me sukses!";
        } else {
            $error = "Ndodhi një gabim. Provo përsëri.";
        }
    }
}
?>

<div class="contact-container">
    <h2>Na Kontaktoni</h2>

    <?php if ($success): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="post" class="contact-form">
        <input type="text" name="name" placeholder="Emri juaj" required>
        <input type="email" name="email" placeholder="Email juaj" required>
        <textarea name="message" placeholder="Mesazhi juaj" required></textarea>
        <button type="submit" name="contact_submit">Dërgo Mesazhin</button>
    </form>
</div>

<?php get_footer(); ?>
