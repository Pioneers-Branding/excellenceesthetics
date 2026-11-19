<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="All, Index, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <title>Happy Patients | Reviews of Dr. Jitender Taneja | Excellence Esthetics, Gurgaon</title>
  <meta name="description"
    content="Read what patients say about Dr. Jitender Taneja and Excellence Esthetics, skin and hair clinic in Gurgaon.">
  <link rel="canonical" href="https://www.excellenceesthetics.com/review.php">
  <meta property="og:title" content="Happy Patients | Excellence Esthetics, Gurgaon">
  <meta property="og:description"
    content="Patient experiences with Dr. Jitender Taneja at Excellence Esthetics, Gurgaon.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.excellenceesthetics.com/review.php">
  <meta property="og:image" content="https://www.excellenceesthetics.com/assets/img/logoee-min.png">
  <?php include('header.php'); ?>

  <style>
    .ee-page {
      --ee-maroon: #511E26;
      --ee-gold: #B28B3E;
      --ee-cream: #faf6ef;
      --ee-line: #ece4d6;
      --ee-text: #4a4f57;
    }

    .ee-page .ee-eyebrow {
      display: inline-block;
      color: var(--ee-gold);
      font-weight: 600;
      letter-spacing: .12em;
      text-transform: uppercase;
      font-size: 13px;
      margin-bottom: 10px;
    }

    .ee-page h2 {
      color: var(--ee-maroon);
    }

    .ee-page .ee-lead {
      color: var(--ee-text);
      max-width: 620px;
      margin: 0 auto;
    }

    .ee-reviews {
      column-count: 3;
      column-gap: 24px;
      margin-top: 44px;
    }

    .ee-review {
      break-inside: avoid;
      -webkit-column-break-inside: avoid;
      display: inline-block;
      width: 100%;
      margin-bottom: 24px;
      background: #fff;
      border: 1px solid var(--ee-line);
      border-radius: 16px;
      padding: 28px 26px 24px;
      position: relative;
      transition: box-shadow .25s, border-color .25s;
    }

    .ee-review:hover {
      box-shadow: 0 14px 34px rgba(81, 30, 38, .09);
      border-color: var(--ee-gold);
    }

    .ee-review .ee-quote {
      position: absolute;
      top: 20px;
      right: 22px;
      font-size: 30px;
      color: var(--ee-line);
    }

    .ee-review p {
      color: var(--ee-text);
      font-size: 15px;
      line-height: 1.7;
      margin-bottom: 20px;
    }

    .ee-person {
      display: flex;
      align-items: center;
      gap: 12px;
      padding-top: 16px;
      border-top: 1px solid var(--ee-line);
    }

    .ee-avatar {
      width: 42px;
      height: 42px;
      flex: 0 0 42px;
      border-radius: 50%;
      background: var(--ee-maroon);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
    }

    .ee-person strong {
      display: block;
      color: var(--ee-maroon);
    }

    .ee-person small {
      color: #8a8f96;
      font-size: 13px;
    }

    .ee-cta {
      background: var(--ee-maroon);
      border-radius: 20px;
      padding: 46px 40px;
      color: #fff;
      text-align: center;
    }

    .ee-cta h2 {
      color: #fff;
      margin-bottom: 8px;
    }

    .ee-cta p {
      color: #e4d3cf;
      margin-bottom: 24px;
    }

    .ee-cta-btns {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .ee-outline {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: 1px solid rgba(255, 255, 255, .4);
      color: #fff;
      border-radius: 6px;
      padding: 14px 24px;
      font-weight: 600;
    }

    .ee-outline:hover {
      border-color: var(--ee-gold);
      color: var(--ee-gold);
      text-decoration: none;
    }

    @media (max-width: 991px) {
      .ee-reviews {
        column-count: 2;
      }
    }

    @media (max-width: 575px) {
      .ee-reviews {
        column-count: 1;
      }

      .ee-cta {
        padding: 34px 22px;
      }
    }
  </style>

  <!-- Subheader Start -->
  <div class="sigma_subheader" style="background-image: url(assets/img/banner/bg.webp)">
    <div class="container">
      <div class="sigma_subheader-inner">
        <h1>Happy Patients</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Happy Patients</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <div class="ee-page">
    <section class="section section-padding">
      <div class="container">
        <div class="text-center">
          <span class="ee-eyebrow">Testimonials</span>
          <h2>What our patients say</h2>
          <p class="ee-lead">Experiences shared by patients of Dr. Jitender Taneja at Excellence Esthetics, Gurgaon.
            Individual results vary.</p>
        </div>

        <?php
        $reviews = [
          ['Naveen', 'He has given his full time explaining the cause of my skin problem. This was my 2nd visit to him. His prescription cured my skin issue within 2 days. Thank you, Dr. Jitender. Would highly recommend to whoever is looking for the best skin specialist in Gurgaon.'],
          ['Gulab Upadhyay', 'I visited Dr. Taneja for my scar treatment. I am highly impressed with the treatment given. Dr. Taneja is highly knowledgeable in his field. Would highly recommend.'],
          ['Siddhartha', 'What struck me most about Dr. Taneja is his calm disposition, which proved very comforting to me as a patient while explaining things to him. Secondly, though he works from a small office, his prescription sheet is among the most descriptive I have seen.'],
          ['Gayatri Gupta', 'I consulted him for stretch marks treatment, and I must say there is a huge improvement in the appearance of the stretch marks after 3 sessions of microneedling with PRP. The marks were around 10–11 years old, white and silver in appearance, but after 3 sessions they are much lighter. The doctor explains everything very politely and listens to concerns. Wonderful experience.'],
          ['Sudeshna', 'Excellence Esthetics is no doubt one of the best skin clinics in Gurgaon. The clinic, the staff, the doctor, their services, everything is just fab.'],
          ['Ayushi', 'Consulted Dr. Jitender for white patches. I could see the improvement in 2 months of treatment. Politeness, patience in listening to the patient, and accurate diagnosis and treatment are appreciated.'],
          ['Vikas', 'I have been taking treatment from Dr. Taneja for the last 6 months for my baldness. I recently completed 4 sessions of PRP and I can see good results. My hair fall has stopped and I can see new hair growth as well. I am still continuing some medicines as the doctor prescribed. I highly recommend Dr. Taneja for hair and skin concerns.'],
          ['Priyanka', 'Just like other patients, I am also highly satisfied with this clinic and doctor. Dr. Jitender listens to your problems first and then gives the right solution. One thing I really liked is that he is not money-minded.'],
          ['Ashish', 'I was having serious issues with urticaria (hives) for the last three years. I had gone to a lot of doctors but none of their medication helped me. A relative suggested Dr. Taneja, and for the first time those medicines worked. My itching got better and now I am completely fine after 3 months of medication. He is very polite, a good listener, and doesn\'t prescribe a lot of medicines.'],
          ['Aayub', 'Dr. Jitender is very polite and genuine. He listens to the problem patiently and explains the treatment thoroughly. His medicines work very well. Highly recommended.'],
        ];
        ?>
        <div class="ee-reviews">
          <?php foreach ($reviews as $r): ?>
            <div class="ee-review">
              <i class="fas fa-quote-right ee-quote"></i>
              <p><?php echo htmlspecialchars($r[1]); ?></p>
              <div class="ee-person">
                <span class="ee-avatar"><?php echo htmlspecialchars(mb_substr($r[0], 0, 1)); ?></span>
                <span><strong><?php echo htmlspecialchars($r[0]); ?></strong><small>Patient</small></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section section-padding pt-0">
      <div class="container">
        <div class="ee-cta">
          <h2>Book your consultation</h2>
          <p>Meet Dr. Jitender Taneja at our Sector 82 or Sector 5 clinic in Gurugram.</p>
          <div class="ee-cta-btns">
            <a href="tel:+919315713334" class="ee-outline"><i class="fas fa-phone-alt"></i> +91 93157 13334</a>
            <a href="contact.php" class="sigma_btn-custom">Book An Appointment</a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include('footer.php'); ?>