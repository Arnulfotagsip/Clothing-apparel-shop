<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Descriptive Analytics - Clothing Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Inter', sans-serif; background:#f8fafc; color:#1e293b; }
    .container { max-width:1400px; margin:0 auto; padding:20px; }

    .topbar { background:white; padding:16px 24px; border-radius:12px; box-shadow:0 2px 10px rgba(0,0,0,0.08);
      display:flex; justify-content:space-between; align-items:center; margin-bottom:30px; }
    .back-btn { color:#3b82f6; font-weight:600; text-decoration:none; font-size:1.1rem; }
    .back-btn:hover { text-decoration:underline; }

    header { text-align:center; margin-bottom:40px; padding:40px 20px;
      background:linear-gradient(135deg, #1e3a8a, #3b82f6); color:white; border-radius:16px;
      box-shadow:0 10px 30px rgba(59,130,246,0.3); }
    header h1 { font-size:2.8rem; font-weight:700; margin-bottom:8px; }
    header p { font-size:1.2rem; opacity:0.95; }

    .grid { display:grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); gap:24px; margin-bottom:40px; }

    .card { background:white; border-radius:16px; padding:28px; box-shadow:0 8px 25px rgba(0,0,0,0.08);
      transition:transform 0.3s; }
    .card:hover { transform:translateY(-6px); }
    .card h2 { color:#1e40af; font-size:1.5rem; margin-bottom:20px; text-align:center;
      border-bottom:2px solid #e0e7ff; padding-bottom:10px; }

    table { width:100%; border-collapse:collapse; font-size:0.98rem; }
    th { background:#1e3a8a; color:white; padding:14px 10px; text-align:center; font-weight:600; }
    td { padding:12px 10px; text-align:center; border-bottom:1px solid #f1f5f9; }
    tr:hover td { background:#f8fafc; }
    .total-row td { background:#dbeafe !important; font-weight:700; font-size:1.08rem; border-top:3px double #3b82f6; }
    .revenue { color:#059669; font-weight:700; }
    .highlight { background:#fef3c7; font-weight:600; }

    .stats-table td { font-weight:600; }
    .stats-table .label { text-align:left; color:#1e40af; }

    .scroll-table { max-height:500px; overflow-y:auto; border:1px solid #e2e8f0; border-radius:12px; }

    footer { text-align:center; padding:30px; color:#64748b; font-size:0.95rem; margin-top:50px; }
  </style>
</head>
<body>

<div class="container">
  <div class="topbar">
    <a href="index.php" class="back-btn">Back to Main Dashboard</a>
    <div style="font-weight:600; color:#1e40af;">Clothing Store Analytics Suite</div>
  </div>

  <header>
    <h1>Descriptive Analytics</h1>
    <p>Complete Sales Analysis</p>
  </header>

  <div class="grid">

    <!-- Product Prices -->
    <div class="card">
      <h2>Product Prices</h2>
      <table>
        <thead><tr><th>ITEM</th><th>PRICE (₱)</th></tr></thead>
        <tbody>
          <tr><td>SHIRT</td><td>999</td></tr>
          <tr><td>PANTS</td><td>1,499</td></tr>
          <tr><td>JACKETS</td><td>1,999</td></tr>
        </tbody>
      </table>
    </div>

    <!-- Summary Statistics -->
    <div class="card">
      <h2>Summary Statistics</h2>
      <table class="stats-table">
        <tbody>
          <tr><td class="label">Shirts</td><td>Min: 18</td><td>Max: 30</td><td>Avg: 23.35</td></tr>
          <tr><td class="label">Pants</td><td>Min: 16</td><td>Max: 39</td><td>Avg: 28.25</td></tr>
          <tr><td class="label">Jackets</td><td>Min: 18</td><td>Max: 34</td><td>Avg: 27.35</td></tr>
          <tr><td class="label">Total Sold</td><td>Min: 65</td><td>Max: 96</td><td>Avg: 78.95</td></tr>
          <tr><td class="label">Revenue</td><td>Min: 94,935</td><td>Max: 148,404</td><td>Avg: 120,346.05</td></tr>
        </tbody>
      </table>
    </div>

    <!-- Grand Totals -->
    <div class="card">
      <h2>Grand Totals (20 Days)</h2>
      <table>
        <tbody>
          <tr><td>Sum of Shirts</td><td class="highlight">467</td></tr>
          <tr><td>Sum of Pants</td><td class="highlight">565</td></tr>
          <tr><td>Sum of Jackets</td><td class="highlight">547</td></tr>
          <tr><td>Sum of Total Sold</td><td class="highlight">1,579</td></tr>
          <tr><td><strong>Total Revenue</strong></td><td class="revenue"><strong>₱2,406,921</strong></td></tr>
        </tbody>
      </table>
    </div>

    <!-- Daily Sales Summary -->
    <div class="card" style="grid-column:1/-1;">
      <h2>Daily Sales Summary</h2>
      <div class="scroll-table">
        <table>
          <thead>
            <tr>
              <th>Date</th><th>SHIRTS</th><th>PANTS</th><th>JACKETS</th><th>TOTAL SOLD</th><th>Revenue (₱)</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>12/1/2026</td><td>23</td><td>24</td><td>18</td><td>65</td><td class="revenue">94,935</td></tr>
            <tr><td>12/2/2026</td><td>21</td><td>26</td><td>20</td><td>67</td><td class="revenue">99,933</td></tr>
            <tr><td>12/3/2026</td><td>26</td><td>28</td><td>22</td><td>76</td><td class="revenue">111,924</td></tr>
            <tr><td>12/4/2026</td><td>21</td><td>30</td><td>24</td><td>75</td><td class="revenue">113,925</td></tr>
            <tr><td>12/5/2026</td><td>23</td><td>29</td><td>23</td><td>75</td><td class="revenue">112,425</td></tr>
            <tr><td>12/6/2026</td><td>24</td><td>34</td><td>28</td><td>86</td><td class="revenue">130,914</td></tr>
            <tr><td>12/7/2026</td><td>25</td><td>21</td><td>30</td><td>76</td><td class="revenue">116,424</td></tr>
            <tr><td>12/8/2026</td><td>21</td><td>38</td><td>32</td><td>91</td><td class="revenue">141,909</td></tr>
            <tr><td>12/9/2026</td><td>24</td><td>35</td><td>30</td><td>89</td><td class="revenue">136,411</td></tr>
            <tr><td>12/10/2026</td><td>28</td><td>32</td><td>27</td><td>87</td><td class="revenue">129,913</td></tr>
            <tr><td>12/11/2026</td><td>21</td><td>31</td><td>26</td><td>78</td><td class="revenue">119,422</td></tr>
            <tr><td>12/12/2026</td><td>19</td><td>33</td><td>28</td><td>80</td><td class="revenue">124,420</td></tr>
            <tr><td>12/13/2026</td><td>26</td><td>37</td><td>31</td><td>94</td><td class="revenue">143,406</td></tr>
            <tr><td>12/14/2026</td><td>24</td><td>39</td><td>33</td><td>96</td><td class="revenue">148,404</td></tr>
            <tr><td>12/15/2026</td><td>27</td><td>22</td><td>34</td><td>83</td><td class="revenue">127,917</td></tr>
            <tr><td>12/16/2026</td><td>25</td><td>23</td><td>29</td><td>77</td><td class="revenue">117,423</td></tr>
            <tr><td>12/17/2026</td><td>30</td><td>16</td><td>30</td><td>76</td><td class="revenue">113,924</td></tr>
            <tr><td>12/18/2026</td><td>21</td><td>24</td><td>29</td><td>74</td><td class="revenue">114,926</td></tr>
            <tr><td>12/19/2026</td><td>18</td><td>22</td><td>27</td><td>67</td><td class="revenue">104,933</td></tr>
            <tr><td>12/20/2026</td><td>20</td><td>21</td><td>26</td><td>67</td><td class="revenue">103,433</td></tr>
            <tr class="total-row">
              <td><strong>TOTAL</strong></td>
              <td><strong>467</strong></td>
              <td><strong>565</strong></td>
              <td><strong>547</strong></td>
              <td><strong>1,579</strong></td>
              <td class="revenue"><strong>₱2,406,921</strong></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <footer>
    Clothing Store • Descriptive Analytics Dashboard © 2026 | All data from December 1–20, 2026
  </footer>
</div>

</body>
</html>