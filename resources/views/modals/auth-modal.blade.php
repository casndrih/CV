<!-- LinkedIn Signin Modal -->
<div id="auth-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full flex justify-center items-center
           backdrop-blur-md bg-black/50">
    <div class="relative w-full max-w-md max-h-full mx-auto">
        <!-- Modal content -->
        <div class="relative rounded-2xl shadow-lg bg-cover bg-center">

            <!-- Modal Body -->
            <div class="px-6 py-6 lg:px-8 text-center bg-white dark:bg-custom-dark rounded-2xl">

                {{-- Lottie Animation --}}
                <div class="flex justify-center mb-2">
                    <div id="search-animation" class="w-[350px] h-[350px] sm:w-[200px] sm:h-[200px]"></div>
                </div>

                <h3 class="mb-3 text-3xl font-regular text-black dark:text-white">
                    Welcome!
                </h3>

                <p class="mb-2 text-sm leading-relaxed text-gray-800 dark:text-gray-400">
                    Please sign in with LinkedIn to view this content.
                    Access is limited to LinkedIn users so that I can stay informed about who—such as
                    recruiters or potential employers—is viewing my online CV and portfolio.
                </p>



                <!-- LinkedIn Login Button -->
                <a href="{{ url('auth/linkedin') }}"
                    class="inline-flex items-center justify-center gap-3 w-auto
                    bg-blue-800 shadow-xl shadow-blue-500/50 hover:bg-blue-600 text-white font-medium
                    rounded-full px-5 py-2.5 transition-all shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path
                            d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                        </path>
                    </svg>
                    <span>Sign in with LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
</div>
