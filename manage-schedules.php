<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Schedules - Admin Panel</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background: #f5f7fa;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #2c3e50;
      color: white;
      padding: 30px 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .sidebar ul li {
      padding: 10px;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .sidebar ul li:hover, .sidebar ul .active {
      background: #34495e;
    }

    /* Main Content */
    .main-content {
      flex: 1;
      padding: 30px;
      position: relative;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
    }

    .search input {
      padding: 10px 15px;
      width: 250px;
      border-radius: 20px;
      border: 1px solid #ccc;
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
      object-fit: cover;
    }

    /* Header + Add Button */
    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .add-schedule-btn {
      background: #3498db;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
    }

    .add-schedule-btn:hover {
      background: #2980b9;
    }

    /* Table */
    table {
      width: 100%;
      background: white;
      border-collapse: collapse;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #eee;
    }

    th {
      background: #3498db;
      color: white;
      font-weight: normal;
    }

    tbody tr:hover {
      background: #f0f8ff;
    }

    /* Edit/Delete Buttons */
    .edit-btn, .delete-btn {
      padding: 7px 14px;
      border-radius: 15px;
      border: none;
      font-size: 14px;
      cursor: pointer;
      margin-right: 5px;
      transition: all 0.3s;
    }

    .edit-btn {
      background: #00c6ff;
      color: white;
    }

    .delete-btn {
      background: #ff416c;
      color: white;
    }

    .edit-btn:hover {
      background: #00a4cc;
    }

    .delete-btn:hover {
      background: #e03b58;
    }

    /* Popup Modal */
    .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .popup-content {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 20px;
      width: 400px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
      animation: fadeIn 0.3s;
    }

    .popup-content h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 15px;
    }

    .popup-content input,
    .popup-content select {
      padding: 10px;
      border-radius: 10px;
      border: none;
      background: rgba(255, 255, 255, 0.6);
    }

    .popup-actions {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .save-btn, .cancel-btn {
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
    }

    .save-btn {
      background-color: #4caf50;
      color: white;
    }

    .cancel-btn {
      background-color: #f44336;
      color: white;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px);}
      to { opacity: 1; transform: translateY(0);}
    }

  </style>
</head>
<body>

  <div class="sidebar">
    <h2>AdminPanel</h2>
    <ul>
    <li>🏠 <a href="adminDashboard.php" style="color: inherit; text-decoration: none;">Dashboard</a></li>
        <li class="active">🚌 <a href="manage-schedules.php" style="color: inherit; text-decoration: none;">Manage Schedules</a></li>
        <li >👥 <a href="users.php" style="color: inherit; text-decoration: none;">Users</a></li>
        <li>📈 <a href="reports.php" style="color: inherit; text-decoration: none;">Reports</a></li>
        <li>⚙️ <a href="settings.php" style="color: inherit; text-decoration: none;">Settings</a></li>
        <li>🔓 <a href="index.php" style="color: inherit; text-decoration: none;">Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <div class="topbar">
      <div class="search">
        <input type="text" placeholder="Search schedules...">
      </div>
      <div class="user">
        <img src="https://i.imgur.com/0y0y0y0.png" alt="Admin" />
        <span>Admin</span>
      </div>
    </div>

    <div class="header-section">
      <h2>Manage Schedules</h2>
      <button class="add-schedule-btn" onclick="openPopup()">➕ Add New Schedule</button>
    </div>

    <div class="table-section">
      <table>
        <thead>
          <tr>
            <th>Source</th>
            <th>Destination</th>
            <th>Time</th>
            <th>Ticket Price</th>
            <th>Type</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="schedule-table-body">
          <tr>
            <td>Lahore</td>
            <td>Karachi</td>
            <td>2025-05-01 08:00</td>
            <td>Rs 5,000</td>
            <td>Bus</td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Islamabad</td>
            <td>Dubai</td>
            <td>2025-05-02 10:00</td>
            <td>Rs 50,000</td>
            <td>Plane</td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Popup Modal -->
    <div class="popup" id="popup">
      <div class="popup-content glass">
        <h2>Add New Schedule</h2>
        <input type="text" placeholder="Source">
        <input type="text" placeholder="Destination">
        <input type="datetime-local" placeholder="Time">
        <input type="number" placeholder="Ticket Price (Rs)">
        <select>
          <option value="Bus">Bus</option>
          <option value="Plane">Plane</option>
        </select>
        <div class="popup-actions">
          <button class="save-btn">Save</button>
          <button class="cancel-btn" onclick="closePopup()">Cancel</button>
        </div>
      </div>
    </div>

  </div>

  <script>
