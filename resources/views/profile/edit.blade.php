<x-app-layout>
    <x-dashboard.sidebar>
        {{-- <h1 class="font-bold text-3xl mt-3">General Settings</h1>
        <div class="bg-white grid grid-cols-1 w-full p-5 h-auto mt-5 rounded-md">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>s
        </div> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-dashboard.sidebar>
</x-app-layout>
