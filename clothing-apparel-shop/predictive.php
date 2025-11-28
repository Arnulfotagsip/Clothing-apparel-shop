<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Predictive Analytics - Clothing Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Inter', sans-serif; background:#f8fafc; color:#1e293b; }
    .container { max-width:1400px; margin:0 auto; padding:20px; }

    .topbar {
      background:white; padding:16px 24px; border-radius:12px; box-shadow:0 2px 10px rgba(0,0,0,0.08);
      display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;
    }
    .back-btn { color:#10b981; font-weight:600; text-decoration:none; font-size:1.1rem; }
    .back-btn:hover { text-decoration:underline; }

    header {
      text-align:center; margin-bottom:40px; padding:40px 20px;
      background:linear-gradient(135deg, #065f46, #10b981); color:white; border-radius:16px;
      box-shadow:0 10px 30px rgba(16,185,129,0.3);
    }
    header h1 { font-size:2.8rem; font-weight:700; margin-bottom:8px; }
    header p { font-size:1.2rem; opacity:0.95; }

    .grid { display:grid; grid-template-columns: repeat(auto-fit, minmax(420px, 1fr)); gap:28px; }

    .card {
      background:white; border-radius:16px; padding:28px; box-shadow:0 8px 25px rgba(0,0,0,0.08);
      transition:transform 0.3s;
    }
    .card:hover { transform:translateY(-6px); }
    .card h2 {
      color:#065f46; font-size:1.6rem; margin-bottom:20px; text-align:center;
      border-bottom:2px solid #d1fae5; padding-bottom:10px;
    }

    canvas { border-radius:12px; background:#f8fffb; padding:16px; }

    table { width:100%; border-collapse:collapse; margin-top:16px; font-size:0.98rem; }
    th { background:#065f46; color:white; padding:14px; text-align:center; }
    td { padding:12px; text-align:center; border-bottom:1px solid #ecfdf5; }
    tr:hover td { background:#f0fdf4; }
    .forecast { background:#ecfdf5; font-weight:700; color:#065f46; }
    .actual { background:#fffbeb; }

    footer { text-align:center; padding:40px; color:#64748b; margin-top:60px; }
  </style>
</head>
<body>

<div class="container">
  <div class="topbar">
    <a href="index.php" class="back-btn">Back to Main Dashboard</a>
    <div style="font-weight:600; color:#10b981;">Clothing Store Analytics Suite</div>
  </div>

  <header>
    <h1>Predictive Analytics</h1>
    <p>30-Day Sales Forecast </p>
  </header>

  <div class="grid">

    <!-- Forecast Chart -->
    <div class="card">
      <h2>Daily Total Units Sold Forecast</h2>
      <canvas id="forecastChart"></canvas>
    </div>

    <!-- Forecast Table -->
    <div class="card">
      <h2>Next 10 Days Forecast</h2>
      <table>
        <thead>
          <tr><th>Date</th><th>Predicted Total Sold</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr class="forecast"><td>12/21/2026</td><td>92.61</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/22/2026</td><td>92.59</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/23/2026</td><td>92.57</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/24/2026</td><td>92.55</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/25/2026</td><td>92.53</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/26/2026</td><td>92.51</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/27/2026</td><td>92.49</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/28/2026</td><td>92.47</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/29/2026</td><td>92.45</td><td>Forecast</td></tr>
          <tr class="forecast"><td>12/30/2026</td><td>92.43</td><td>Forecast</td></tr>
          <tr style="background:#dcfce7; font-weight:700;">
            <td colspan="1"><strong>Average Forecast (Next 10 Days)</strong></td>
            <td><strong>92.52 units/day</strong></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <footer>
    Clothing Store • Predictive Analytics Dashboard © 2026 | Forecast generated using Excel FORECAST.LINEAR function
  </footer>
</div>

<script>
  const ctx = document.getElementById('forecastChart').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['12/1','12/2','12/3','12/4','12/5','12/6','12/7','12/8','12/9','12/10',
               '12/11','12/12','12/13','12/14','12/15','12/16','12/17','12/18','12/19','12/20',
               '12/21','12/22','12/23','12/24','12/25','12/26','12/27','12/28','12/29','12/30'],
      datasets: [{
        label: 'Actual Total Sold',
        data: [80,81,97,86,85,95,89,107,108,109,91,89,95,94,99,77,75,92.61,92.59,92.57,92.55,92.53,92.51,92.49,92.47,92.45,92.43],
        borderColor: '#3b82f6',
        backgroundColor: 'rgba(59,130,246,0.1)',
        tension: 0.3,
        pointRadius: 5,
        pointBackgroundColor: '#3b82f6'
      }, {
        label: 'Forecast (Linear Trend)',
        data: [null,null,null,null,null,null,null,null,null,null,
               null,null,null,null,null,null,null,null,null,null,
               92.61,92.59,92.57,92.55,92.53,92.51,92.49,92.47,92.45,92.43],
        borderColor: '#10b981',
        backgroundColor: 'rgba(16,185,129,0.1)',
        borderDash: [8,4],
        tension: 0.1,
        pointRadius: 6,
        pointBackgroundColor: '#10b981'
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'top', labels: { font: { size: 14 } } },
        title: { display: false }
      },
      scales: {
        y: { beginAtZero: false, title: { display: true, text: 'Total Units Sold', font: { size: 14 } } },
        x: { title: { display: true, text: 'Date (December 2026)', font: { size: 14 } } }
      }
    }
  });
</script>

</body>
</html>