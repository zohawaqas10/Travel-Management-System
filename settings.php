<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Settings</title>
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

    /* Settings Section */
    .settings-section {
      margin-bottom: 30px;
    }

    .settings-section h3 {
      font-size: 1.6em;
      color: #4facfe;
      margin-bottom: 20px;
    }

    .settings-card {
      background: rgba(255, 255, 255, 0.5);
      padding: 20px;
      border-radius: 20px;
      margin-bottom: 30px;
      text-align: left;
      color: #333;
      transition: 0.4s;
    }

    .settings-card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 10px 20px rgba(0,0,0,0.2);
    }

    .settings-card label {
      font-size: 1.1em;
      margin-bottom: 10px;
      display: block;
    }

    .settings-card input,
    .settings-card select {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.7);
    }

    .settings-card button {
      padding: 12px 20px;
      background: #4facfe;
      border: none;
      border-radius: 30px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .settings-card button:hover {
      background: #00f2fe;
    }

    .settings-card.hidden {
      display: none;
    }

  </style>
</head>

<body>

  <div class="sidebar">
    <h2>AdminPanel</h2>
    <ul>
      <li><a href="dashboard.php">🏠 Dashboard</a></li>
      <li><a href="manage-schedules.php">🚌 Manage Schedules</a></li>
      <li><a href="users.php">👥 Users</a></li>
      <li><a href="reports.php">📈 Reports</a></li>
      <li class="active"><a href="settings.php">⚙️ Settings</a></li>
      <li><a href="index.php">🔓 Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <div class="topbar">
      <div class="search">
        <input type="text" id="searchInput" placeholder="Search Settings..." onkeyup="searchSettings()">
      </div>
      <div class="user">
        <img src="https://i.imgur.com/0y0y0y0.png" alt="Admin" />
        <span>Admin</span>
      </div>
    </div>

    <div class="settings-section">
      <h3>Website Settings</h3>
      
      <div class="settings-card" id="websiteSettings">
        <form id="websiteSettingsForm">
          <label for="siteName">Website Name</label>
          <input type="text" id="siteName" name="siteName" value="Travel Agency">

          <label for="contactEmail">Contact Email</label>
          <input type="email" id="contactEmail" name="contactEmail" value="contact@travelagency.com">

          <label for="timezone">Timezone</label>
          <select id="timezone" name="timezone">
            <option value="UTC+0">UTC+0</option>
            <option value="UTC+5">UTC+5</option>
            <option value="UTC+10">UTC+10</option>
          </select>

          <button type="button" onclick="saveSettings('website')">Save Settings</button>
        </form>
      </div>

      <h3>User Settings</h3>
      
      <div class="settings-card" id="userSettings">
        <form id="userSettingsForm">
          <label for="maxUsers">Max Users per Day</label>
          <input type="number" id="maxUsers" name="maxUsers" value="500">

          <label for="emailNotifications">Email Notifications</label>
          <select id="emailNotifications" name="emailNotifications">
            <option value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
          </select>

          <button type="button" onclick="saveSettings('user')">Save User Settings</button>
        </form>
      </div>

    </div>

  </div>

  <script>
    // Save settings function
    function saveSettings(type) {
      const formId = type === 'website' ? 'websiteSettingsForm' : 'userSettingsForm';
      const form = document.getElementById(formId);

      // You can implement an actual AJAX request to save settings to a server here
      alert(`${type.charAt(0).toUpperCase() + type.slice(1)} Settings Saved!`);
      form.reset();
    }

    // Search functionality
    function searchSettings() {
      const searchQuery = document.getElementById('searchInput').value.toLowerCase();
      const allCards = document.querySelectorAll('.settings-card');

      allCards.forEach(card => {
        const cardText = card.innerText.toLowerCase();
        if (cardText.includes(searchQuery)) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    }
  </script>

</body>
</html>
