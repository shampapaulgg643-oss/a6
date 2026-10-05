<?php
// Alpaca Footprint — homepage
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['notes_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'notes_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['nickname'])) { $ok = true; $msg = 'Thank you!'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Welcome! Your first edition of Footnotes arrives next month.';
    } else { $msg = 'Please enter a valid email address.'; }
}
$month = (int) date('n');
$tip = in_array($month, [12, 1, 2]) ? 'Winter tip: layer a thin liner under a cushioned alpaca sock for long, cold days outdoors.'
     : (in_array($month, [6, 7, 8]) ? 'Summer tip: switch to a lightweight, low-cushion wool sock to keep feet drier in the heat.'
     : 'In-between season tip: a light-cushion crew sock handles cool mornings and mild afternoons.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alpaca Footprint | Sock Guide: Alpaca Wool, Sizing, Fit &amp; Care</title>
<meta name="description" content="A friendly guide to socks: why alpaca wool keeps feet warm, how fibres compare, a sock size finder, sock heights, care tips and advice for hikers.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.alpacafootprint.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Alpaca Footprint">
<meta property="og:title" content="Alpaca Footprint | Sock Guide: Alpaca Wool, Sizing, Fit &amp; Care"><meta property="og:description" content="A friendly guide to socks: why alpaca wool keeps feet warm, how fibres compare, a sock size finder, sock heights, care tips and advice for hikers.">
<meta property="og:url" content="https://www.alpacafootprint.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1552474705-dd8183e00901?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#1F2A44">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'%3E%3Crect width='40' height='40' rx='12' fill='%231F2A44'/%3E%3Cellipse cx='20' cy='25' rx='7' ry='8.5' fill='%23C8A27C'/%3E%3Cellipse cx='11.5' cy='13' rx='3' ry='3.8' fill='%23D96C75'/%3E%3Cellipse cx='20' cy='9.5' rx='3' ry='3.8' fill='%23D96C75'/%3E%3Cellipse cx='28.5' cy='13' rx='3' ry='3.8' fill='%23D96C75'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700;12..96,800&family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Alpaca Footprint", "url": "https://www.alpacafootprint.com/", "email": "hello@alpacafootprint.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Is alpaca wool itchy?", "acceptedAnswer": {"@type": "Answer", "text": "Alpaca fibre is generally smoother than many sheep’s wools because its fibre scales lie flatter, so a lot of people find it less prickly. Comfort also depends on how fine the fibre is and how the yarn is blended, so the softest socks use fine grades such as baby alpaca."}}, {"@type": "Question", "name": "Does alpaca contain lanolin?", "acceptedAnswer": {"@type": "Answer", "text": "No. Unlike sheep’s wool, alpaca fibre contains almost no lanolin, the natural wool grease. Some people who find lanolin irritating prefer alpaca for that reason, but anyone with a skin condition should check with a medical professional."}}, {"@type": "Question", "name": "Why are most alpaca socks blended with other fibres?", "acceptedAnswer": {"@type": "Answer", "text": "Pure alpaca is warm and soft but can be less elastic and durable on its own. Makers often add nylon for strength and a little elastane for stretch, especially in the heel and toe, so the sock keeps its shape and lasts longer."}}, {"@type": "Question", "name": "Can I wear wool socks in summer?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Lightweight wool and alpaca socks help manage moisture and can feel more comfortable than thick cotton in warm weather. Choose a thin, low-cushion sock in a breathable knit."}}, {"@type": "Question", "name": "How many pairs of hiking socks should I take on a trip?", "acceptedAnswer": {"@type": "Answer", "text": "A common approach is to rotate two or three pairs: one on your feet, one drying and one clean spare. Change into dry socks if your feet get wet or sweaty during the day."}}, {"@type": "Question", "name": "Do you sell socks?", "acceptedAnswer": {"@type": "Answer", "text": "No. Alpaca Footprint is an independent information website. We do not sell socks and we are not affiliated with any sock brand or retailer."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<div class="weave" aria-hidden="true"></div>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Alpaca Footprint home"><svg viewBox="0 0 40 40" aria-hidden="true"><rect width="40" height="40" rx="12" fill="#1F2A44"/><ellipse cx="20" cy="25" rx="7" ry="8.5" fill="#C8A27C"/><ellipse cx="11.5" cy="13" rx="3" ry="3.8" fill="#D96C75"/><ellipse cx="20" cy="9.5" rx="3" ry="3.8" fill="#D96C75"/><ellipse cx="28.5" cy="13" rx="3" ry="3.8" fill="#D96C75"/></svg><span>Alpaca<em>Footprint</em></span></a>
    <nav aria-label="Main navigation"><ul class="nav" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="sock-guide.html">Sock Guide</a></li><li><a href="sock-care.html">Sock Care</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero">
  <div class="wrap hero-stage">
    <div class="hero-main">
      <img src="https://images.unsplash.com/photo-1552474705-dd8183e00901?auto=format&fit=crop&w=1200&q=75" alt="standing white and brown alpaca looking at the camera" width="1200" height="1400" fetchpriority="high">
      <div class="hero-card">
        <span class="tag">Your guide to happy feet</span>
        <h1>Soft steps start with the right sock.</h1>
        <p>Alpaca Footprint explains everything worth knowing about socks: which fibres keep you warm and dry, how to find the right size and cushioning, and how to make a good pair last for years.</p>
        <div class="ctas"><a class="btn" href="sock-guide.html">Explore the sock guide</a><a class="btn btn--line" href="#size-finder">Find your size</a></div>
      </div>
    </div>
    <div class="hero-side">
      <div class="pic"><img src="https://images.unsplash.com/photo-1641399050826-9616c90427bb?auto=format&fit=crop&w=600&q=75" alt="stack of three wool socks on a wooden table" width="600" height="600"></div>
      <div class="stamp"><svg viewBox="0 0 70 70" aria-hidden="true"><circle cx="35" cy="35" r="33" fill="none" stroke="#C8A27C" stroke-width="2" stroke-dasharray="4 4"/><ellipse cx="28" cy="40" rx="7" ry="11" fill="#D96C75" transform="rotate(-8 28 40)"/><ellipse cx="43" cy="40" rx="7" ry="11" fill="#D96C75" transform="rotate(8 43 40)"/></svg><p><strong>Why &ldquo;footprint&rdquo;?</strong>Alpacas walk on soft, padded feet instead of hard hooves, treading lightly on their mountain pastures. We think good socks should feel just as gentle.</p></div>
    </div>
  </div>
</section>

<section class="facts" aria-labelledby="fa-t">
  <div class="wrap facts-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1670764732262-331943e5af5e?auto=format&fit=crop&w=700&q=75" alt="close-up of a soft skein of natural yarn" width="700" height="700" loading="lazy"></div>
    <div>
      <span class="tag">Meet the fibre</span>
      <h2 id="fa-t">What makes alpaca wool special?</h2>
      <p class="muted">Alpacas have been raised in the high Andes of South America for thousands of years. Their fleece evolved for cold nights and strong sun at altitude, which is exactly why it works so well on your feet.</p>
      <div class="fact-list">
        <div class="fact"><b>Hollow-ish</b><p>Many alpaca fibres have a partly hollow core that traps air, giving warmth without heavy weight.</p></div>
        <div class="fact"><b>No lanolin</b><p>Alpaca contains almost no wool grease, so it needs less harsh scouring during processing.</p></div>
        <div class="fact"><b>Smooth scales</b><p>Flatter fibre scales give alpaca a silky handle that many people find less prickly than coarser wools.</p></div>
        <div class="fact"><b>Natural shades</b><p>Fleece grows in a wide range of whites, fawns, browns, greys and blacks, so some yarns need no dye at all.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="compare" aria-labelledby="cm-t">
  <div class="wrap">
    <span class="tag dark">Fibre showdown</span>
    <h2 id="cm-t">How sock fibres compare</h2>
    <p class="lead">Every fibre has strengths. Most good socks blend two or three so you get warmth, comfort and durability together. Ratings below are general guides, from one to five dots.</p>
    <div class="tbl-wrap"><table class="tbl">
      <thead><tr><th>Fibre</th><th>Warmth</th><th>Softness</th><th>Moisture handling</th><th>Durability</th><th>Best for</th></tr></thead>
      <tbody>
        <tr class="hl"><td>Alpaca</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9679;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9679;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9675;&#9675;</td><td>Cold weather, lounging, hiking blends</td></tr>
        <tr><td>Merino wool</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9679;</td><td class="dots">&#9679;&#9679;&#9679;&#9675;&#9675;</td><td>All-season hiking, travel, everyday</td></tr>
        <tr><td>Cotton</td><td class="dots">&#9679;&#9679;&#9675;&#9675;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9675;</td><td class="dots">&#9679;&#9675;&#9675;&#9675;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9675;&#9675;</td><td>Casual wear in dry, mild conditions</td></tr>
        <tr><td>Nylon / polyester</td><td class="dots">&#9679;&#9679;&#9675;&#9675;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9675;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9679;</td><td>Running, reinforcement in blends</td></tr>
        <tr><td>Bamboo viscose</td><td class="dots">&#9679;&#9679;&#9675;&#9675;&#9675;</td><td class="dots">&#9679;&#9679;&#9679;&#9679;&#9679;</td><td class="dots">&#9679;&#9679;&#9679;&#9675;&#9675;</td><td class="dots">&#9679;&#9679;&#9675;&#9675;&#9675;</td><td>Warm-weather everyday socks</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="types" aria-labelledby="ty-t">
  <div class="wrap">
    <div class="head"><div><span class="tag">Socks by activity</span><h2 id="ty-t">The right sock for the job</h2></div><p>The best sock depends on what you are doing. Thickness, height and cushioning change a lot between a desk day and a mountain trail.</p></div>
    <div class="type-grid"><article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1730448111621-c0524e75b0e8?auto=format&fit=crop&w=700&q=75" alt="patterned socks laid out on a white sheet" width="700" height="480" loading="lazy"><span class="lvl">Light cushion</span></div><div class="t"><h3>Everyday crew</h3><p>Thin to medium knit for office, school and errands. Look for a seamless toe and a snug, non-binding cuff.</p></div></article><article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1530792271526-7ddf516473b3?auto=format&fit=crop&w=700&q=75" alt="person stepping on a rock on a hiking trail" width="700" height="480" loading="lazy"><span class="lvl">Medium&ndash;heavy</span></div><div class="t"><h3>Hiking</h3><p>Cushioned under the heel and ball of the foot, with arch support to keep the sock from sliding inside your boot.</p></div></article><article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1638985787285-46f05ff063f2?auto=format&fit=crop&w=700&q=75" alt="small cabin in a snowy forest" width="700" height="480" loading="lazy"><span class="lvl">Heavy</span></div><div class="t"><h3>Cold weather &amp; ski</h3><p>Taller and warmer, with padding on the shin for boots. Alpaca blends shine here for warmth without bulk.</p></div></article><article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1639843093167-ed40b985c01e?auto=format&fit=crop&w=700&q=75" alt="runner in motion on a road" width="700" height="480" loading="lazy"><span class="lvl">Ultra-light</span></div><div class="t"><h3>Running</h3><p>Thin, close-fitting and breathable, often with a quarter height to protect the Achilles from the shoe collar.</p></div></article><article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1730447153639-f559d50a91ec?auto=format&fit=crop&w=700&q=75" alt="white sneakers next to a pair of grey socks" width="700" height="480" loading="lazy"><span class="lvl">Very thin</span></div><div class="t"><h3>Liner &amp; travel</h3><p>Worn under a thicker sock to reduce friction, or alone on long flights and city walks in light shoes.</p></div></article><article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1589895869111-cab6bf8354c8?auto=format&fit=crop&w=700&q=75" alt="person wearing white socks relaxing on a bed" width="700" height="480" loading="lazy"><span class="lvl">Plush</span></div><div class="t"><h3>Lounge &amp; sleep</h3><p>Soft, loose-topped socks for cosy evenings. A loose cuff matters more here than technical features.</p></div></article></div>
  </div>
</section>

<section class="process" aria-labelledby="pr-t">
  <div class="wrap proc-grid">
    <div class="proc-pics">
      <div class="pic"><img src="https://images.unsplash.com/photo-1699805134875-83da1a5c736a?auto=format&fit=crop&w=700&q=75" alt="basket full of raw wool on a wooden floor" width="700" height="900" loading="lazy"></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1632932580949-3182167aaebb?auto=format&fit=crop&w=600&q=75" alt="rolls of spun yarn stacked on a wooden cart" width="600" height="400" loading="lazy"></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1632649027900-389e810204e6?auto=format&fit=crop&w=600&q=75" alt="woman knitting a piece of fabric by hand" width="600" height="400" loading="lazy"></div>
    </div>
    <div>
      <span class="tag">From fleece to foot</span>
      <h2 id="pr-t">How an alpaca sock is made</h2>
      <ol class="steps">
        <li><div><h3>Shearing</h3><p>Alpacas are usually shorn once a year, often in spring, which keeps them comfortable through the warmer months.</p></div></li>
        <li><div><h3>Sorting &amp; grading</h3><p>Fleece is separated by fineness and colour. The finest fibre, often called baby alpaca, goes to the softest yarns.</p></div></li>
        <li><div><h3>Washing</h3><p>Dust and plant matter are gently washed out. With so little lanolin, alpaca needs only mild scouring.</p></div></li>
        <li><div><h3>Spinning</h3><p>Fibres are carded, combed and spun into yarn, often blended with nylon for strength and elastane for stretch.</p></div></li>
        <li><div><h3>Knitting &amp; finishing</h3><p>Circular knitting machines shape the sock, then toes are closed, ideally with a flat seam so nothing rubs.</p></div></li>
      </ol>
    </div>
  </div>
</section>

<section class="finder" id="size-finder" aria-labelledby="sz-t">
  <div class="wrap">
    <div class="head"><div><span class="tag">Interactive tool</span><h2 id="sz-t">Sock size finder</h2></div><p>Socks that are too big bunch up and cause rubbing; too small and they wear through at the heel. Use your US shoe size to find a typical sock size.</p></div>
    <div class="finder-box">
      <div class="l">
        <label>Shoe sizing</label>
        <div class="seg" role="group" aria-label="Sizing"><button type="button" data-g="w" aria-pressed="true">Women&#8217;s</button><button type="button" data-g="m" aria-pressed="false">Men&#8217;s</button></div>
        <label for="shoe">US shoe size: <span class="shoe-val" id="shoe-val">8</span></label>
        <input type="range" id="shoe" min="4" max="14" step="0.5" value="8">
        <p class="muted" style="margin-top:16px;font-size:.92rem">Sizing varies between makers, so always check the specific size chart for the socks you choose.</p>
      </div>
      <div class="r" aria-live="polite">
        <p style="font-family:var(--h);font-weight:600">Your likely sock size</p>
        <div class="result" id="sock-size">M</div>
        <small id="size-note">Women&#8217;s US shoe size 8 usually fits a sock size M.</small>
      </div>
    </div>
  </div>
</section>

<section class="heights" aria-labelledby="ht-t">
  <div class="wrap">
    <div class="h-box">
      <svg viewBox="0 0 340 400" role="img" aria-label="Diagram of a leg showing common sock heights from no-show to knee-high">
<path d="M95 20 C92 120 100 200 105 300 C106 325 100 345 96 360 L96 378 L262 378 C268 360 250 345 222 338 L172 322 C168 260 175 160 170 20 Z" fill="#EFE2D3" stroke="#1F2A44" stroke-width="2"/>
<line x1="70" y1="352" x2="270" y2="352" stroke="#C8A27C" stroke-width="5" stroke-linecap="round"/><text x="276" y="356" font-family="Mulish,sans-serif" font-size="12" font-weight="700" fill="#C8A27C">No-show</text><line x1="70" y1="322" x2="220" y2="322" stroke="#D96C75" stroke-width="5" stroke-linecap="round"/><text x="230" y="326" font-family="Mulish,sans-serif" font-size="12" font-weight="700" fill="#D96C75">Ankle</text><line x1="70" y1="296" x2="220" y2="296" stroke="#6E7B4F" stroke-width="5" stroke-linecap="round"/><text x="230" y="300" font-family="Mulish,sans-serif" font-size="12" font-weight="700" fill="#6E7B4F">Quarter</text><line x1="70" y1="236" x2="220" y2="236" stroke="#1F2A44" stroke-width="5" stroke-linecap="round"/><text x="230" y="240" font-family="Mulish,sans-serif" font-size="12" font-weight="700" fill="#1F2A44">Crew</text><line x1="70" y1="176" x2="220" y2="176" stroke="#B9505A" stroke-width="5" stroke-linecap="round"/><text x="230" y="180" font-family="Mulish,sans-serif" font-size="12" font-weight="700" fill="#B9505A">Mid-calf</text><line x1="70" y1="70" x2="220" y2="70" stroke="#8A6A4A" stroke-width="5" stroke-linecap="round"/><text x="230" y="74" font-family="Mulish,sans-serif" font-size="12" font-weight="700" fill="#8A6A4A">Knee-high</text>
</svg>
      <div>
        <span class="tag">Sock heights</span>
        <h2 id="ht-t">From no-show to knee-high</h2>
        <ul class="h-list"><li><i style="background:#C8A27C"></i><div><strong>No-show</strong><span>Hidden below the shoe line. Best with loafers and low trainers.</span></div></li><li><i style="background:#D96C75"></i><div><strong>Ankle</strong><span>Just covers the ankle bone, protecting it from shoe rub.</span></div></li><li><i style="background:#6E7B4F"></i><div><strong>Quarter</strong><span>A little higher, ideal for running and low hiking shoes.</span></div></li><li><i style="background:#1F2A44"></i><div><strong>Crew</strong><span>The classic everyday height, roughly a third up the calf.</span></div></li><li><i style="background:#B9505A"></i><div><strong>Mid-calf</strong><span>Extra warmth and protection inside taller hiking boots.</span></div></li><li><i style="background:#8A6A4A"></i><div><strong>Knee-high</strong><span>Maximum coverage for ski boots, cold weather or under dresses.</span></div></li></ul>
      </div>
    </div>
  </div>
</section>

<div class="wrap">
  <section class="split" aria-labelledby="ca-t">
    <div class="pic"><img src="https://images.unsplash.com/photo-1542355581-caf7454785ca?auto=format&fit=crop&w=900&q=75" alt="five pairs of socks pinned on a clothesline" width="900" height="760" loading="lazy"></div>
    <div>
      <span class="tag">Make them last</span>
      <h2 id="ca-t">Five-minute sock care</h2>
      <ul class="chk">
        <li>Turn socks inside out before washing to protect the outer knit and loosen trapped dirt.</li>
        <li>Wash wool and alpaca on a cool, gentle or wool cycle with a mild wool detergent.</li>
        <li>Skip fabric softener, which coats fibres and reduces their moisture handling.</li>
        <li>Air-dry flat or on a line; high dryer heat can shrink and felt animal fibres.</li>
        <li>Rotate pairs so each has time to recover its shape between wears.</li>
      </ul>
      <a class="btn" href="sock-care.html">Read the full care guide</a>
    </div>
  </section>
  <section class="split rev" style="padding-top:0" aria-labelledby="bl-t">
    <div class="pic"><img src="https://images.unsplash.com/photo-1533240332313-0db49b459ad6?auto=format&fit=crop&w=900&q=75" alt="hiker standing above a mountain valley overlooking a river" width="900" height="760" loading="lazy"></div>
    <div>
      <span class="tag">On the trail</span>
      <h2 id="bl-t">Socks and friction: avoid hot spots</h2>
      <p class="muted">Rubbing, moisture and heat are a hiker&#8217;s feet&#8217;s biggest enemies. Socks are your first line of defence.</p>
      <ul class="chk">
        <li>Choose a sock that fits snugly with no wrinkles at the heel or toes.</li>
        <li>Pick wool or synthetic blends rather than cotton, which holds moisture.</li>
        <li>Break in new boots on short walks with the socks you plan to hike in.</li>
        <li>Stop and adjust at the first sign of a hot spot rather than pushing on.</li>
        <li>Carry a dry spare pair and change at lunch on long or wet days.</li>
      </ul>
      <p class="muted" style="font-size:.9rem">This is general comfort advice. For persistent foot problems, please see a qualified health professional.</p>
    </div>
  </section>
</div>

<section class="meet" style="background:var(--moss-lt)" aria-labelledby="me-t">
  <div class="wrap">
    <div class="head"><div><span class="tag">Meet the herd</span><h2 id="me-t">Alpacas and their cousins</h2></div><p><?php echo htmlspecialchars($tip, ENT_QUOTES, 'UTF-8'); ?></p></div>
    <div class="meet-grid">
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1707229618660-f7b06364877a?auto=format&fit=crop&w=600&q=75" alt="a pair of llamas standing together in a field" width="600" height="800" loading="lazy"></div><figcaption><h3>Family ties</h3><p>Alpacas belong to the camelid family alongside llamas, vicuñas and guanacos. Llamas are larger and were traditionally bred as pack animals; alpacas were bred mainly for fleece.</p></figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1542856204-00101eb6def4?auto=format&fit=crop&w=600&q=75" alt="two young brown and white llamas on a mountain top" width="600" height="800" loading="lazy"></div><figcaption><h3>High-altitude living</h3><p>In the Andes, camelids graze on high plateaus where temperatures swing sharply between day and night, the conditions that shaped their insulating fibre.</p></figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1703944601052-ad561a18f53a?auto=format&fit=crop&w=600&q=75" alt="close-up of a fluffy small white llama" width="600" height="800" loading="lazy"></div><figcaption><h3>Gentle grazers</h3><p>Camelids have soft, padded feet and tend to nibble the tops of grasses rather than pulling them up by the roots.</p></figcaption></figure>
    </div>
  </div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="tag">FAQ</span><h2 id="fq-t">Your sock questions, answered</h2><p class="muted">Still wondering about something? Our inbox is open.</p><a class="btn btn--line" href="contact.html">Ask us</a><div class="pic"><img src="https://images.unsplash.com/photo-1580973757787-e22cdecb9cd5?auto=format&fit=crop&w=800&q=75" alt="a pair of colourful socks lying on a bed" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>Is alpaca wool itchy?</summary><p>Alpaca fibre is generally smoother than many sheep&#8217;s wools because its fibre scales lie flatter, so a lot of people find it less prickly. Comfort also depends on how fine the fibre is and how the yarn is blended, so the softest socks use fine grades such as baby alpaca.</p></details><details><summary>Does alpaca contain lanolin?</summary><p>No. Unlike sheep&#8217;s wool, alpaca fibre contains almost no lanolin, the natural wool grease. Some people who find lanolin irritating prefer alpaca for that reason, but anyone with a skin condition should check with a medical professional.</p></details><details><summary>Why are most alpaca socks blended with other fibres?</summary><p>Pure alpaca is warm and soft but can be less elastic and durable on its own. Makers often add nylon for strength and a little elastane for stretch, especially in the heel and toe, so the sock keeps its shape and lasts longer.</p></details><details><summary>Can I wear wool socks in summer?</summary><p>Yes. Lightweight wool and alpaca socks help manage moisture and can feel more comfortable than thick cotton in warm weather. Choose a thin, low-cushion sock in a breathable knit.</p></details><details><summary>How many pairs of hiking socks should I take on a trip?</summary><p>A common approach is to rotate two or three pairs: one on your feet, one drying and one clean spare. Change into dry socks if your feet get wet or sweaty during the day.</p></details><details><summary>Do you sell socks?</summary><p>No. Alpaca Footprint is an independent information website. We do not sell socks and we are not affiliated with any sock brand or retailer.</p></details></div>
  </div>
</section>

<section class="notes" id="footnotes" aria-labelledby="nt-t">
  <div class="wrap">
    <div class="notes-box">
      <div class="in">
        <span class="tag dark">Monthly email</span>
        <h2 id="nt-t">Footnotes</h2>
        <p>A short monthly note with seasonal sock tips, fibre facts and care reminders. No spam and no sales pitches.</p>
        <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <form method="post" action="index.php#footnotes">
          <label for="ne" class="skip">Email address</label>
          <input type="email" id="ne" name="notes_email" placeholder="you@example.com" required autocomplete="email">
          <input type="text" name="nickname" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Subscribe</button>
        </form>
        <p class="small">See our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
      </div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1609537643158-a0fe43b1d830?auto=format&fit=crop&w=800&q=75" alt="person in blue jeans wearing a grey wool sock" width="800" height="600" loading="lazy"></div>
    </div>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="weave" aria-hidden="true"></div>
  <div class="wrap inner">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 40 40" aria-hidden="true"><rect width="40" height="40" rx="12" fill="#1F2A44"/><ellipse cx="20" cy="25" rx="7" ry="8.5" fill="#C8A27C"/><ellipse cx="11.5" cy="13" rx="3" ry="3.8" fill="#D96C75"/><ellipse cx="20" cy="9.5" rx="3" ry="3.8" fill="#D96C75"/><ellipse cx="28.5" cy="13" rx="3" ry="3.8" fill="#D96C75"/></svg><span>Alpaca<em>Footprint</em></span></a><p>A friendly guide to warm, comfortable feet: sock fibres, fit, cushioning and care, with a soft spot for alpaca wool.</p></div>
      <div><h4>Explore</h4><a href="sock-guide.html">Sock Guide</a><a href="sock-care.html">Sock Care</a><a href="index.php#size-finder">Size Finder</a><a href="about.html">About</a><a href="contact.html">Contact</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Say hello</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@alpacafootprint.com">hello@alpacafootprint.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Alpaca Footprint. All rights reserved.</span><span>Photos from Unsplash under the Unsplash License.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, if you agree, analytics cookies to improve our guides. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
