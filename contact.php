<?php
$page       = 'contact';
$page_title = 'Contact Us';
$meta_desc  = 'Get in touch with Iniciopharma — phone, email, or visit us in Vadodara, Gujarat.';

// Handle form submission
$success = false;
$error   = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $phone   = trim(strip_tags($_POST['phone']   ?? ''));
    $subject = trim(strip_tags($_POST['subject'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to      = 'depotinicio@gmail.com';
        $subj    = 'New Enquiry from Website: ' . $subject;
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        if (mail($to, $subj, $body, $headers)) {
            $success = true;
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}

require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Contact</span>
    </div>
    <div class="section-label" style="justify-content:center;">Get In Touch</div>
    <h1 class="page-hero-title">Contact <span>Us</span></h1>
    <p class="page-hero-sub">Have a question, need product information, or want to explore a partnership? We're here for you.</p>
  </div>
</section>

<!-- ============================================================
     CONTACT SECTION
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="contact-grid">

      <!-- Left: Info -->
      <div class="contact-info">

        <div class="contact-info-card reveal">
          <div class="contact-info-icon"><i class="fa fa-map-marker-alt"></i></div>
          <div>
            <div class="contact-info-label">Our Location</div>
            <div class="contact-info-value">
              F-301 Aamrapali Residential Complex,<br>
              Sun Pharma Road, Opp. Shyamal Enclave,<br>
              Vadodara – 390012, Gujarat, India
            </div>
          </div>
        </div>

        <div class="contact-info-card reveal reveal-delay-1">
          <div class="contact-info-icon"><i class="fa fa-phone"></i></div>
          <div>
            <div class="contact-info-label">Phone Number</div>
            <div class="contact-info-value">
              <a href="tel:+917523076895">+91 75230 76895</a>
            </div>
          </div>
        </div>

        <div class="contact-info-card reveal reveal-delay-2">
          <div class="contact-info-icon"><i class="fa fa-envelope"></i></div>
          <div>
            <div class="contact-info-label">Email Addresses</div>
            <div class="contact-info-value">
              <a href="mailto:depotinicio@gmail.com">depotinicio@gmail.com</a><br>
              <a href="mailto:iniciopharmaceuticals@gmail.com">iniciopharmaceuticals@gmail.com</a>
            </div>
          </div>
        </div>

        <!-- Hours -->
        <div class="contact-hours reveal reveal-delay-3">
          <div class="contact-hours-title"><i class="fa fa-clock" style="margin-right:6px;"></i>Working Hours</div>
          <div class="hours-row">
            <span class="hours-day">Monday – Friday</span>
            <span class="hours-time">9:00 AM – 6:00 PM</span>
          </div>
          <div class="hours-row">
            <span class="hours-day">Saturday</span>
            <span class="hours-time">9:00 AM – 4:00 PM</span>
          </div>
          <div class="hours-row">
            <span class="hours-day">Sunday</span>
            <span class="hours-time">Closed</span>
          </div>
          <div class="hours-row" style="margin-top:12px; border-top:1px solid var(--border); padding-top:12px;">
            <span class="hours-day" style="color:var(--cyan);">📞 Free Call Service</span>
            <span class="hours-time">24 / 7</span>
          </div>
        </div>

        <!-- Social -->
        <div class="reveal">
          <div style="font-family:var(--font-heading); font-size:12px; font-weight:600; color:var(--text-secondary); letter-spacing:1px; text-transform:uppercase; margin-bottom:12px;">Follow Us</div>
          <div style="display:flex; gap:12px;">
            <a href="https://www.youtube.com/@InicioPharma" target="_blank" class="social-link" title="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/in/inicio-pharma-7b9707324/" target="_blank" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61564616075105" target="_blank" class="social-link" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/iniciopharma/" target="_blank" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

      </div>

      <!-- Right: Form -->
      <div class="contact-form-wrap reveal reveal-delay-2">
        <h3 class="form-title">Send Us a Message</h3>
        <p class="form-subtitle">Fill in the form below and our team will get back to you within 24 hours.</p>

        <?php if ($success): ?>
        <div style="padding:16px 20px; background:rgba(0,255,136,0.1); border:1px solid rgba(0,255,136,0.3); border-radius:var(--radius); margin-bottom:24px; color:var(--green); font-size:14px;">
          ✅ Your message was sent successfully! We'll get back to you soon.
        </div>
        <?php elseif ($error): ?>
        <div style="padding:16px 20px; background:rgba(255,107,53,0.1); border:1px solid rgba(255,107,53,0.3); border-radius:var(--radius); margin-bottom:24px; color:#ff6b35; font-size:14px;">
          ❌ Something went wrong. Please try again or contact us directly by phone.
        </div>
        <?php endif; ?>

        <form id="contactForm" method="POST" action="contact.php">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Full Name *</label>
              <input type="text" name="name" class="form-input" placeholder="Your full name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" />
            </div>
            <div class="form-group">
              <label class="form-label">Email Address *</label>
              <input type="email" name="email" class="form-input" placeholder="your@email.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Phone Number</label>
              <input type="tel" name="phone" class="form-input" placeholder="+91 XXXXX XXXXX" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>" />
            </div>
            <div class="form-group">
              <label class="form-label">Subject</label>
              <select name="subject" class="form-select">
                <option value="General Enquiry">General Enquiry</option>
                <option value="Product Information">Product Information</option>
                <option value="Distribution Partnership">Distribution Partnership</option>
                <option value="Career Enquiry">Career Enquiry</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Your Message *</label>
            <textarea name="message" class="form-textarea" placeholder="Write your message here..." required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center; padding:16px; font-size:15px;">
            <i class="fa fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- MAP -->
<section class="map-section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:32px;">
      <div class="section-label">Find Us</div>
      <h2 class="section-title" style="font-size:28px;">Our <span>Location</span></h2>
    </div>
    <div class="map-wrap reveal">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.188!2d73.1812!3d22.3119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDE4JzQyLjgiTiA3M8KwMTAnNTIuMyJF!5e0!3m2!1sen!2sin!4v1617000000000!5m2!1sen!2sin"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Iniciopharma Location - Vadodara">
      </iframe>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
