<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

      <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full bg-white shadow-2xl rounded-2xl p-8">

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
            Login Panel
        </h2>

        <!-- Error -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" name="email"
                       class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"
                       placeholder="arit@test.com"
                       value="arit@test.com"
                       required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input type="password" name="password"
                       class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"
                       placeholder="11111111"
                       required>
            </div>

            <!-- Button -->
            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Login
            </button>

        </form>

        <p class="text-center text-sm text-gray-500 mt-4">
            Default: arit@test.com / 11111111
        </p>

    </div>

</body>
</html>

