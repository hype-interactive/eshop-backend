<!-- resources/views/vendor/success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <svg class="w-16 h-16 mx-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        <h1 class="text-2xl font-bold text-gray-700 mt-4">Registration Successful</h1>
        <p class="text-gray-600 mt-2">Your registration has been completed successfully. Once your account is activated, you will be able to log in and manage your vendor profile.</p>
        <a href="{{ route('customer-login') }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-500">Go to Login</a>
    </div>
</body>
</html>

