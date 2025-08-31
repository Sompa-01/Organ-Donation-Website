<?php include("includes/header.php"); ?>
<h2>Contact Us</h2>
<p>If you have any queries, reach out at:</p>
<ul>
  <li>Email: support@organdonation.org</li>
  <li>Phone: +91-9876543210</li>
  <li>Address: New Delhi, India</li>
</ul>
<form method="post" onsubmit="showAlert('Thank you for contacting us!'); return false;">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <textarea name="message" placeholder="Your Message" required></textarea>
  <button type="submit">Send Message</button>
</form>
<?php include("includes/footer.php"); ?>
