<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #111827;
      padding: 30px 20px;
      color: #fff;
      position: fixed;
      height: 100%;
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.5);
    }

    .sidebar h2 {
      font-size: 24px;
      margin-bottom: 40px;
      text-align: center;
      color: #4facfe;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      padding: 15px;
      font-size: 18px;
      cursor: pointer;
      border-radius: 10px;
      margin-bottom: 10px;
      transition: 0.3s;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: #fff;
      display: block;
    }

    .sidebar ul li.active,
    .sidebar ul li:hover {
      background: #1f2937;
    }

    /* Main */
    .main-content {
      margin-left: 240px;
      padding: 20px;
      width: 100%;
    }

    /* Topbar */
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .search input {
      padding: 10px;
      width: 300px;
      border: none;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.5);
    }

    .user {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .card {
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      color: #333;
      transition: 0.4s;
      background: rgba(255, 255, 255, 0.5);
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 10px 20px rgba(0,0,0,0.2);
    }

    /* Charts */
    .charts {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .chart {
      background: rgba(255, 255, 255, 0.5);
      padding: 20px;
      border-radius: 20px;
    }

    /* Tables */
    .table-section {
      margin-bottom: 50px;
    }

    .table-section table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    .table-section th, .table-section td {
      padding: 12px 15px;
      text-align: left;
      background: rgba(255, 255, 255, 0.7);
      border-bottom: 1px solid #ddd;
    }

    .table-section tr:hover {
      background: rgba(255, 255, 255, 0.9);
    }

    .add-schedule-btn {
      padding: 10px 20px;
      background: #4facfe;
      border: none;
      border-radius: 30px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .add-schedule-btn:hover {
      background: #00f2fe;
    }
  </style>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

  <div class="sidebar">
    <h2>AdminPanel</h2>
    <ul>
      <li class="active"><a href="#dashboard">🏠 Dashboard</a></li>
      <li><a href="manage-schedules.php">🚌 Manage Schedules</a></li>
      <li><a href="users.php">👥 Users</a></li>
      <li><a href="reports.php">📈 Reports</a></li>
      <li><a href="settings.php">⚙️ Settings</a></li>
      <li><a href="index.php">🔓 Logout</a></li>
    </ul>
  </div>

  <div class="main-content" id="dashboard">
    <div class="topbar">
      <div class="search">
        <input type="text" placeholder="Search...">
      </div>
      <div class="user">
        <img src="https://i.imgur.com/0y0y0y0.png" alt="Admin" />
        <span>Admin</span>
      </div>

    </div>

    <div class="cards">
      <div class="card">
        <h3>Total Users</h3>
        <p>1,024</p>
      </div>
      <div class="card">
        <h3>Total Bookings</h3>
        <p>8,542</p>
      </div>
      <div class="card">
        <h3>Revenue</h3>
        <p>PKR 1.2M</p>
      </div>
      <div class="card">
        <h3>Schedules</h3>
        <p>120 Active</p>
      </div>
    </div>

    <div class="charts">
      <div class="chart">
        <h3>Bookings Over Time</h3>
        <canvas id="bookingsChart" width="400" height="200"></canvas>
      </div>
      <div class="chart">
        <h3>Bus vs Plane Ratio</h3>
        <canvas id="busPlaneChart" width="400" height="200"></canvas>
      </div>
    </div>

    <div class="table-section" id="schedules">
      <h3>Latest Bookings</h3>
      <table>
        <thead>
          <tr>
            <th>User</th>
            <th>Type</th>
            <th>Destination</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ali Khan</td>
            <td>Plane</td>
            <td>Islamabad</td>
            <td>2025-05-02</td>
          </tr>
          <tr>
            <td>Sara Ahmed</td>
            <td>Bus</td>
            <td>Lahore</td>
            <td>2025-05-05</td>
          </tr>
        </tbody>
      </table>

      <button class="add-schedule-btn"><a href="manage-schedules.php" style="text-decoration:none;">➕ Add New Schedule</a></button>
    </div>

  </div>

<script>
  // Bookings Over Time Chart
  new Chart(document.getElementById('bookingsChart'), {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      datasets: [{
        label: 'Bookings',
        data: [120, 190, 300, 500, 800, 1300],
        fill: true,
        borderColor: '#4facfe',
        backgroundColor: 'rgba(79, 172, 254, 0.2)',
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
    }
  });

  // Bus vs Plane Chart
  new Chart(document.getElementById('busPlaneChart'), {
    type: 'doughnut',
    data: {
      labels: ['Bus', 'Plane'],
      datasets: [{
        label: 'Bus vs Plane',
        data: [65, 35],
        backgroundColor: ['#36a2eb', '#ff6384'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
</script>

</body>
</html>
