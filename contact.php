<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="All, Index, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <title>Contact Us | Excellence Esthetics by Dr. Jitender Taneja, Gurgaon</title>
  <meta name="description"
    content="Contact Excellence Esthetics, the skin, hair and laser clinic of Dr. Jitender Taneja in Gurgaon. Visit us at Sector 82 or Sector 5, call, or book an appointment online.">
  <link rel="canonical" href="https://www.excellenceesthetics.com/contact.php">
  <meta property="og:title" content="Contact Us | Excellence Esthetics, Gurgaon">
  <meta property="og:description"
    content="Book an appointment with Dr. Jitender Taneja at our Sector 82 or Sector 5 clinic in Gurgaon.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.excellenceesthetics.com/contact.php">
  <meta property="og:image" content="https://www.excellenceesthetics.com/assets/img/logoee-min.png">
  <?php include('header.php'); ?>

  <style>
    .ee-contact {
      --ee-maroon: #511E26;
      --ee-gold: #B28B3E;
      --ee-cream: #faf6ef;
      --ee-line: #ece4d6;
      --ee-text: #4a4f57;
    }

    .ee-contact .ee-eyebrow {
      display: inline-block;
      color: var(--ee-gold);
      font-weight: 600;
      letter-spacing: .12em;
      text-transform: uppercase;
      font-size: 13px;
      margin-bottom: 10px;
    }

    .ee-contact h2 {
      color: var(--ee-maroon);
      margin-bottom: 14px;
    }

    .ee-contact .ee-lead {
      color: var(--ee-text);
      max-width: 640px;
      margin: 0 auto;
    }

    /* Quick contact cards */
    .ee-quick {
      margin-top: 40px;
    }

    .ee-quick-card {
      display: flex;
      align-items: center;
      gap: 18px;
      height: 100%;
      padding: 26px 24px;
      background: #fff;
      border: 1px solid var(--ee-line);
      border-radius: 14px;
      transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
      color: inherit;
      text-decoration: none;
    }

    .ee-quick-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 34px rgba(81, 30, 38, .10);
      border-color: var(--ee-gold);
      text-decoration: none;
      color: inherit;
    }

    .ee-icon {
      flex: 0 0 56px;
      width: 56px;
      height: 56px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--ee-cream);
      color: var(--ee-maroon);
      font-size: 20px;
    }

    .ee-quick-card:hover .ee-icon {
      background: var(--ee-maroon);
      color: #fff;
    }

    .ee-quick-card small {
      display: block;
      color: #8a8f96;
      font-size: 13px;
      margin-bottom: 2px;
    }

    .ee-quick-card strong {
      display: block;
      color: var(--ee-maroon);
      font-size: 17px;
      word-break: break-word;
    }

    /* Form + clinics */
    .ee-panel {
      background: #fff;
      border: 1px solid var(--ee-line);
      border-radius: 18px;
      box-shadow: 0 20px 50px rgba(81, 30, 38, .07);
    }

    .ee-form {
      padding: 40px;
    }

    .ee-form .form-group {
      margin-bottom: 20px;
    }

    .ee-form label {
      font-weight: 600;
      color: var(--ee-maroon);
      font-size: 14px;
      margin-bottom: 6px;
    }

    .ee-form .form-control {
      height: 52px;
      border: 1px solid var(--ee-line);
      border-radius: 10px;
      background: #fdfcfa;
      padding: 10px 16px;
      transition: border-color .2s, box-shadow .2s;
    }

    .ee-form textarea.form-control {
      height: auto;
      min-height: 120px;
      resize: vertical;
    }

    .ee-form .form-control:focus {
      border-color: var(--ee-gold);
      box-shadow: 0 0 0 3px rgba(178, 139, 62, .15);
      background: #fff;
      outline: none;
    }

    .ee-form .ee-submit {
      width: 100%;
      border: 0;
    }

    .ee-form .ee-note {
      font-size: 13px;
      color: #8a8f96;
      margin: 14px 0 0;
      text-align: center;
    }

    .ee-side {
      background: var(--ee-maroon);
      color: #f3e9e4;
      border-radius: 18px;
      padding: 40px 34px;
      height: 100%;
    }

    .ee-side h3 {
      color: #fff;
      font-size: 24px;
      margin-bottom: 6px;
    }

    .ee-side>p {
      color: #e4d3cf;
      margin-bottom: 28px;
    }

    .ee-clinic {
      padding: 22px 0;
      border-top: 1px solid rgba(255, 255, 255, .14);
    }

    .ee-clinic:last-of-type {
      padding-bottom: 0;
    }

    .ee-clinic h4 {
      color: var(--ee-gold);
      font-size: 15px;
      letter-spacing: .08em;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .ee-clinic p {
      color: #f3e9e4;
      margin-bottom: 8px;
      display: flex;
      gap: 12px;
    }

    .ee-clinic p i {
      color: var(--ee-gold);
      width: 16px;
      margin-top: 5px;
      flex: 0 0 16px;
    }

    .ee-clinic a {
      color: #fff;
    }

    .ee-clinic a:hover {
      color: var(--ee-gold);
    }

    .ee-clinic .ee-dir {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-top: 6px;
      font-weight: 600;
      font-size: 14px;
      color: var(--ee-gold);
    }

    /* Maps */
    .ee-map {
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid var(--ee-line);
      background: #fff;
      height: 100%;
    }

    .ee-map iframe {
      display: block;
      width: 100%;
      height: 320px;
      border: 0;
    }

    .ee-map-caption {
      padding: 16px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .ee-map-caption strong {
      color: var(--ee-maroon);
    }

    .ee-map-caption a {
      color: var(--ee-gold);
      font-weight: 600;
      font-size: 14px;
    }

    @media (max-width: 991px) {
      .ee-side {
        margin-top: 30px;
      }
    }

    @media (max-width: 575px) {
      .ee-form {
        padding: 26px 20px;
      }

      .ee-side {
        padding: 30px 22px;
      }

      .ee-quick-card {
        padding: 20px 18px;
      }
    }
  </style>

  <!-- Subheader Start -->
  <div class="sigma_subheader" style="background-image: url(assets/img/banner/bg.webp)">
    <div class="container">
      <div class="sigma_subheader-inner">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <div class="ee-contact">

    <!-- Intro + quick contact -->
    <section class="section section-padding pb-0">
      <div class="container">
        <div class="text-center">
          <span class="ee-eyebrow">Get in touch</span>
          <h2>We'd love to hear from you</h2>
          <p class="ee-lead">Have a question about a skin, hair or laser treatment? Call either clinic, drop us an
            email, or send the form below and our team will get back to you to confirm your appointment with Dr.
            Jitender Taneja.</p>
        </div>

        <div class="row ee-quick">
          <div class="col-lg-4 col-md-6 mb-4">
            <a class="ee-quick-card" href="tel:+919315713334">
              <span class="ee-icon"><i class="fas fa-phone-alt"></i></span>
              <span><small>Sector 82 clinic</small><strong>+91 93157 13334</strong></span>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <a class="ee-quick-card" href="tel:+917827798871">
              <span class="ee-icon"><i class="fas fa-phone-alt"></i></span>
              <span><small>Sector 5 clinic</small><strong>+91 78277 98871</strong></span>
            </a>
          </div>
          <div class="col-lg-4 col-md-12 mb-4">
            <a class="ee-quick-card" href="mailto:info@excellenceesthetics.com">
              <span class="ee-icon"><i class="fas fa-envelope"></i></span>
              <span><small>Email us</small><strong>info@excellenceesthetics.com</strong></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Form + clinic details -->
    <section class="section section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="ee-panel ee-form">
              <span class="ee-eyebrow">Book an appointment</span>
              <h2 class="mb-4">Send us a message</h2>
              <form id="book2" name="google-sheet2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="c-name">Full Name <em class="text-danger">*</em></label>
                      <input type="text" id="c-name" class="form-control" name="name" placeholder="Your name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="c-phone">Phone <em class="text-danger">*</em></label>
                      <input type="tel" id="c-phone" class="form-control" name="phone" placeholder="Your phone number"
                        pattern="[0-9+\s\-]{8,15}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="c-email">Email Address</label>
                      <input type="email" id="c-email" class="form-control" name="email" placeholder="you@example.com">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="c-date">Preferred Date</label>
                      <input type="date" id="c-date" class="form-control" name="date">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="c-location">Clinic Location <em class="text-danger">*</em></label>
                      <select id="c-location" class="form-control" name="location" required>
                        <option value="">Select a clinic</option>
                        <option value="A2-130, Ground floor, Vatika Town Square-2, Sector 82, Gurugram">Sector 82 –
                          Vatika Town Square-2</option>
                        <option value="Shop No 52 (1st floor) Sector 5 HUDA Market, Gurugram- 122001">Sector 5 – HUDA
                          Market</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="c-message">Message</label>
                      <textarea id="c-message" class="form-control" name="message" rows="4"
                        placeholder="Tell us briefly about your concern"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="sigma_btn-custom ee-submit" name="submit">Request Appointment</button>
                <p class="ee-note"><i class="far fa-lock"></i> Your details are only used to contact you about your
                  appointment.</p>
              </form>
            </div>
          </div>

          <div class="col-lg-5">
            <aside class="ee-side">
              <h3>Our Clinics</h3>
              <p>Two convenient locations in Gurugram.</p>

              <div class="ee-clinic">
                <h4>Clinic 1 · Sector 82</h4>
                <p><i class="fas fa-map-marker-alt"></i><span>A2-130, Ground floor, Vatika Town Square-2, Sector 82,
                    Gurugram – 122004</span></p>
                <p><i class="fas fa-phone-alt"></i><a href="tel:+919315713334">+91 93157 13334</a></p>
                <a class="ee-dir" target="_blank" rel="noopener"
                  href="https://www.google.com/maps/place/Excellence+Esthetics+by+Dr+Jitender+Taneja:+Laser+Hair+Reduction+in+Gurgaon+%7C+Best+Skin+Specialist+in+Gurgaon,+Cosmetologist,+Top+Dermatologist+%7C/@28.3900038,76.9593496,15z/data=!4m5!3m4!1s0x0:0x4f8485075aecf0cc!8m2!3d28.3900038!4d76.9593496">Get
                  directions <i class="far fa-arrow-right"></i></a>
              </div>

              <div class="ee-clinic">
                <h4>Clinic 2 · Sector 5</h4>
                <p><i class="fas fa-map-marker-alt"></i><span>Shop No 52 (1st floor), Sector 5 HUDA Market, Gurugram –
                    122001</span></p>
                <p><i class="fas fa-phone-alt"></i><a href="tel:+917827798871">+91 78277 98871</a></p>
                <a class="ee-dir" target="_blank" rel="noopener"
                  href="https://www.google.com/maps/place/Dr.+Jitender+Taneja+Dermatology+Clinic:+Best+Dermatologist+in+Gurgaon,+Best+Skin+Specialist+in+Gurgaon+%7C/@28.4840937,77.0172628,15z/data=!4m5!3m4!1s0x0:0x58f089b332be440f!8m2!3d28.4840937!4d77.0172628">Get
                  directions <i class="far fa-arrow-right"></i></a>
              </div>

              <div class="ee-clinic">
                <h4>Email</h4>
                <p><i class="fas fa-envelope"></i><a
                    href="mailto:info@excellenceesthetics.com">info@excellenceesthetics.com</a></p>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <!-- Maps -->
    <section class="section section-padding pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="ee-map">
              <iframe title="Map to Excellence Esthetics, Sector 82, Gurugram" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://maps.google.com/maps?q=28.3900038,76.9593496&z=15&output=embed"></iframe>
              <div class="ee-map-caption">
                <strong>Sector 82 – Vatika Town Square-2</strong>
                <a target="_blank" rel="noopener"
                  href="https://www.google.com/maps/dir/?api=1&destination=28.3900038,76.9593496">Directions <i
                    class="far fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="ee-map">
              <iframe title="Map to Dr. Jitender Taneja Dermatology Clinic, Sector 5, Gurugram" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://maps.google.com/maps?q=28.4840937,77.0172628&z=15&output=embed"></iframe>
              <div class="ee-map-caption">
                <strong>Sector 5 – HUDA Market</strong>
                <a target="_blank" rel="noopener"
                  href="https://www.google.com/maps/dir/?api=1&destination=28.4840937,77.0172628">Directions <i
                    class="far fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <script>
    // Prevent picking a past date for the appointment
    (function () {
      var d = document.getElementById('c-date');
      if (d) { d.min = new Date().toISOString().split('T')[0]; }
    })();
  </script>

  <?php include('footer.php'); ?>