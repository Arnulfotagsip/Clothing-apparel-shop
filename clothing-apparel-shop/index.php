<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothing Store Analytics Dashboard</title>
  <style>
    body { margin:0; font-family: system-ui, sans-serif; background:#f1f5f9; color:#1e293b; }
    .container { max-width:1200px; margin:40px auto; padding:0 20px; }
    header { text-align:center; padding:40px 20px; background:linear-gradient(135deg,#1e40af,#3b82f6); color:white; border-radius:16px; box-shadow:0 10px 30px rgba(0,0,0,0.15); }
    header h1 { margin:0; font-size:2.5rem; font-weight:700; }
    header p { margin:12px 0 0; opacity:0.9; font-size:1.1rem; }

    .btn-group { display:flex; gap:20px; justify-content:center; margin:40px 0; flex-wrap:wrap; }
    .btn { padding:18px 40px; font-size:1.2rem; font-weight:600; border:none; border-radius:12px; cursor:pointer; transition:0.3s; flex:1; max-width:300px; box-shadow:0 6px 20px rgba(0,0,0,0.1); }
    .btn-desc { background:#3b82f6; color:white; }
    .btn-pred { background:#10b981; color:white; }
    .btn-pres { background:#f59e0b; color:white; }
    .btn:hover { transform:translateY(-4px); box-shadow:0 12px 30px rgba(0,0,0,0.2); }

    .card { background:white; border-radius:16px; padding:30px; margin-top:30px; box-shadow:0 8px 25px rgba(0,0,0,0.08); }
    table { width:100%; border-collapse:collapse; margin-top:20px; }
    th { background:#1e40af; color:white; padding:16px; text-align:left; font-weight:500; }
    td { padding:14px 16px; border-bottom:1px solid #e2e8f0; text-align:right; }
    td:first-child { text-align:left; font-weight:500; }
    tr:hover { background:#f8fafc; }
    .total td { background:#dbeafe; font-weight:bold; font-size:1.1rem; border-top:3px double #3b82f6; }
    .revenue { color:#059669; font-weight:700; }

    @media (max-width:768px){
      .btn-group { flex-direction:column; }
      .btn { max-width:none; }
      table,thead,tbody,th,td,tr{display:block;}
      thead tr{position:absolute;top:-9999px;left:-9999px;}
      tr{margin:12px 0; border:1px solid #ddd; border-radius:12px; background:white;}
      td{position:relative; padding-left:50%; text-align:right;}
      td:before{position:absolute; left:12px; width:45%; font-weight:bold; text-align:left; content:attr(data-label); color:#3b82f6;}
    }
  </style>
</head>
<body>

<div class="container">
  <header>
    <h1>Clothing Store Analytics</h1>
    <p>Complete Sales Intelligence Dashboard </p>
  </header>

  <div class="btn-group">
    <button class="btn btn-desc" onclick="location.href='descriptive.php'">Descriptive Analytics<br><small>What Happened?</small></button>
    <button class="btn btn-pred" onclick="location.href='predictive.php'">Predictive Analytics<br><small>What Will Happen?</small></button>
    <button class="btn btn-pres" onclick="location.href='prescriptive.php'">Prescriptive Analytics<br><small>What Should We Do?</small></button>
  </div>

  <div class="card">
    <h2 style="text-align:center; color:#1e40af;">Descriptive Analytics – Daily Sales Summary</h2>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>SHIRTS</th>
          <th>PANTS</th>
          <th>JACKETS</th>
          <th>Revenue ($)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td data-label="Date">12/1/2026</td><td>22977</td><td>35976</td><td>35982</td><td class="revenue">94,935</td></tr>
        <tr><td data-label="Date">12/2/2026</td><td>20979</td><td>38974</td><td>39980</td><td class="revenue">99,933</td></tr>
        <tr><td data-label="Date">12/3/2026</td><td>25974</td><td>41972</td><td>43978</td><td class="revenue">111,924</td></tr>
        <tr><td data-label="Date">12/4/2026</td><td>20979</td><td>44970</td><td>47976</td><td class="revenue">113,925</td></tr>
        <tr><td data-label="Date">12/5/2026</td><td>22977</td><td>43471</td><td>45977</td><td class="revenue">112,425</td></tr>
        <tr><td data-label="Date">12/6/2026</td><td>23976</td><td>50966</td><td>55972</td><td class="revenue">130,914</td></tr>
        <tr><td data-label="Date">12/7/2026</td><td>24975</td><td>31479</td><td>59970</td><td class="revenue">116,424</td></tr>
        <tr><td data-label="Date">12/8/2026</td><td>20979</td><td>56962</td><td>63968</td><td class="revenue">141,909</td></tr>
        <tr><td data-label="Date">12/9/2026</td><td>23976</td><td>52465</td><td>59970</td><td class="revenue">136,411</td></tr>
        <tr><td data-label="Date">12/10/2026</td><td>27972</td><td>47968</td><td>53973</td><td class="revenue">129,913</td></tr>
        <tr><td data-label="Date">12/11/2026</td><td>20979</td><td>46469</td><td>51974</td><td class="revenue">119,422</td></tr>
        <tr><td data-label="Date">12/12/2026</td><td>18881</td><td>49467</td><td>55972</td><td class="revenue">124,420</td></tr>
        <tr><td data-label="Date">12/13/2026</td><td>25974</td><td>55463</td><td>61969</td><td class="revenue">143,406</td></tr>
        <tr><td data-label="Date">12/14/2026</td><td>23976</td><td>58461</td><td>65967</td><td class="revenue">148,404</td></tr>
        <tr><td data-label="Date">12/15/2026</td><td>26975</td><td>32978</td><td>67966</td><td class="revenue">127,917</td></tr>
        <tr><td data-label="Date">12/16/2026</td><td>24975</td><td>34477</td><td>57971</td><td class="revenue">117,423</td></tr>
        <tr><td data-label="Date">12/17/2026</td><td>29970</td><td>23984</td><td>59970</td><td class="revenue">113,924</td></tr>
        <tr><td data-label="Date">12/18/2026</td><td>20979</td><td>35976</td><td>57971</td><td class="revenue">114,926</td></tr>
        <tr><td data-label="Date">12/19/2026</td><td>17982</td><td>32978</td><td>53973</td><td class="revenue">104,933</td></tr>
        <tr><td data-label="Date">12/20/2026</td><td>19980</td><td>31479</td><td>51974</td><td class="revenue">103,433</td></tr>

        <tr class="total">
          <td><strong>TOTAL (20 days)</strong></td>
          <td><strong>466,533</strong></td>
          <td><strong>846,935</strong></td>
          <td><strong>1,093,453</strong></td>
          <td class="revenue"><strong>$2,406,921</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>