<x-app-layout>
    <x-dashboard.sidebar>
        <h1 class="font-bold text-3xl mt-3">Edit Data User</h1>

        <div class="bg-white grid grid-cols-1 w-full h-auto mt-5 rounded-md">

            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data"
                class="bg-white shadow rounded-md p-5">
                @csrf
                @method('PUT')

                <div class="max-w-sm mt-3">
                    <label for="nama" class="block text-gray-700 font-bold">Nama:</label>
                    <input type="text" id="nama" name="nama" value="{{ $user->nama }}"
                        class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="max-w-sm mt-3">
                    <label for="nim" class="block text-gray-700 font-bold">NIM:</label>
                    <input type="number" id="nim" name="nim" value="{{ $user->nim }}"
                        class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="max-w-sm mt-3">
                    <label for="email" class="block text-gray-700 font-bold">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}"
                        class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="max-w-sm mt-3">
                    <label for="no_telp" class="block text-gray-700 font-bold">No Telp:</label>
                    <input type="number" id="no_telp" name="no_telp" value="{{ $user->no_telp }}"
                        class="w-full border-gray-300 rounded-md shadow-sm"required>
                </div>
                <div class="max-w-sm mt-3">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Status</label>
                    <select id="status" name="status" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" selected disabled>Pilih Status</option>
                        <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="not_active" {{ $user->status == 'not_active' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>
                <div class="max-w-sm mt-3">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        role</label>
                    <select id="role" name="role" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" selected disabled>Pilih role</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <div class="max-w-sm mt-3">
                    <label for="password" class="block text-gray-700 font-bold">Password:</label>
                    <input type="password" id="password" name="password"
                        class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                {{-- submit button --}}
                <div class="flex items-center justify-center mt-5">
                    <button type="submit" onclick="return confirm('Anda yakin ingin mengedit data user ini?')"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</button>
                </div>
            </form>
        </div>
    </x-dashboard.sidebar>
</x-app-layout>
