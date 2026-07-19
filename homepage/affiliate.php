<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Affiliate Hub · Ignite Vision Media</title>
  <meta name="description" content="Promote high-converting personal development offers. Tracked affiliate links, swipe files, and creatives for every Ignite Vision Media offer." />
  <link rel="icon" href="favicon.png" />
  <link rel="preconnect" href="https://api.fontshare.com" crossorigin />
  <link href="https://api.fontshare.com/v2/css?f[]=clash-grotesk@400,500,600,700&display=swap" rel="stylesheet" />
<style>
  :root {
    --bg:        #0a0b0d;
    --bg-2:      #0e1013;
    --surface:   #14171c;
    --surface-2: #191d23;
    --line:      rgba(255,255,255,0.09);
    --line-2:    rgba(255,255,255,0.14);
    --ink:       #f4f6f3;
    --muted:     #9aa39a;
    --faint:     #6b736c;
    --lime:      #bef264;
    --lime-dim:  #a3d95a;
    --gold:      #e3b64c;
    --radius:    18px;
    --maxw:      1180px;
    --font: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    --display: "Clash Grotesk", system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }
  * { box-sizing: border-box; }
  html { -webkit-text-size-adjust: 100%; }
  body {
    margin: 0;
    background: var(--bg);
    color: var(--ink);
    font-family: var(--font);
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    overflow-x: hidden;
  }
  a { color: inherit; text-decoration: none; }
  img { max-width: 100%; display: block; }
  .wrap { width: 100%; max-width: var(--maxw); margin: 0 auto; padding: 0 24px; }

  .eyebrow {
    display: inline-flex; align-items: center; gap: 9px;
    font-size: 12px; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase;
    color: var(--lime);
  }
  .eyebrow::before { content: ""; width: 20px; height: 1px; background: var(--lime); opacity: 0.7; }

  header.nav {
    position: sticky; top: 0; z-index: 50;
    backdrop-filter: saturate(140%) blur(14px);
    -webkit-backdrop-filter: saturate(140%) blur(14px);
    background: rgba(10,11,13,0.78);
    border-bottom: 1px solid var(--line);
  }
  .nav-inner { display: flex; align-items: center; justify-content: space-between; height: 74px; }
  .brand img { height: 40px; width: auto; }
  .nav-links { display: flex; align-items: center; gap: 10px; }
  .nav-link { color: var(--muted); font-weight: 500; font-size: 15px; padding: 8px 14px; border-radius: 999px; transition: color .2s, background .2s; }
  .nav-link:hover { color: var(--ink); background: rgba(255,255,255,0.05); }
  .nav-cta { color: var(--bg); background: var(--lime); font-weight: 650; }
  .nav-cta:hover { background: #cdf87f; color: var(--bg); }

  .hero { position: relative; padding: 96px 0 60px; overflow: hidden; }
  .hero-glow {
    position: absolute; inset: -20% -10% auto -10%; height: 620px; pointer-events: none; z-index: 0;
    background:
      radial-gradient(680px 380px at 78% 8%, rgba(190,242,100,0.16), transparent 60%),
      radial-gradient(520px 420px at 12% 30%, rgba(120,150,255,0.08), transparent 62%);
    filter: blur(2px);
  }
  .hero-lines { position: absolute; top: -60px; right: -80px; width: 780px; max-width: 70vw; opacity: 0.5; z-index: 0; }
  .hero-inner { position: relative; z-index: 1; max-width: 820px; }
  h1.hero-title {
    font-family: var(--display);
    font-size: clamp(40px, 6.4vw, 78px);
    line-height: 1.02; letter-spacing: -0.02em; font-weight: 600;
    margin: 20px 0 0; text-wrap: balance;
  }
  h1.hero-title .accent { color: var(--lime); }
  .hero-sub { color: var(--muted); font-size: clamp(16px, 2vw, 20px); max-width: 60ch; margin: 22px 0 0; }
  .hero-chips { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 30px; }
  .chip {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: 13.5px; color: var(--ink);
    background: var(--surface); border: 1px solid var(--line);
    padding: 9px 14px; border-radius: 999px;
  }
  .chip .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--lime); box-shadow: 0 0 10px rgba(190,242,100,0.8); }
  .spark { position: absolute; width: 26px; height: 26px; color: var(--lime); z-index: 1; opacity: 0.9; }

  .steps { padding: 26px 0 8px; }
  .steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
  .step {
    background: linear-gradient(180deg, var(--surface), var(--bg-2));
    border: 1px solid var(--line); border-radius: var(--radius);
    padding: 22px 22px 24px;
  }
  .step-num { font-size: 13px; font-weight: 700; color: var(--lime); letter-spacing: 0.1em; }
  .step h3 { font-family: var(--display); margin: 10px 0 6px; font-size: 19px; font-weight: 600; letter-spacing: -0.01em; }
  .step p { margin: 0; color: var(--muted); font-size: 14.5px; }

  .offers { padding: 64px 0 40px; }
  .offers-head { display: flex; align-items: flex-end; justify-content: space-between; gap: 24px; flex-wrap: wrap; margin-bottom: 34px; }
  .offers-head h2 { font-family: var(--display); font-size: clamp(28px, 4vw, 42px); letter-spacing: -0.02em; font-weight: 600; margin: 12px 0 0; text-wrap: balance; }
  .offers-head p { color: var(--muted); margin: 6px 0 0; max-width: 42ch; }
  .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
  .card {
    position: relative; display: flex; flex-direction: column;
    background: var(--surface); border: 1px solid var(--line);
    border-radius: var(--radius); overflow: hidden;
    transition: transform .28s cubic-bezier(.2,.7,.2,1), border-color .28s, box-shadow .28s;
  }
  .card:hover { transform: translateY(-6px); border-color: var(--line-2); box-shadow: 0 24px 50px -24px rgba(0,0,0,0.8); }
  .card-media {
    position: relative; aspect-ratio: 16 / 11; display: flex; align-items: center; justify-content: center;
    background:
      radial-gradient(120% 100% at 50% 0%, rgba(190,242,100,0.10), transparent 60%),
      linear-gradient(180deg, var(--surface-2), #0f1216);
    border-bottom: 1px solid var(--line);
    padding: 18px;
  }
  .card-media img { max-height: 100%; width: auto; filter: drop-shadow(0 18px 30px rgba(0,0,0,0.55)); }
  .card-media.wide { aspect-ratio: 16 / 10; }
  .card-media.wide img { max-height: none; width: 100%; }
  .badge {
    position: absolute; top: 12px; left: 12px;
    font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
    color: var(--bg); background: var(--lime);
    padding: 5px 10px; border-radius: 999px;
  }
  .card-body { display: flex; flex-direction: column; flex: 1; padding: 20px 20px 22px; }
  .card-tag { font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: var(--faint); }
  .card h3 { font-family: var(--display); font-size: 21px; font-weight: 600; letter-spacing: -0.01em; margin: 9px 0 6px; }
  .card p { color: var(--muted); font-size: 14.5px; margin: 0 0 20px; }
  .card .cta {
    margin-top: auto; display: inline-flex; align-items: center; justify-content: center; gap: 9px;
    font-weight: 650; font-size: 15px;
    color: var(--bg); background: var(--lime);
    padding: 13px 18px; border-radius: 12px;
    transition: background .2s, gap .2s;
  }
  .card .cta:hover { background: #cdf87f; gap: 13px; }
  .card .cta svg { width: 16px; height: 16px; }

  footer.foot { border-top: 1px solid var(--line); margin-top: 48px; padding: 40px 0 46px; background: var(--bg-2); }
  .foot-inner { display: flex; flex-wrap: wrap; gap: 24px; align-items: center; justify-content: space-between; }
  .foot-links { display: flex; flex-wrap: wrap; gap: 8px 22px; }
  .foot-links a { color: var(--muted); font-size: 14px; }
  .foot-links a:hover { color: var(--ink); }
  .foot-meta { color: var(--faint); font-size: 13px; line-height: 1.6; margin-top: 22px; }
  .foot-meta a { color: var(--lime-dim); }

  @media (max-width: 900px) {
    .steps-grid { grid-template-columns: 1fr; }
    .grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 620px) {
    .hero { padding: 66px 0 40px; }
    .grid { grid-template-columns: 1fr; }
  }
  @media (prefers-reduced-motion: reduce) { * { transition: none !important; } }
</style>
</head>
<body>

<header class="nav">
  <div class="wrap nav-inner">
    <a class="brand" href="index.php"><img src="images/logo.png" alt="Ignite Vision Media" /></a>
    <nav class="nav-links">
      <a class="nav-link" href="index.php">Home</a>
      <a class="nav-link nav-cta" href="contact.php">Contact Us</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="hero-glow"></div>
  <svg class="hero-lines" viewBox="0 0 780 520" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M-20 120 C 220 40, 420 260, 800 120" stroke="rgba(255,255,255,0.10)" stroke-width="1.2"/>
    <path d="M-20 190 C 240 110, 460 320, 800 180" stroke="rgba(255,255,255,0.08)" stroke-width="1.2"/>
    <path d="M-20 260 C 260 180, 500 380, 800 240" stroke="rgba(190,242,100,0.14)" stroke-width="1.2"/>
    <path d="M-20 330 C 260 250, 520 440, 800 300" stroke="rgba(255,255,255,0.06)" stroke-width="1.2"/>
  </svg>
  <svg class="spark" style="top:120px; right:8%;" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0 L14 10 L24 12 L14 14 L12 24 L10 14 L0 12 L10 10 Z"/></svg>
  <svg class="spark" style="bottom:40px; left:4%; width:18px; height:18px;" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0 L14 10 L24 12 L14 14 L12 24 L10 14 L0 12 L10 10 Z"/></svg>
  <div class="wrap hero-inner">
    <span class="eyebrow">Official Affiliate Hub</span>
    <h1 class="hero-title">Promote offers that <span class="accent">change lives</span>, and get paid for it.</h1>
    <p class="hero-sub">Whether you are a seasoned marketer or just getting started, everything you need is here: tracked affiliate links, swipe files, and creatives for every one of our high-converting personal development offers.</p>
    <div class="hero-chips">
      <span class="chip"><span class="dot"></span>5 live offers</span>
      <span class="chip"><span class="dot"></span>Swipes &amp; creatives included</span>
      <span class="chip"><span class="dot"></span>Tracked hoplinks</span>
    </div>
  </div>
</section>

<section class="steps">
  <div class="wrap steps-grid">
    <div class="step">
      <div class="step-num">STEP 1</div>
      <h3>Pick an offer</h3>
      <p>Choose from our lineup of personal development products below.</p>
    </div>
    <div class="step">
      <div class="step-num">STEP 2</div>
      <h3>Grab your tools</h3>
      <p>Get your affiliate link, swipe emails, and creative assets in one place.</p>
    </div>
    <div class="step">
      <div class="step-num">STEP 3</div>
      <h3>Start earning</h3>
      <p>Send traffic, track your clicks, and earn commissions on every sale.</p>
    </div>
  </div>
</section>

<section class="offers">
  <div class="wrap">
    <div class="offers-head">
      <div>
        <span class="eyebrow">Personal Development Offers</span>
        <h2>Choose an offer to promote</h2>
      </div>
      <p>Click any offer to open its full affiliate resources: links, swipes, and creatives.</p>
    </div>

    <div class="grid">
      <article class="card">
        <div class="card-media">
          <span class="badge">New</span>
          <img src="images/soul-mirror-reading.png" alt="Soul Mirror Reading" />
        </div>
        <div class="card-body">
          <span class="card-tag">Tarot · Reading</span>
          <h3>Soul Mirror Reading</h3>
          <p>Personalized 3-card tarot reading that reveals the visitor's Mirror Block.</p>
          <a class="cta" href="https://soulmirrorreading.com/affiliate" target="_blank" rel="noopener">Access Affiliate Tools
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </article>

      <article class="card">
        <div class="card-media">
          <span class="badge">New</span>
          <img src="images/wealth-ancestry-prayer.png" alt="Wealth Ancestry Prayer" />
        </div>
        <div class="card-body">
          <span class="card-tag">Faith · Wealth</span>
          <h3>Wealth Ancestry Prayer</h3>
          <p>An ancestral prayer ritual for clearing hidden blocks to abundance.</p>
          <a class="cta" href="https://wealthancestryprayer.com/affiliate/" target="_blank" rel="noopener">Access Affiliate Tools
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </article>

      <article class="card">
        <div class="card-media">
          <span class="badge">New</span>
          <img src="images/infinite-wealth-code-reading.png" alt="Infinite Wealth Code Reading" />
        </div>
        <div class="card-body">
          <span class="card-tag">Numerology · Wealth</span>
          <h3>Infinite Wealth Code Reading</h3>
          <p>A personalized wealth-code reading built from the visitor's own numbers.</p>
          <a class="cta" href="https://infinitewealthcodereading.com/affiliate/" target="_blank" rel="noopener">Access Affiliate Tools
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </article>

      <article class="card">
        <div class="card-media">
          <img src="images/prosperity-prayer.png" alt="Prosperity Prayer" />
        </div>
        <div class="card-body">
          <span class="card-tag">Faith · Prosperity</span>
          <h3>Prosperity Prayer</h3>
          <p>A daily prayer practice for inviting abundance and prosperity.</p>
          <a class="cta" href="https://instantprosperityprayer.com/affiliate/" target="_blank" rel="noopener">Access Affiliate Tools
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </article>

      <article class="card">
        <div class="card-media">
          <img src="images/seconds-wealth-prayer.png" alt="7 Seconds Wealth Prayer" />
        </div>
        <div class="card-body">
          <span class="card-tag">Faith · Wealth</span>
          <h3>7 Seconds Wealth Prayer</h3>
          <p>A simple seven-second morning prayer to start the day in abundance.</p>
          <a class="cta" href="https://7secondswealthprayer.com/affiliate" target="_blank" rel="noopener">Access Affiliate Tools
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </article>

      <article class="card" style="border-style: dashed; background: transparent;">
        <div class="card-body" style="align-items: center; justify-content: center; text-align: center; min-height: 260px;">
          <span class="card-tag" style="color: var(--lime);">More soon</span>
          <h3 style="margin-top:10px;">New offers on the way</h3>
          <p>We add high-converting offers regularly. Check back or contact us for early access.</p>
          <a class="cta" href="contact.php" style="background: transparent; color: var(--lime); border: 1px solid var(--line-2);">Contact the team
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<footer class="foot">
  <div class="wrap">
    <div class="foot-inner">
      <a class="brand" href="index.php"><img src="images/logo.png" alt="Ignite Vision Media" style="height:34px;" /></a>
      <nav class="foot-links">
        <a href="/content/privacy-policy.php">Privacy Policy</a>
        <a href="/content/terms-conditions.php">Terms &amp; Conditions</a>
        <a href="/content/refund-return-policy.php">Refund &amp; Return Policy</a>
        <a href="contact.php">Contact Us</a>
      </nav>
    </div>
    <p class="foot-meta">
      Affiliate support: <a href="mailto:affiliate@ignitevisionmedia.com">affiliate@ignitevisionmedia.com</a><br />
      &copy; Copyright Ignitist Pte Ltd. CRN: 201931552E. All Rights Reserved.
    </p>
  </div>
</footer>

</body>
</html>
