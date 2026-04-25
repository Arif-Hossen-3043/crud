@include('layouts.nav-bar')
@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="max-w-5xl mx-auto mt-10 px-4">

    <!-- Add Customer Form -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">

        <h2 class="text-xl font-bold mb-4 text-gray-800">
            Add Customer Record
        </h2>

        <form action="{{ route('form.store') }}" method="POST">
@csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- Customer Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Customer UserName
                    </label>

                    <input 
                        type="text"
                        name="username"
                        placeholder="Enter Customer Name"
                        class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>
                


 <!-- Customer Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Customer Email
                    </label>

                    <input 
                        type="email"
                        name="email"
                        placeholder="Enter Customer email"
                        class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>

                    <input 
                        type="password"
                        name="password"
                        placeholder="Enter Password"
                        class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button 
                    type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition"
                >
                    Add Record
                </button>
            </div>

        </form>

    </div>

