<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy · Ignite Vision Media</title>
  <meta name="description" content="How Ignite Vision Media collects, uses, and protects your information." />
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
  .cgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:8px}
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
    <span class="eyebrow">Legal</span>
    <h1>Privacy Policy</h1>
  </div>
</section>
<main class="wrap">
  <div class="prose">
    <p>At Ignite Vision Media, accessible from ignitevisionmedia.com , one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected.</p><p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p><p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Ignite Vision Media. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the Privacy Policy Generator.</p><h2>Consent</h2><p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p><h2>Information we collect</h2><p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p><p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p><p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p><h2>How we use your information</h2><ul><li>We use the information we collect in various ways, including to:</li><li>Provide, operate, and maintain our website</li><li>Improve, personalize, and expand our website</li><li>Understand and analyze how you use our website</li><li>Develop new products, services, features, and functionality</li><li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li><li>Send you emails</li><li>Find and prevent fraud</li></ul><h2>Log Files</h2><p>Ignite Vision Media follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services’ analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users’ movement on the website, and gathering demographic information.</p><h2>Cookies and Web Beacons</h2><p>Like any other website, Ignite Vision Media uses ‘cookies’. These cookies are used to store information including visitors’ preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users’ experience by customizing our web page content based on visitors’ browser type and/or other information.</p><p>For more general information on cookies, please read “What Are Cookies” from Cookie Consent.</p><h2>Our Advertising Partners</h2><p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p><h2>Google</h2><p><a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener">https://policies.google.com/technologies/ads</a></p><h2>Advertising Partners Privacy Policies</h2><p>You may consult this list to find the Privacy Policy for each of the advertising partners of Ignite Vision Media.</p><p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Ignite Vision Media, which are sent directly to users’ browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p><p>Note that Ignite Vision Media has no access to or control over these cookies that are used by third-party advertisers.</p><h2>Third Party Privacy Policies</h2><p>Ignite Vision Media’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p><p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers’ respective websites.</p><h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2><ul><li>Under the CCPA, among other rights, California consumers have the right to:</li><li>Request that a business that collects a consumer’s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</li><li>Request that a business delete any personal data about the consumer that a business has collected.</li><li>Request that a business that sells a consumer’s personal data, not sell the consumer’s personal data.</li><li>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</li></ul><h2>GDPR Data Protection Rights</h2><ul><li>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</li><li>The right to access: You have the right to request copies of your personal data. We may charge you a small fee for this service.</li><li>The right to rectification: You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</li><li>The right to erasure: You have the right to request that we erase your personal data, under certain conditions.</li><li>The right to restrict processing: You have the right to request that we restrict the processing of your personal data, under certain conditions.</li><li>The right to object to processing: You have the right to object to our processing of your personal data, under certain conditions.</li><li>The right to data portability: You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li><li>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</li></ul><h2>Children’s Information</h2><p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p><p>Ignite Vision Media does not knowingly collect any Personal Identifiable Information from children under the age of 18. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
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