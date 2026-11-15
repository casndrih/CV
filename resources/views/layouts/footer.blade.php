<footer class="p-4 bg-white sm:p-6 dark:bg-custom-dark">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between items-center">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="{{ URL::to('/') }}" class="flex items-center">
                    <span class="self-center text-gray-900 text-xl font-medium whitespace-nowrap dark:text-white">
                        CN'drih CV
                    </span>
                </a>
            </div>
        </div>

        <div class="sm:flex sm:items-center mt-2 sm:justify-between pt-2">
            <span class="text-sm text-gray-500 sm:text-center dark:text-white">
                © {{ now()->format('Y') }} CN'drih. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
