<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MQuest Admin Dashboard</title>
   <link rel="stylesheet" href="{{ asset('assets/css/home_admin_style.css') }}">
</head>
<body>
  <div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">M<span>Quest</span></h2>
      <p class="subtitle">A Matatag E-learning Application</p>
      <nav>
        <ul>
          <li class="active">📊 Dashboard</li>
          <li class="dropdown">
            📘 Curriculum & Lessons
            <ul class="submenu">
              <li>➤ Manage Curriculum</li>
              <li>➤ Lesson Library</li>
            </ul>
          </li>
          <li>👥 User Management</li>
          <li>📜 Activity Log</li>
          <li class="dropdown">
            ⚙️ General Settings
            <ul class="submenu">
              <li>➤ System Settings</li>
              <li>➤ Access Control</li>
            </ul>
          </li>
          <li>❓ Help</li>
          <li class="danger" onclick="handleLogout()">🚪 Logout</li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Header -->
      <header class="header">
        <h1>Admin Dashboard</h1>
        <div class="profile">
          <img class="avatar" src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Admin" alt="Admin Avatar">
          <div class="profile-info">
            <span id="user-email" class="email">Loading...</span>
            <span class="role">Administrator</span>
          </div>
        </div>
      </header>

      <!-- Cards -->
      <section class="cards">
        <div class="card">
          <h3>245</h3>
          <p>Total Pupils</p>
        </div>
        <div class="card">
          <h3>32</h3>
          <p>Teachers</p>
        </div>
        <div class="card">
          <h3>1</h3>
          <p>Total Class</p>
        </div>
        <div class="card">
          <h3>15</h3>
          <p>New Activities</p>
        </div>
      </section>

      <!-- Activity Log Preview -->
      <section class="student-section">
        <h2>Recent Activity</h2>
        <table class="student-table">
          <thead>
            <tr>
              <th>User</th>
              <th>Action</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mr. Santos</td>
              <td>Created new class "Math 101"</td>
              <td>2025-09-15</td>
              <td><span class="status good">Success</span></td>
            </tr>
            <tr>
              <td>Maria Lopez</td>
              <td>Reset password</td>
              <td>2025-09-14</td>
              <td><span class="status warning">Pending</span></td>
            </tr>
            <tr>
              <td>System</td>
              <td>Backup completed</td>
              <td>2025-09-14</td>
              <td><span class="status good">Success</span></td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>

    <script src="./userside_backend/user.js"></script>
    <script>

      // Load user info on page load
      document.addEventListener("DOMContentLoaded", () => {
        const userRaw = localStorage.getItem("user");
        const token = localStorage.getItem("token");

        let user = null;
        try {
          user = userRaw ? JSON.parse(userRaw) : null;
        } catch (e) {
          console.error("❌ Failed to parse user JSON:", e);
        }

        console.log("🔑 Stored token:", token);
        console.log("👤 Stored user object:", user);

        if (user?.email) {
          document.getElementById("user-email").textContent = user.email;
        }
      });

      async function handleLogout() {
        try {
          const token = localStorage.getItem('token');
          const userRaw = localStorage.getItem('user');
          const user = userRaw ? JSON.parse(userRaw) : null;
          const server_id = user?.server_id || null;

          if (!token || !server_id) {
            alert("Missing credentials. Cannot logout.");
            return;
          }

          // pass token + server_id to logout
          const success = await logout(token, server_id);

          if (success) {
            localStorage.removeItem("token");
            localStorage.removeItem("user");
            window.location.href = "index.html"; // Redirect to login
          } else {
            alert("Logout failed. Try again.");
          }
        } catch (err) {
          console.error("handleLogout error:", err);
          alert("Logout failed. Try again.");
        }
      }
    </script>
</body>
</html>
