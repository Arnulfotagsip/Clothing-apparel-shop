<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prescriptive Analytics - Clothing Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Inter', sans-serif; background:#f8fafc; color:#1e293b; }
    .container { max-width:1400px; margin:0 auto; padding:20px; }

    /* EXACT SAME TOPBAR AS YOUR PREDICTIVE PAGE */
    .topbar {
      background:white;
      padding:16px 32px;
      border-radius:16px;
      box-shadow:0 4px 20px rgba(0,0,0,0.08);
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:30px;
    }

    /* Plain text link — NO background, NO border, NO border-radius */
    .back-btn {
      color:#d97706;                    /* Warm amber orange to match Prescriptive */
      font-weight:600;
      font-size:1.1rem;
      text-decoration:none;
    }
    .back-btn:hover {
      text-decoration:underline;
      color:#b45309;
    }

    .suite-title {
      font-weight:600;
      color:#92400e;
      font-size:1.1rem;
    }

    header {
      text-align:center;
      margin-bottom:40px;
      padding:40px 20px;
      background:linear-gradient(135deg, #8B4513, #D2691E);
      color:white;
      border-radius:16px;
      box-shadow:0 10px 30px rgba(139,69,19,0.35);
    }
    header h1 { font-size:2.8rem; font-weight:700; margin-bottom:8px; }
    header p { font-size:1.2rem; opacity:0.95; }

    .cards {
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(380px, 1fr));
      gap:28px;
    }
    .card {
      background:white;
      border-radius:16px;
      padding:28px;
      box-shadow:0 8px 25px rgba(0,0,0,0.09);
      position:relative;
      overflow:hidden;
      transition:transform 0.3s;
    }
    .card:hover { transform:translateY(-6px); }
    .card::before {
      content:''; position:absolute; left:0; top:0; bottom:0; width:9px;
    }
    .card.green::before  { background:#16a34a; }
    .card.orange::before { background:#f59e0b; }
    .card.red::before    { background:#dc2626; }

    .card h3 { font-size:1.55rem; margin-bottom:12px; color:#92400e; }
    .condition { font-size:0.98rem; color:#64748b; line-height:1.5; margin-bottom:16px; }
    .action { font-weight:600; font-size:1.18rem; color:#1e293b; margin-bottom:14px; }
    .impact { padding:10px 18px; border-radius:10px; font-weight:600; display:inline-block; }
    .impact.green  { background:#ecfdf5; color:#166534; }
    .impact.orange { background:#fffbeb; color:#d97706; }
    .impact.red    { background:#fef2f2; color:#991b1b; }

    footer { text-align:center; padding:50px; color:#64748b; margin-top:60px; }
  </style>
</head>
<body>

<div class="container">

  <!-- NOW 100% IDENTICAL TO YOUR PREDICTIVE PAGE -->
  <div class="topbar">
    <a href="index.php" class="back-btn">Back to Main Dashboard</a>
    <div class="suite-title">Clothing Store Analytics Suite</div>
  </div>

  <header>
    <h1>Prescriptive Analytics</h1>
    <p>Actionable Recommendations</p>
  </header>

  <!-- Your 5 recommendation cards -->
  <div class="cards">
    <div class="card green">
      <h3>Increase Stock of Jackets</h3>
      <div class="condition">Jackets avg daily sale > 28 AND trend increasing</div>
      <div class="action">Order +20% more Jackets for next week</div>
      <div class="impact green">Expected Impact: +12–18% revenue uplift</div>
    </div>

    <div class="card orange">
      <h3>Run Promotion on Pants</h3>
      <div class="condition">Pants sales dropped 3 consecutive days (below 25 units)</div>
      <div class="action">15% discount on Pants next 3 days</div>
      <div class="impact orange">Expected Impact: Recover ~150 lost units</div>
    </div>

    <div class="card orange">
      <h3>Reduce Shirt Production</h3>
      <div class="condition">Shirts inventory > 500 AND sales < 23 avg last 5 days</div>
      <div class="action">Cut production by 30% for 10 days</div>
      <div class="impact orange">Expected Impact: Save 8,000 in overstock cost</div>
    </div>

    <div class="card green">
      <h3>Launch Weekend Bundle</h3>
      <div class="condition">Total Sold expected < 90 on weekend (based on forecast)</div>
      <div class="action">Bundle Shirt + Pant at 10% off</div>
      <div class="impact green">Expected Impact: +22 units sold</div>
    </div>

    <div class="card red">
      <h3>Alert: Peak Season Prep</h3>
      <div class="condition">Forecast Total Sold > 105 any day next 7 days</div>
      <div class="action">Prepare extra staff & stock</div>
      <div class="impact red">Prevent lost sales due to stockout/staff shortage</div>
    </div>
  </div>

  <footer>
    Clothing Store • Prescriptive Analytics Dashboard © 2025
  </footer>

</div>
</body>
</html>