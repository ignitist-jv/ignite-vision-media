<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ignite Vision Media · Ignite Your Future. Elevate Your Soul.</title>
  <meta name="description" content="Ignite Vision Media is a performance-driven digital publishing company building high-converting personal development products that deliver real transformation." />
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
  html { -webkit-text-size-adjust: 100%; scroll-behavior: smooth; }
  body {
    margin: 0; background: var(--bg); color: var(--ink);
    font-family: var(--font); line-height: 1.55;
    -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;
    overflow-x: hidden;
  }
  a { color: inherit; text-decoration: none; }
  img { max-width: 100%; display: block; }
  .wrap { width: 100%; max-width: var(--maxw); margin: 0 auto; padding: 0 24px; }
  .eyebrow {
    display: inline-flex; align-items: center; gap: 9px;
    font-size: 12px; font-weight: 600; letter-spacing: 0.16em; text-transform: uppercase; color: var(--lime);
  }
  .eyebrow::before { content: ""; width: 20px; height: 1px; background: var(--lime); opacity: 0.7; }
  .section { padding: 92px 0; }
  .section-head { max-width: 720px; }
  .section-head h2 { font-family: var(--display); font-weight: 600; letter-spacing: -0.02em; font-size: clamp(30px, 4.4vw, 48px); line-height: 1.05; margin: 14px 0 0; text-wrap: balance; }
  .section-head p.lead { color: var(--muted); font-size: clamp(16px, 1.6vw, 18.5px); margin: 18px 0 0; }

  header.nav {
    position: sticky; top: 0; z-index: 50;
    backdrop-filter: saturate(140%) blur(14px); -webkit-backdrop-filter: saturate(140%) blur(14px);
    background: rgba(10,11,13,0.78); border-bottom: 1px solid var(--line);
  }
  .nav-inner { display: flex; align-items: center; justify-content: space-between; height: 74px; }
  .brand img { height: 40px; width: auto; }
  .nav-links { display: flex; align-items: center; gap: 6px; }
  .nav-link { color: var(--muted); font-weight: 500; font-size: 15px; padding: 8px 14px; border-radius: 999px; transition: color .2s, background .2s; }
  .nav-link:hover { color: var(--ink); background: rgba(255,255,255,0.05); }
  .nav-cta { color: var(--bg); background: var(--lime); font-weight: 650; }
  .nav-cta:hover { background: #cdf87f; }

  .hero { position: relative; padding: 120px 0 96px; overflow: hidden; }
  .hero-glow {
    position: absolute; inset: -25% -10% auto -10%; height: 760px; pointer-events: none; z-index: 0;
    background:
      radial-gradient(720px 420px at 72% 0%, rgba(190,242,100,0.18), transparent 60%),
      radial-gradient(560px 460px at 10% 24%, rgba(120,150,255,0.09), transparent 62%);
    filter: blur(2px);
  }
  .hero-lines { position: absolute; top: -40px; right: -120px; width: 900px; max-width: 78vw; opacity: 0.5; z-index: 0; }
  .spark { position: absolute; color: var(--lime); z-index: 1; opacity: 0.9; }
  .hero-inner { position: relative; z-index: 1; max-width: 880px; }
  h1.hero-title {
    font-family: var(--display); font-weight: 600; letter-spacing: -0.025em;
    font-size: clamp(46px, 8vw, 96px); line-height: 0.98; margin: 22px 0 0; text-wrap: balance;
  }
  h1.hero-title .accent { color: var(--lime); }
  .hero-sub { color: var(--muted); font-size: clamp(17px, 2.1vw, 22px); max-width: 56ch; margin: 26px 0 0; }
  .hero-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 38px; }
  .btn { display: inline-flex; align-items: center; gap: 10px; font-weight: 650; font-size: 16px; padding: 15px 26px; border-radius: 999px; transition: transform .2s, background .2s, gap .2s, border-color .2s; }
  .btn svg { width: 17px; height: 17px; }
  .btn-primary { color: var(--bg); background: var(--lime); }
  .btn-primary:hover { background: #cdf87f; gap: 14px; }
  .btn-ghost { color: var(--ink); border: 1px solid var(--line-2); }
  .btn-ghost:hover { background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.28); }

  .pillars { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 66px; position: relative; z-index: 1; }
  .pillar { border-top: 1px solid var(--line-2); padding-top: 16px; }
  .pillar .k { font-family: var(--display); font-weight: 600; font-size: 15px; letter-spacing: 0.02em; }
  .pillar .v { color: var(--muted); font-size: 13.5px; margin-top: 4px; }

  .split { display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 56px; align-items: center; }
  .about-body p { color: var(--muted); font-size: 16.5px; margin: 18px 0 0; }
  .about-body p strong { color: var(--ink); font-weight: 600; }
  .about-body h2 { font-family: var(--display); font-weight: 600; letter-spacing: -0.02em; font-size: clamp(30px, 4.4vw, 48px); line-height: 1.05; margin: 14px 0 0; text-wrap: balance; }
  .about-card {
    position: relative; border: 1px solid var(--line); border-radius: 24px; overflow: hidden;
    background: linear-gradient(180deg, var(--surface), var(--bg-2)); padding: 40px; min-height: 320px;
    display: flex; flex-direction: column; justify-content: flex-end;
  }
  .about-card .glow { position: absolute; inset: -40% 30% auto -20%; height: 320px; background: radial-gradient(closest-side, rgba(190,242,100,0.20), transparent); filter: blur(6px); pointer-events: none; }
  .about-card .mark { font-family: var(--display); font-weight: 600; font-size: clamp(30px, 4vw, 44px); line-height: 1.05; letter-spacing: -0.02em; position: relative; }
  .about-card .mark span { color: var(--lime); }

  .cards { display: grid; grid-template-columns: repeat(2, 1fr); gap: 22px; margin-top: 46px; }
  .fcard { background: var(--surface); border: 1px solid var(--line); border-radius: var(--radius); padding: 30px; transition: transform .28s cubic-bezier(.2,.7,.2,1), border-color .28s; }
  .fcard:hover { transform: translateY(-5px); border-color: var(--line-2); }
  .fcard .ic { width: 46px; height: 46px; border-radius: 12px; display: grid; place-items: center; background: rgba(190,242,100,0.12); color: var(--lime); border: 1px solid rgba(190,242,100,0.25); }
  .fcard .ic svg { width: 23px; height: 23px; }
  .fcard h3 { font-family: var(--display); font-weight: 600; font-size: 21px; letter-spacing: -0.01em; margin: 20px 0 8px; }
  .fcard p { color: var(--muted); font-size: 15px; margin: 0; }

  .purpose { background: linear-gradient(180deg, var(--bg-2), var(--bg)); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
  .checklist { list-style: none; padding: 0; margin: 30px 0 0; display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px 30px; }
  .checklist li { display: flex; gap: 12px; align-items: flex-start; color: var(--ink); font-size: 16px; }
  .checklist li svg { flex: none; width: 22px; height: 22px; color: var(--lime); margin-top: 1px; }
  .portfolio-note { color: var(--muted); font-size: 15.5px; margin-top: 30px; max-width: 62ch; }
  .portfolio-note b { color: var(--ink); font-weight: 600; }

  .mission { text-align: center; }
  .mission .eyebrow { justify-content: center; }
  .mission h2 { font-family: var(--display); font-weight: 600; letter-spacing: -0.02em; font-size: clamp(32px, 5.4vw, 60px); line-height: 1.03; margin: 16px auto 0; max-width: 16ch; text-wrap: balance; }
  .mission p { color: var(--muted); font-size: clamp(16px, 1.8vw, 19px); margin: 22px auto 0; max-width: 60ch; }
  .mission .hero-actions { justify-content: center; }

  footer.foot { border-top: 1px solid var(--line); padding: 46px 0 52px; background: var(--bg-2); }
  .foot-inner { display: flex; flex-wrap: wrap; gap: 24px; align-items: center; justify-content: space-between; }
  .foot-links { display: flex; flex-wrap: wrap; gap: 8px 22px; }
  .foot-links a { color: var(--muted); font-size: 14px; }
  .foot-links a:hover { color: var(--ink); }
  .foot-meta { color: var(--faint); font-size: 13px; line-height: 1.6; margin-top: 24px; }

  @media (max-width: 900px) {
    .split { grid-template-columns: 1fr; gap: 34px; }
    .cards { grid-template-columns: 1fr; }
    .pillars { grid-template-columns: repeat(2, 1fr); gap: 22px; }
    .checklist { grid-template-columns: 1fr; }
    .section { padding: 68px 0; }
  }
  @media (max-width: 560px) {
    .hero { padding: 84px 0 64px; }
    .nav-link.hide-sm { display: none; }
  }
  @media (prefers-reduced-motion: reduce) { * { transition: none !important; scroll-behavior: auto; } }
</style>
</head>
<body>

<header class="nav">
  <div class="wrap nav-inner">
    <a class="brand" href="index.php"><img src="images/logo.png" alt="Ignite Vision Media" /></a>
    <nav class="nav-links">
      <a class="nav-link hide-sm" href="#about">About</a>
      <a class="nav-link hide-sm" href="#business">What We Do</a>
      <a class="nav-link" href="affiliate.php">Affiliates</a>
      <a class="nav-link nav-cta" href="contact.php">Contact Us</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="hero-glow"></div>
  <svg class="hero-lines" viewBox="0 0 900 560" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M-20 140 C 260 40, 500 300, 940 130" stroke="rgba(255,255,255,0.10)" stroke-width="1.2"/>
    <path d="M-20 220 C 280 120, 540 360, 940 200" stroke="rgba(255,255,255,0.07)" stroke-width="1.2"/>
    <path d="M-20 300 C 300 200, 580 420, 940 270" stroke="rgba(190,242,100,0.16)" stroke-width="1.2"/>
    <path d="M-20 380 C 300 280, 600 480, 940 340" stroke="rgba(255,255,255,0.05)" stroke-width="1.2"/>
  </svg>
  <svg class="spark" style="top:150px; right:9%; width:30px; height:30px;" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0 L14 10 L24 12 L14 14 L12 24 L10 14 L0 12 L10 10 Z"/></svg>
  <svg class="spark" style="bottom:120px; left:3%; width:18px; height:18px;" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0 L14 10 L24 12 L14 14 L12 24 L10 14 L0 12 L10 10 Z"/></svg>
  <div class="wrap">
    <div class="hero-inner">
      <span class="eyebrow">Performance-driven digital publishing</span>
      <h1 class="hero-title">Ignite Your Future.<br /><span class="accent">Elevate Your Soul.</span></h1>
      <p class="hero-sub">Empowering lives through transformative digital and physical products that spark real, lasting change.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="#business">See what we do
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn-ghost" href="contact.php">Get in touch</a>
      </div>
    </div>
    <div class="pillars">
      <div class="pillar"><div class="k">Info-products</div><div class="v">eBooks, audios, courses &amp; apps</div></div>
      <div class="pillar"><div class="k">In-house media</div><div class="v">Meta, YouTube &amp; social</div></div>
      <div class="pillar"><div class="k">Owned funnels</div><div class="v">Built, tested, optimized</div></div>
      <div class="pillar"><div class="k">Digital &amp; physical</div><div class="v">Inbox to doorstep</div></div>
    </div>
  </div>
</section>

<section class="section" id="about">
  <div class="wrap split">
    <div class="about-body">
      <span class="eyebrow">About us</span>
      <h2>We are Ignite Vision Media</h2>
      <p>We don't just publish. We empower. We are a performance-driven digital publishing company specializing in high-converting personal development products that deliver real-world transformation.</p>
      <p>Whether it's spiritual growth, mental clarity, or unlocking inner wealth, our mission is simple: <strong>to help people live better, think deeper, and rise higher.</strong></p>
    </div>
    <div class="about-card">
      <div class="glow"></div>
      <div class="mark">We create. We market. <span>We transform.</span></div>
    </div>
  </div>
</section>

<section class="section" id="business" style="padding-top:0;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Our business</span>
      <h2>Not your average publishing house</h2>
      <p class="lead">We're a team of creators, marketers, and visionaries who launch direct response products that captivate, convert, and change lives.</p>
    </div>
    <div class="cards">
      <div class="fcard">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5a2 2 0 0 1 2-2h9l5 5v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"/><path d="M15 3v5h5"/></svg></div>
        <h3>Info-products that deliver</h3>
        <p>From soul-stirring eBooks to audio frequencies that tune your mind for success, we build products people love and come back for.</p>
      </div>
      <div class="fcard">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-7-7 18-2.5-7.5z"/></svg></div>
        <h3>Marketing masters</h3>
        <p>We don't rely on others to spread the message. Our in-house team dominates the digital space across Facebook, YouTube, and beyond.</p>
      </div>
      <div class="fcard">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 15l4-4 3 3 5-6"/></svg></div>
        <h3>Optimized sales funnels</h3>
        <p>We craft sleek, persuasive websites and funnels that sell, 24 hours a day, 7 days a week.</p>
      </div>
      <div class="fcard">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/></svg></div>
        <h3>Digital &amp; physical</h3>
        <p>Whether delivered to your inbox or your doorstep, our products reach people right where they are.</p>
      </div>
    </div>
  </div>
</section>

<section class="section purpose" id="purpose">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Our purpose</span>
      <h2>From conception to conversion, we do it all</h2>
      <p class="lead">We launch direct response digital and physical products in the personal development niche. We build our own brands, own our own platforms, and control the customer experience from start to finish.</p>
    </div>
    <ul class="checklist">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Product ideation &amp; development</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Website and funnel design</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Paid traffic strategies (Meta, YouTube)</li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Customer delivery &amp; ongoing engagement</li>
    </ul>
    <p class="portfolio-note">Our portfolio includes <b>eBooks, guided audios, manifestation tools, digital courses, apps,</b> and physical items like faith-based jewelry and wellness kits.</p>
  </div>
</section>

<section class="section mission" id="mission">
  <div class="wrap">
    <span class="eyebrow">Our mission</span>
    <h2>To inspire, empower, and elevate.</h2>
    <p>Our mission is to positively impact lives, spiritually, emotionally, and physically, through high-quality, meaningful products that work. We believe everyone has the power to rise above their circumstances and tap into something greater. We're here to ignite that spark.</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="contact.php">Work with us
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
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
        <a href="affiliate.php">Affiliates</a>
        <a href="contact.php">Contact Us</a>
      </nav>
    </div>
    <p class="foot-meta">&copy; Copyright Ignitist Pte Ltd. CRN: 201931552E. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>
