@include('layouts.nav-bar')

<div class="max-w-5xl mx-auto mt-10 px-4">

    <h2 class="text-2xl font-bold mb-6 text-gray-800">
        Customer Records
    </h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">

            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">CustomerName</th>
                    <th class="px-4 py-2 border">Password</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($customers as $customer)

                    <tr>

                        <td class="px-4 py-2 border">
                            {{ $customer->id }}
                        </td>

                        <td class="px-4 py-2 border">
                            {{ $customer->username }}
                        </td>

                        <td class="px-4 py-2 border">
                            {{ $customer->password }}
                        </td>

                        <td class="px-4 py-2 border">

                            <a href="{{ route('edit', $customer->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">

                                Edit

                            </a>

                           <form action="{{ route('customer.delete', $customer->id) }}" method="POST">
                                @csrf

                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded"
                                    onclick="return confirm('Are you sure to delete?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>
    </div>

</div>