<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD App</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 min-h-screen text-white">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-10 py-6">

        <div>
            <h1 class="text-3xl font-extrabold tracking-wide">
                CRUD<span class="text-blue-400">System</span>
            </h1>
        </div>

        <div class="space-x-4">
            <a href="{{ route('add') }}"
               class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-lg transition">
                Add Record
            </a>

            <a href="{{ route('show') }}"
               class="bg-green-500 hover:bg-green-600 px-5 py-2 rounded-lg transition">
                View Records
            </a>
            
            <a href="{{ route('login.page') }}"
               class="bg-purple-500 hover:bg-purple-600 px-5 py-2 rounded-lg transition">
                Login
            </a>
                
        </div>

    </nav>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left -->
            <div>

                <h1 class="text-6xl font-extrabold leading-tight mb-6">
                    Laravel CRUD
                    <span class="text-blue-400">
                        Management System
                    </span>
                </h1>

                <p class="text-lg text-gray-300 leading-relaxed mb-8">
                    Build and manage customer records easily using
                    Laravel 12 and Tailwind CSS.
                    Perform Create, Read, Update, and Delete operations
                    with a clean and responsive dashboard.
                </p>

                <div class="flex gap-4">

                    <a href="{{ route('add') }}"
                       class="bg-blue-500 hover:bg-blue-600 px-8 py-4 rounded-xl text-lg font-semibold shadow-lg transition duration-300">
                        Create Customer
                    </a>

                    <a href="{{ route('show') }}"
                       class="bg-white text-slate-900 hover:bg-gray-200 px-8 py-4 rounded-xl text-lg font-semibold shadow-lg transition duration-300">
                        View Customers
                    </a>
                 

                </div>

            </div>

            <!-- Right -->
            <div class="relative">

                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-10 shadow-2xl">

                    <h2 class="text-3xl font-bold mb-8 text-center">
                        CRUD Features
                    </h2>

                    <div class="space-y-6">

                        <div class="bg-slate-800/60 rounded-xl p-5 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-blue-500 flex items-center justify-center text-2xl">
                                +
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Create Records
                                </h3>

                                <p class="text-gray-300 text-sm">
                                    Add new customers instantly.
                                </p>
                            </div>
                        </div>

                        <div class="bg-slate-800/60 rounded-xl p-5 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-green-500 flex items-center justify-center text-2xl">
                                👁
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    View Records
                                </h3>

                                <p class="text-gray-300 text-sm">
                                    Display all customer data beautifully.
                                </p>
                            </div>
                        </div>

                        <div class="bg-slate-800/60 rounded-xl p-5 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-yellow-500 flex items-center justify-center text-2xl">
                                ✏
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Update Records
                                </h3>

                                <p class="text-gray-300 text-sm">
                                    Edit customer information anytime.
                                </p>
                            </div>
                        </div>

                        <div class="bg-slate-800/60 rounded-xl p-5 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-2xl">
                                🗑
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold">
                                    Delete Records
                                </h3>

                                <p class="text-gray-300 text-sm">
                                    Remove unnecessary records safely.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="text-center text-gray-400 py-8 border-t border-white/10">

        <p>
            Developed using Laravel 12 & Tailwind CSS
        </p>

    </footer>

</body>
</html>