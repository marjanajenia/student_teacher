<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Top Bar -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-blue-600">MySchool Dashboard</h1>
    <div class="flex items-center gap-4">
      <span class="text-gray-600">John Doe</span>
      <img src="https://via.placeholder.com/40" class="rounded-full h-10 w-10" alt="Avatar" />
      <button class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
    </div>
  </header>

  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-700 min-h-screen text-white">
      <nav class="p-4 space-y-3">
        <a href="#" class="block p-2 rounded hover:bg-blue-600">🏠 Dashboard</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">📚 My Classes</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">📝 Exams & Results</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">📅 Attendance</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">💳 Fees</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">📥 Downloads</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">💬 Notices</a>
        <a href="#" class="block p-2 rounded hover:bg-blue-600">⚙️ Settings</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-6">

      <!-- Greeting -->
      <div>
        <h2 class="text-2xl font-semibold text-gray-700">Welcome, John!</h2>
        <p class="text-gray-500">Here is your dashboard overview</p>
      </div>

      <!-- Summary Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded shadow">
          <h3 class="text-sm text-gray-500">Class</h3>
          <p class="text-xl font-bold text-blue-600">8A</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <h3 class="text-sm text-gray-500">Subjects</h3>
          <p class="text-xl font-bold text-blue-600">7</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <h3 class="text-sm text-gray-500">Attendance</h3>
          <p class="text-xl font-bold text-blue-600">92%</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <h3 class="text-sm text-gray-500">Next Exam</h3>
          <p class="text-xl font-bold text-blue-600">10 Aug</p>
        </div>
      </div>

      <!-- Charts & Notices Placeholder -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white p-4 rounded shadow h-64">
          <h4 class="text-lg font-semibold text-gray-600 mb-2">Exam Scores</h4>
          <div class="h-full flex items-center justify-center text-gray-400">[Insert Chart Here]</div>
        </div>
        <div class="bg-white p-4 rounded shadow h-64">
          <h4 class="text-lg font-semibold text-gray-600 mb-2">Recent Notices</h4>
          <ul class="list-disc pl-5 text-gray-600">
            <li>Final exam starts 10 August</li>
            <li>Submit project by 5 August</li>
            <li>Parent meeting on 3 August</li>
          </ul>
        </div>
      </div>

    </main>
  </div>

</body>
</html>
