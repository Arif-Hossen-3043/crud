<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 flex items-center justify-center px-4">

    <!-- Login Container -->
    <div class="w-full max-w-md">

        <!-- Card -->
        <div class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-3xl p-8">

            <!-- Heading -->
            <div class="text-center mb-8">

                <h1 class="text-4xl font-extrabold text-white mb-2">
                    Welcome Back
                </h1>

                <p class="text-gray-300">
                    Login to your CRUD dashboard
                </p>

            </div>

            <!-- Error Message -->
            @if ($errors->any())
                <div class="bg-red-500/20 border border-red-400 text-red-200 px-4 py-3 rounded-lg mb-6">
                    <ul class="text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="" method="POST" class="space-y-6">

                @csrf

                <!-- Email -->
                <div>

                    <label class="block text-sm font-medium text-gray-200 mb-2">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required
                    >

                </div>

                <!-- Password -->
                <div>

                    <label class="block text-sm font-medium text-gray-200 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required
                    >

                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">

                    <label class="flex items-center gap-2 text-gray-300">
                        <input type="checkbox" class="rounded">
                        Remember me
                    </label>

                    <a href="#"
                       class="text-blue-300 hover:text-blue-200 transition">
                        Forgot Password?
                    </a>

                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold text-lg shadow-lg transition duration-300">

                    Login

                </button>

            </form>

            <!-- Register -->
            <div class="text-center mt-8 text-gray-300">

                Don't have an account?

                <a href="#"
                   class="text-blue-300 hover:text-blue-200 font-semibold">
                    Register
                </a>

            </div>

        </div>

    </div>

</body>
</html>