<?php include 'includes/header.php'; ?>
<section class="container fade-in">
    <h2>Contact</h2>
    <form action="process_contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send</button>
    </form>
    <p>Email: ksonrift@wealth.com | Social: Follow links below.</p>
</section>
<?php include 'includes/footer.php'; ?>