let editMode = false;
let editRow = null;

function openPopup() {
  document.getElementById('popup').style.display = 'flex';
  resetPopup();
}

function closePopup() {
  document.getElementById('popup').style.display = 'none';
  resetPopup();
}

function resetPopup() {
  document.querySelector('#popup input[placeholder="Source"]').value = '';
  document.querySelector('#popup input[placeholder="Destination"]').value = '';
  document.querySelector('#popup input[placeholder="Time"]').value = '';
  document.querySelector('#popup input[placeholder="Ticket Price (Rs)"]').value = '';
  document.querySelector('#popup select').value = 'Bus';
  editMode = false;
  editRow = null;
}

// Handle Save button click
document.querySelector('.save-btn').addEventListener('click', function() {
  const source = document.querySelector('#popup input[placeholder="Source"]').value;
  const destination = document.querySelector('#popup input[placeholder="Destination"]').value;
  const time = document.querySelector('#popup input[placeholder="Time"]').value;
  const price = document.querySelector('#popup input[placeholder="Ticket Price (Rs)"]').value;
  const type = document.querySelector('#popup select').value;

  if (!source || !destination || !time || !price || !type) {
    alert('Please fill all fields!');
    return;
  }

  if (editMode && editRow) {
    // Update existing row if in edit mode
    editRow.children[0].textContent = source;
    editRow.children[1].textContent = destination;
    editRow.children[2].textContent = time;
    editRow.children[3].textContent = 'Rs ' + price;
    editRow.children[4].textContent = type;
  } else {
    // Add new row if not in edit mode
    const tableBody = document.getElementById('schedule-table-body');
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
      <td>${source}</td>
      <td>${destination}</td>
      <td>${time}</td>
      <td>Rs ${price}</td>
      <td>${type}</td>
      <td>
        <button class="edit-btn">Edit</button>
        <button class="delete-btn">Delete</button>
      </td>
    `;
    tableBody.appendChild(newRow);
  }

  closePopup();  // Close the popup
  attachEventListeners(); // Re-attach listeners for new buttons
  resetPopup();  // Reset the popup fields
});

// Edit button logic
function attachEventListeners() {
  const editButtons = document.querySelectorAll('.edit-btn');
  const deleteButtons = document.querySelectorAll('.delete-btn');

  editButtons.forEach(button => {
    button.onclick = function() {
      editMode = true;
      editRow = button.parentElement.parentElement;

      const source = editRow.children[0].textContent;
      const destination = editRow.children[1].textContent;
      const time = editRow.children[2].textContent;
      const price = editRow.children[3].textContent.replace('Rs ', '');
      const type = editRow.children[4].textContent;

      document.querySelector('#popup input[placeholder="Source"]').value = source;
      document.querySelector('#popup input[placeholder="Destination"]').value = destination;
      document.querySelector('#popup input[placeholder="Time"]').value = time;
      document.querySelector('#popup input[placeholder="Ticket Price (Rs)"]').value = price;
      document.querySelector('#popup select').value = type;

      openPopup();
    }
  });

  deleteButtons.forEach(button => {
    button.onclick = function() {
      if (confirm('Are you sure you want to delete this schedule?')) {
        const row = button.parentElement.parentElement;
        row.remove();
      }
    }
  });
}

// Search/filter schedules
document.querySelector('.search input').addEventListener('input', function() {
  const searchTerm = this.value.toLowerCase();
  const rows = document.querySelectorAll('#schedule-table-body tr');

  rows.forEach(row => {
    const rowText = row.innerText.toLowerCase();
    if (rowText.includes(searchTerm)) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
});

// Initial attach
attachEventListeners();
</script>



</body>
</html>
