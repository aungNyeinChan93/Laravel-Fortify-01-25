<x-guest>

    <x-slot:title>
        Forget Password
    </x-slot:title>

    <x-base.panel>

        <form action="{{ route('password.request') }}" method="POST" class="min-w-md mx-auto">
            @csrf
            <h3 class="text-center text-xl font-bold text-blue-500 mb-3 hover:text-blue-400"> Forget Password </h3>
            <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </div>
                <input type="email" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="email" placeholder="email">
            </div>
            <input type="submit" value="Send Email " class="px-3 py-1 rounded bg-blue-400 mt-2 w-full mb-1">
        </form>

    </x-base.panel>

</x-guest>
