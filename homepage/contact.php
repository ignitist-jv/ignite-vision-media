<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us · Ignite Vision Media</title>
  <meta name="description" content="Get in touch with the Ignite Vision Media team." />
  <link rel="icon" href="/homepage/favicon.png" />
  <link rel="preconnect" href="https://api.fontshare.com" crossorigin />
  <link href="https://api.fontshare.com/v2/css?f[]=clash-grotesk@400,500,600,700&display=swap" rel="stylesheet" />
<style>
  :root{
    --bg:#0a0b0d;--bg-2:#0e1013;--surface:#14171c;--surface-2:#191d23;
    --line:rgba(255,255,255,0.09);--line-2:rgba(255,255,255,0.14);
    --ink:#f4f6f3;--muted:#9aa39a;--faint:#6b736c;--lime:#bef264;--lime-dim:#a3d95a;
    --radius:18px;--maxw:1180px;
    --font:system-ui,-apple-system,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
    --display:"Clash Grotesk",system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
  }
  *{box-sizing:border-box}
  html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
  body{margin:0;background:var(--bg);color:var(--ink);font-family:var(--font);line-height:1.6;
    -webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;overflow-x:hidden}
  a{color:inherit;text-decoration:none}
  img{max-width:100%;display:block}
  .wrap{width:100%;max-width:var(--maxw);margin:0 auto;padding:0 24px}
  .eyebrow{display:inline-flex;align-items:center;gap:9px;font-size:12px;font-weight:600;
    letter-spacing:.16em;text-transform:uppercase;color:var(--lime)}
  .eyebrow::before{content:"";width:20px;height:1px;background:var(--lime);opacity:.7}
  header.nav{position:sticky;top:0;z-index:50;backdrop-filter:saturate(140%) blur(14px);
    -webkit-backdrop-filter:saturate(140%) blur(14px);background:rgba(10,11,13,.78);border-bottom:1px solid var(--line)}
  .nav-inner{display:flex;align-items:center;justify-content:space-between;height:74px}
  .brand img{height:40px;width:auto}
  .nav-links{display:flex;align-items:center;gap:6px}
  .nav-link{color:var(--muted);font-weight:500;font-size:15px;padding:8px 14px;border-radius:999px;transition:color .2s,background .2s}
  .nav-link:hover{color:var(--ink);background:rgba(255,255,255,.05)}
  .nav-cta{color:var(--bg);background:var(--lime);font-weight:650}
  .nav-cta:hover{background:#cdf87f}
  .page-hero{position:relative;overflow:hidden;padding:88px 0 44px}
  .page-hero .glow{position:absolute;inset:-30% -10% auto -10%;height:520px;pointer-events:none;z-index:0;
    background:radial-gradient(640px 340px at 74% 0%,rgba(190,242,100,.15),transparent 60%)}
  .page-hero .inner{position:relative;z-index:1}
  .page-hero h1{font-family:var(--display);font-weight:600;letter-spacing:-.025em;
    font-size:clamp(38px,6vw,68px);line-height:1.02;margin:18px 0 0;text-wrap:balance}
  .page-hero h1 .accent{color:var(--lime)}
  .page-hero p.sub{color:var(--muted);font-size:clamp(16px,1.9vw,20px);max-width:56ch;margin:18px 0 0}
  footer.foot{border-top:1px solid var(--line);padding:46px 0 52px;background:var(--bg-2);margin-top:72px}
  .foot-inner{display:flex;flex-wrap:wrap;gap:24px;align-items:center;justify-content:space-between}
  .brand.small img{height:34px}
  .foot-links{display:flex;flex-wrap:wrap;gap:8px 22px}
  .foot-links a{color:var(--muted);font-size:14px}
  .foot-links a:hover{color:var(--ink)}
  .foot-meta{color:var(--faint);font-size:13px;line-height:1.6;margin-top:24px}
  .foot-meta a{color:var(--lime-dim)}
  /* prose (legal) */
  .prose{max-width:760px;margin:8px 0 0;font-size:16.5px;color:var(--muted)}
  .prose h2{font-family:var(--display);font-weight:600;color:var(--ink);font-size:clamp(20px,2.4vw,26px);
    letter-spacing:-.01em;line-height:1.2;margin:44px 0 6px;text-wrap:balance}
  .prose h2:first-child{margin-top:8px}
  .prose h3{color:var(--ink);font-weight:650;font-size:16.5px;letter-spacing:.02em;margin:30px 0 6px}
  .prose p{margin:14px 0}
  .prose a{color:var(--lime-dim);text-decoration:underline;text-underline-offset:2px;word-break:break-word}
  .prose ul{margin:14px 0;padding-left:0;list-style:none;display:flex;flex-direction:column;gap:10px}
  .prose ul li{position:relative;padding-left:26px}
  .prose ul li::before{content:"";position:absolute;left:2px;top:10px;width:7px;height:7px;border-radius:50%;background:var(--lime);opacity:.85}
  .prose address{font-style:normal;color:var(--ink);background:var(--surface);border:1px solid var(--line);
    border-radius:14px;padding:16px 18px;display:inline-block;margin:14px 0;line-height:1.7}
  .prose .updated{font-size:13.5px;color:var(--faint);letter-spacing:.02em}
  /* contact */
  .cgrid{display:grid;grid-template-columns:repeat(2,1fr);gap:22px;margin-top:8px;max-width:760px}
  .ccard{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:28px;display:flex;flex-direction:column}
  .ccard .ic{width:44px;height:44px;border-radius:12px;display:grid;place-items:center;background:rgba(190,242,100,.12);
    color:var(--lime);border:1px solid rgba(190,242,100,.25)}
  .ccard .ic svg{width:22px;height:22px}
  .ccard h3{font-family:var(--display);font-weight:600;font-size:19px;margin:18px 0 6px}
  .ccard p{color:var(--muted);font-size:14.5px;margin:0 0 18px}
  .ccard .mail{margin-top:auto;color:var(--lime-dim);font-weight:600;font-size:15px;word-break:break-word}
  .ccard address{font-style:normal;color:var(--ink);font-size:15px;line-height:1.65;margin-top:auto}
  @media(max-width:820px){.cgrid{grid-template-columns:1fr}}
  @media(max-width:560px){.nav-link.hide-sm{display:none}}
  @media(prefers-reduced-motion:reduce){*{transition:none!important;scroll-behavior:auto}}
</style>
</head>
<body>

<header class="nav">
  <div class="wrap nav-inner">
    <a class="brand" href="/homepage/index.php"><img src="/homepage/images/logo.png" alt="Ignite Vision Media" /></a>
    <nav class="nav-links">
      <a class="nav-link hide-sm" href="/homepage/index.php">Home</a>
      <a class="nav-link hide-sm" href="/homepage/affiliate.php">Affiliates</a>
      <a class="nav-link nav-cta" href="/homepage/contact.php">Contact Us</a>
    </nav>
  </div>
</header>

<section class="page-hero">
  <div class="glow"></div>
  <div class="wrap inner">
    <span class="eyebrow">Contact</span>
    <h1>Let's <span class="accent">talk.</span></h1>
    <p class="sub">Questions about an offer, a partnership, or your affiliate account? Reach the right team below and we'll get back to you.</p>
  </div>
</section>
<main class="wrap">
  <div class="cgrid">
    <div class="ccard">
      <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></div>
      <h3>General enquiries</h3>
      <p>Questions about our products, the company, or anything else.</p>
      <a class="mail" href="mailto:admin@ignitevisionmedia.com">admin@ignitevisionmedia.com</a>
    </div>
    <div class="ccard">
      <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
      <h3>Affiliate support</h3>
      <p>Promoting our offers? Reach the partnerships team here.</p>
      <a class="mail" href="mailto:affiliate@ignitevisionmedia.com">affiliate@ignitevisionmedia.com</a>
    </div>
  </div>
</main>

<footer class="foot">
  <div class="wrap">
    <div class="foot-inner">
      <a class="brand small" href="/homepage/index.php"><img src="/homepage/images/logo.png" alt="Ignite Vision Media" /></a>
      <nav class="foot-links">
        <a href="/content/privacy-policy.php">Privacy Policy</a>
        <a href="/content/terms-conditions.php">Terms &amp; Conditions</a>
        <a href="/content/refund-return-policy.php">Refund &amp; Return Policy</a>
        <a href="/homepage/affiliate.php">Affiliates</a>
        <a href="/homepage/contact.php">Contact Us</a>
      </nav>
    </div>
    <p class="foot-meta">&copy; Copyright Ignitist Pte Ltd. CRN: 201931552E. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>