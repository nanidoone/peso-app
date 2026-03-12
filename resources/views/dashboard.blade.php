<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PESO Manolo Fortich</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Navigation -->
        <nav class="bg-white rounded-lg shadow-lg p-4 mb-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <img src="/images/peso-logo.jpg" alt="PESO" class="h-10 w-10 rounded-lg">
                    <span class="font-bold text-gray-800">PESO Dashboard</span>
                </div>
                <a href="/" class="text-gray-600 hover:text-gray-900">← Back to Home</a>
            </div>
        </nav>

        <!-- Welcome Card -->
        <div class="bg-white rounded-lg shadow-lg p-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Your Dashboard! 🎉</h1>
            <p class="text-gray-600 mb-6">You have successfully logged in to PESO Manolo Fortich.</p>
            
            <!-- Demo Info -->
            <div class="bg-gray-50 rounded-lg p-4 text-left border border-gray-200">
                <h2 class="font-semibold text-gray-700 mb-2">Account Information:</h2>
                <p class="text-sm text-gray-600"><span class="font-medium">Name:</span> Juan Dela Cruz</p>
                <p class="text-sm text-gray-600"><span class="font-medium">Email:</span> juan@example.com</p>
                <p class="text-sm text-gray-600"><span class="font-medium">Account Type:</span> Job Seeker</p>
                <p class="text-sm text-gray-600 mt-2 italic">(This is a demo - data will come from database)</p>
            </div>
        </div>
    </div>
</body>
</html>