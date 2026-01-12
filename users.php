<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Users - Admin Panel</title>
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
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.5);
      align-items: center;
      justify-content: center;
    }

    .modal-content {
      background: white;
      padding: 30px;
      border-radius: 15px;
      width: 400px;
      max-width: 90%;
    }

    .modal-content h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .modal-content input, .modal-content select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .modal-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
    }

    .modal-buttons button {
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    .save-btn {
      background: #4facfe;
      color: white;
    }

    .cancel-btn {
      background: #ccc;
    }

    .edit-btn, .delete-btn {
      margin-right: 5px;
      padding: 5px 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    .edit-btn {
      background-color: #00b894;
      color: white;
    }

    .delete-btn {
      background-color: #d63031;
      color: white;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>AdminPanel</h2>
  <ul>
    <li>🏠 <a href="adminDashboard.php" style="color: inherit; text-decoration: none;">Dashboard</a></li>
    <li>🚌 <a href="manage-schedules.php" style="color: inherit; text-decoration: none;">Manage Schedules</a></li>
    <li class="active">👥 <a href="users.php" style="color: inherit; text-decoration: none;">Users</a></li>
    <li>📈 <a href="reports.php" style="color: inherit; text-decoration: none;">Reports</a></li>
    <li>⚙️ <a href="settings.php" style="color: inherit; text-decoration: none;">Settings</a></li>
    <li>🔓 <a href="index.php" style="color: inherit; text-decoration: none;">Logout</a></li>
  </ul>
</div>

<div class="main-content">
  <div class="topbar">
    <div class="search">
      <input type="text" placeholder="Search users...">
    </div>
    <div class="user">
      <img src="https://i.imgur.com/0y0y0y0.png" alt="Admin" />
      <span>Admin</span>
    </div>
  </div>

  <div class="header-section">
    <h2>Manage Users</h2>
    <button class="add-schedule-btn" onclick="openModal()">➕ Add User</button>
  </div>

  <div class="table-section">
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Bookings</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="user-table-body">
        <tr>
          <td>#001</td>
          <td>Ali Raza</td>
          <td>ali@example.com</td>
          <td>5</td>
          <td>User</td>
          <td>
            <button class="edit-btn" onclick="editUser(this)">Edit</button>
            <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
          </td>
        </tr>
        <tr>
          <td>#002</td>
          <td>Fatima Noor</td>
          <td>fatima@example.com</td>
          <td>2</td>
          <td>User</td>
          <td>
            <button class="edit-btn" onclick="editUser(this)">Edit</button>
            <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
          </td>
        </tr>
        <tr>
          <td>#003</td>
          <td>Admin</td>
          <td>admin@example.com</td>
          <td>-</td>
          <td>Admin</td>
          <td>
            <button class="edit-btn" onclick="editUser(this)">Edit</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div id="userModal" class="modal">
  <div class="modal-content">
    <h2 id="modal-title">Add New User</h2>
    <input type="text" id="name" placeholder="Name">
    <input type="email" id="email" placeholder="Email">
    <input type="number" id="bookings" placeholder="Bookings">
    <select id="role">
      <option value="User">User</option>
      <option value="Admin">Admin</option>
    </select>
    <div class="modal-buttons">
      <button class="save-btn" onclick="saveUser()">Save</button>
      <button class="cancel-btn" onclick="closeModal()">Cancel</button>
    </div>
  </div>
</div>

<script>
  let editingRow = null;

  function openModal(isEdit = false) {
    document.getElementById('userModal').style.display = 'flex';
    if (!isEdit) {
      document.getElementById('modal-title').textContent = "Add New User";
      document.getElementById('name').value = '';
      document.getElementById('email').value = '';
      document.getElementById('bookings').value = '';
      document.getElementById('role').value = 'User';
      editingRow = null;
    }
  }

  function closeModal() {
    document.getElementById('userModal').style.display = 'none';
  }

  function saveUser() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const bookings = document.getElementById('bookings').value;
    const role = document.getElementById('role').value;

    if (editingRow) {
      editingRow.cells[1].textContent = name;
      editingRow.cells[2].textContent = email;
      editingRow.cells[3].textContent = bookings;
      editingRow.cells[4].textContent = role;
    } else {
      const table = document.getElementById('user-table-body');
      const newRow = table.insertRow();
      const idCell = newRow.insertCell(0);
      const nameCell = newRow.insertCell(1);
      const emailCell = newRow.insertCell(2);
      const bookingsCell = newRow.insertCell(3);
      const roleCell = newRow.insertCell(4);
      const actionsCell = newRow.insertCell(5);

      const lastRow = table.rows[table.rows.length - 2];
      const lastId = lastRow ? parseInt(lastRow.cells[0].textContent.replace('#', '')) : 0;
      const newId = lastId + 1;

      idCell.textContent = `#${newId}`;
      nameCell.textContent = name;
      emailCell.textContent = email;
      bookingsCell.textContent = bookings;
      roleCell.textContent = role;
      actionsCell.innerHTML = `
        <button class="edit-btn" onclick="editUser(this)">Edit</button>
        <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
      `;
    }

    closeModal();
  }

  function editUser(button) {
    editingRow = button.parentElement.parentElement;
    document.getElementById('name').value = editingRow.cells[1].textContent;
    document.getElementById('email').value = editingRow.cells[2].textContent;
    document.getElementById('bookings').value = editingRow.cells[3].textContent;
    document.getElementById('role').value = editingRow.cells[4].textContent;
    document.getElementById('modal-title').textContent = "Edit User";
    openModal(true);
  }

  function deleteUser(button) {
    const row = button.parentElement.parentElement;
    if (confirm('Are you sure you want to delete this user?')) {
      row.remove();
    }
  }
  const searchInput = document.querySelector('.search input');
  searchInput.addEventListener('input', function() {
    const filter = searchInput.value.toLowerCase();
    const rows = document.querySelectorAll('#user-table-body tr');
    
    rows.forEach(row => {
      const name = row.cells[1].textContent.toLowerCase();
      const email = row.cells[2].textContent.toLowerCase();
      const role = row.cells[4].textContent.toLowerCase();
      
      if (name.includes(filter) || email.includes(filter) || role.includes(filter)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });

</script>