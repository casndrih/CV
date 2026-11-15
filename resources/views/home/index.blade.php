@extends('app')

@section('content')
    <div class="mx-auto bg-white dark:bg-black shadow-lg overflow-hidden">
        <!-- Cover Photo -->
        <div id="coverPhoto" class="relative">
            <div class="bg-gray-50 h-20 md:h-40 lg:h-50 rounded-t-lg">
                <img class="w-full h-20 md:h-40 lg:h-50 object-cover" src="{{ URL::asset('images/cover.webp') }}">
            </div>
            <!-- Profile Picture -->
            <div class="absolute transform translate-y-1/2 translate-x-1/2 bottom-0 right-1/2">
                <img src="{{ URL::asset('images/pic.jpg') }}" alt="Profile Picture"
                    class="rounded-full object-cover shadow-xl shadow-gray-500 w-20 h-20 md:w-20 md:h-20 lg:w-25 lg:h-25">
            </div>
        </div>
        <div class="p-6 pt-12">
            <div class="text-center">
                <h2 class="text-xl font-semibold dark:text-white">Casper N'drih</h2>

                <p class="text-md text-blue-500 underline">IT Influstructure | Full Stack Developer</p>

                <div class="flex justify-center items-center mt-4 gap-2">
                    <a href="https://facebook.com/cndrih1"
                        class="text-black dark:text-white hover:text-blue-500 dark:hover:text-blue-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://wa.me/81939152" class="text-black dark:text-white hover:text-lime-500">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2ZM8.59339 7.30019L8.39232 7.30833C8.26293 7.31742 8.13607 7.34902 8.02057 7.40811C7.93392 7.45244 7.85348 7.51651 7.72709 7.63586C7.60774 7.74855 7.53857 7.84697 7.46569 7.94186C7.09599 8.4232 6.89729 9.01405 6.90098 9.62098C6.90299 10.1116 7.03043 10.5884 7.23169 11.0336C7.63982 11.9364 8.31288 12.8908 9.20194 13.7759C9.4155 13.9885 9.62473 14.2034 9.85034 14.402C10.9538 15.3736 12.2688 16.0742 13.6907 16.4482C13.6907 16.4482 14.2507 16.5342 14.2589 16.5347C14.4444 16.5447 14.6296 16.5313 14.8153 16.5218C15.1066 16.5068 15.391 16.428 15.6484 16.2909C15.8139 16.2028 15.8922 16.159 16.0311 16.0714C16.0311 16.0714 16.0737 16.0426 16.1559 15.9814C16.2909 15.8808 16.3743 15.81 16.4866 15.6934C16.5694 15.6074 16.6406 15.5058 16.6956 15.3913C16.7738 15.2281 16.8525 14.9166 16.8838 14.6579C16.9077 14.4603 16.9005 14.3523 16.8979 14.2854C16.8936 14.1778 16.8047 14.0671 16.7073 14.0201L16.1258 13.7587C16.1258 13.7587 15.2563 13.3803 14.7245 13.1377C14.6691 13.1124 14.6085 13.1007 14.5476 13.097C14.4142 13.0888 14.2647 13.1236 14.1696 13.2238C14.1646 13.2218 14.0984 13.279 13.3749 14.1555C13.335 14.2032 13.2415 14.3069 13.0798 14.2972C13.0554 14.2955 13.0311 14.292 13.0074 14.2858C12.9419 14.2685 12.8781 14.2457 12.8157 14.2193C12.692 14.1668 12.6486 14.1469 12.5641 14.1105C11.9868 13.8583 11.457 13.5209 10.9887 13.108C10.8631 12.9974 10.7463 12.8783 10.6259 12.7616C10.2057 12.3543 9.86169 11.9211 9.60577 11.4938C9.5918 11.4705 9.57027 11.4368 9.54708 11.3991C9.50521 11.331 9.45903 11.25 9.44455 11.1944C9.40738 11.0473 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.74939 10.663 9.86248 10.5183C9.97128 10.379 10.0652 10.2428 10.125 10.1457C10.2428 9.95633 10.2801 9.76062 10.2182 9.60963C9.93764 8.92565 9.64818 8.24536 9.34986 7.56894C9.29098 7.43545 9.11585 7.33846 8.95659 7.32007C8.90265 7.31384 8.84875 7.30758 8.79459 7.30402C8.66053 7.29748 8.5262 7.29892 8.39232 7.30833L8.59339 7.30019Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://x.com/cndrih5" class="text-black dark:text-white hover:text-cyan-500">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M10.4883 14.651L15.25 21H22.25L14.3917 10.5223L20.9308 3H18.2808L13.1643 8.88578L8.75 3H1.75L9.26086 13.0145L2.31915 21H4.96917L10.4883 14.651ZM16.25 19L5.75 5H7.75L18.25 19H16.25Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/c-ndrih" class="text-black dark:text-white hover:text-blue-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M18.3362 18.339H15.6707V14.1622C15.6707 13.1662 15.6505 11.8845 14.2817 11.8845C12.892 11.8845 12.6797 12.9683 12.6797 14.0887V18.339H10.0142V9.75H12.5747V10.9207H12.6092C12.967 10.2457 13.837 9.53325 15.1367 9.53325C17.8375 9.53325 18.337 11.3108 18.337 13.6245V18.339H18.3362ZM7.00373 8.57475C6.14573 8.57475 5.45648 7.88025 5.45648 7.026C5.45648 6.1725 6.14648 5.47875 7.00373 5.47875C7.85873 5.47875 8.55173 6.1725 8.55173 7.026C8.55173 7.88025 7.85798 8.57475 7.00373 8.57475ZM8.34023 18.339H5.66723V9.75H8.34023V18.339ZM19.6697 3H4.32923C3.59498 3 3.00098 3.5805 3.00098 4.29675V19.7033C3.00098 20.4202 3.59498 21 4.32923 21H19.6675C20.401 21 21.001 20.4202 21.001 19.7033V4.29675C21.001 3.5805 20.401 3 19.6675 3H19.6697Z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
            <p class="mt-4 text-sm text-black dark:text-gray-300 text-center">
                Full-stack Developer with over 8 years of experience designing and developing high-performance Web and
                Mobile applications. Proficient in C++, React Native, Objective-C/Swift, PHP (Laravel), Kotlin/Java,
                Node.js, Python, and SQL. In addition to software development, brings more than 2 years of experience in IT
                Support and Network Administration, ensuring robust system performance and seamless user experiences.
            </p>
            <div class="flex flex-wrap justify-center mt-4 gap-2">
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">JavaScript</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">React</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Node.js</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">ExpressJS</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Python</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">SQL</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Java</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Kotlin</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Laravel</span>

                <!-- Newly added chips -->
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">C++</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Objective-C</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Swift</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">React
                    Native</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">PHP</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Web
                    Development</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Mobile
                    Development</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">IT
                    Support</span>
                <span
                    class="px-3 py-1 text-sm font-medium bg-gray-100 dark:bg-custom-dark dark:text-gray-400 rounded-full">Network
                    Administration</span>
            </div>
            <div class="flex justify-center gap-2 mt-6">
                <a href="{{ route('view.cv') }}" target="_blank"
                    class="flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                        width="24px" fill="currentColor">
                        <path
                            d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                    </svg>
                    Download CV
                </a>

                <a href="#"
                    class="flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full"
                    data-modal-target="showHireModal" data-modal-show="showHireModal">
                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                        width="24px" fill="currentColor">
                        <path
                            d="M475-160q4 0 8-2t6-4l328-328q12-12 17.5-27t5.5-30q0-16-5.5-30.5T817-607L647-777q-11-12-25.5-17.5T591-800q-15 0-30 5.5T534-777l-11 11 74 75q15 14 22 32t7 38q0 42-28.5 70.5T527-522q-20 0-38.5-7T456-550l-75-74-175 175q-3 3-4.5 6.5T200-435q0 8 6 14.5t14 6.5q4 0 8-2t6-4l136-136 56 56-135 136q-3 3-4.5 6.5T285-350q0 8 6 14t14 6q4 0 8-2t6-4l136-135 56 56-135 136q-3 2-4.5 6t-1.5 8q0 8 6 14t14 6q4 0 7.5-1.5t6.5-4.5l136-135 56 56-136 136q-3 3-4.5 6.5T454-180q0 8 6.5 14t14.5 6Zm-1 80q-37 0-65.5-24.5T375-166q-34-5-57-28t-28-57q-34-5-56.5-28.5T206-336q-38-5-62-33t-24-66q0-20 7.5-38.5T149-506l232-231 131 131q2 3 6 4.5t8 1.5q9 0 15-5.5t6-14.5q0-4-1.5-8t-4.5-6L398-777q-11-12-25.5-17.5T342-800q-15 0-30 5.5T285-777L144-635q-9 9-15 21t-8 24q-2 12 0 24.5t8 23.5l-58 58q-17-23-25-50.5T40-590q2-28 14-54.5T87-692l141-141q24-23 53.5-35t60.5-12q31 0 60.5 12t52.5 35l11 11 11-11q24-23 53.5-35t60.5-12q31 0 60.5 12t52.5 35l169 169q23 23 35 53t12 61q0 31-12 60.5T873-437L545-110q-14 14-32.5 22T474-80Zm-99-560Z" />
                    </svg>
                    Hire me
                </a>
            </div>

            {{-- Lottie Animation --}}
            <div class="flex justify-center">
                <div id="docs-animation" class="w-[200px] h-[200px]"></div>
            </div>

        </div>
    </div>

    <div class="flex-col p-4 bg-gray-200 dark:bg-black">

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2">
            <!-- Card 1 -->
            <div class="bg-white pb-12 dark:bg-custom-dark rounded-lg">
                <div class="flex p-4 items-center gap-2 lg:gap-4">
                    <div
                        class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-500 rounded-full"></span>
                    </div>
                    <span
                        class="flex items-center text-black dark:text-white text-lg font-medium text-gray-900 dark:text-white me-3">About
                        me</span>
                </div>

                <!-- Scrollable -->
                <div class="max-h-96 bg-gray-50 dark:bg-black px-4 overflow-y-auto">
                    <p class="text-gray-700 dark:text-gray-500 p-2 rounded-lg text-sm">
                        I am a highly motivated and self-taught full stack developer with a passion for designing and
                        building scalable, user-friendly web applications and Android apps. My journey into coding is
                        unique—I didn’t attend university or study computer science. Instead, I dedicated myself to learning
                        through hands-on practice, problem-solving, and leveraging online resources.

                        Over the years, I have gained expertise in front-end and back-end development, as well as Android
                        application development, understanding modern frameworks, programming languages, and tools that
                        allow me to create efficient and innovative solutions. My ability to adapt quickly and continuously
                        learn has enabled me to tackle complex challenges and deliver results that exceed expectations.

                        I pride myself on being detail-oriented, collaborative, and driven by a desire to create impactful
                        digital experiences. My self-taught background reflects my dedication, resourcefulness, and
                        commitment to lifelong learning, and I am always eager to take on new opportunities that push me to
                        grow both personally and professionally.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white pb-12 dark:bg-custom-dark rounded-lg">
                <div class="flex p-4 items-center gap-2 lg:gap-4">
                    <div
                        class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-500 rounded-full"></span>
                    </div>
                    <span
                        class="flex items-center text-black dark:text-white text-lg font-medium text-gray-900 dark:text-white">Education
                        History</span>
                </div>

                <!-- Scrollable Timeline -->
                <div class="max-h-96 bg-gray-50 dark:bg-black px-4 overflow-y-auto">
                    <ol class="relative border-s border-gray-400 dark:border-gray-700">
                        <li class="mb-5 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2023 - 2025</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Advanced Professional Diploma -
                                IT
                            </h3>
                            <p class="mb-4 text-sm font-normal text-gray-700 dark:text-gray-400">Datec Learning Centre,
                                UOT,
                                Lae</p>
                        </li>
                        <li class="mb-5 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2019 - 2020</time>
                            <div data-popover-target="popover-edu" class="flex items-center gap-1">
                                <svg class="w-5 h-5 md:w-6 md:h-6 lg:w-8 lg:h-8 text-red-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 15H13V17H11V15ZM11 7H13V13H11V7Z">
                                    </path>
                                </svg>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Sem 1 & 2 Transcripts -
                                    Architectural Drafting</h3>
                            </div>

                            <p class="mb-4 text-sm font-normal text-gray-700 dark:text-gray-400">National Polytechnic
                                Institute, Lae</p>
                        </li>
                        <li class="mb-5 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2018</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">DODL - Upgrade Transcript</h3>
                            <p class="mb-4 text-sm font-normal text-gray-700 dark:text-gray-400">National Polytechnic
                                Institute, Lae</p>
                        </li>
                        <li class="mb-5 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2016 - 2017</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Grade 12 Certificate</h3>
                            <p class="text-sm font-normal text-gray-700 dark:text-gray-400">Bugandi Secondary School, Lae
                            </p>
                        </li>
                        <li class="mb-2 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2014 - 2015</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Grade 10 Certificate</h3>
                            <p class="text-sm font-normal text-gray-700 dark:text-gray-400">Emmanuel Lutheran School, Lae
                            </p>
                        </li>
                    </ol>
                </div>

                <div data-popover id="popover-edu" role="tooltip"
                    class="absolute z-50 invisible inline-block w-64 shadow-sm shadow-gray-500 transition-opacity duration-300 bg-gray-50 rounded-lg opacity-0 dark:bg-black">
                    <div class="px-3 py-2 bg-white rounded-t-lg dark:bg-custom-dark">
                        <h3 class="text-sm font-semibold text-black dark:text-white">Financial Hardship</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p class="text-sm text-gray-700 dark:text-gray-400 font-regular">I had to discontinue my final year
                            in Architectural Drafting, a two-year program with four semesters, due to severe financial
                            difficulties. While I successfully completed the first two semesters in the first year, I
                            encountered unexpected financial challenges that made it impossible to continue paying for
                            tuition and related expenses. Unfortunately, this prevented me from completing the program.</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>

            </div>

            <!-- Card 3 -->
            <div class="bg-white pb-12 dark:bg-custom-dark rounded-lg">
                <div class="flex p-4 items-center gap-2 lg:gap-4">
                    <div
                        class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-500 rounded-full"></span>
                    </div>
                    <span
                        class="flex items-center text-black dark:text-white text-lg font-medium text-gray-900 dark:text-white">Work
                        Experience</span>
                </div>

                <div class="max-h-96 bg-gray-50 dark:bg-black p-4 items-start overflow-y-auto">
                    <!-- Logo -->

                    <img src="https://www.svs.com.pg/wp-content/uploads/2021/10/2021-SVS-Logo-01.png"
                        alt="Profile Picture" class="rounded-full object-cover w-20 h-20 md:w-20 md:h-20 lg:w-25 lg:h-25">

                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-lg text-black dark:text-white font-bold my-1">Software Developer</h2>
                        <div class="text-sm flex items-center space-x-2 mb-2">
                            <span
                                class="bg-blue-500 text-white dark:text-black text-xs font-medium px-2 py-0.5 rounded-full">Full-time</span>
                        </div>
                        <ul class="text-sm text-black dark:text-white space-y-1">
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M12.6727 1.61162 20.7999 9H17.8267L12 3.70302 6 9.15757V19.0001H11V21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001 11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162ZM14 11H23V18H14V11ZM16 13V16H21V13H16ZM24 21H13V19H24V21Z">
                                    </path>
                                </svg>
                                <span class="font-bold">Super Value Store (SVS)</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM9.71002 19.6674C8.74743 17.6259 8.15732 15.3742 8.02731 13H4.06189C4.458 16.1765 6.71639 18.7747 9.71002 19.6674ZM10.0307 13C10.1811 15.4388 10.8778 17.7297 12 19.752C13.1222 17.7297 13.8189 15.4388 13.9693 13H10.0307ZM19.9381 13H15.9727C15.8427 15.3742 15.2526 17.6259 14.29 19.6674C17.2836 18.7747 19.542 16.1765 19.9381 13ZM4.06189 11H8.02731C8.15732 8.62577 8.74743 6.37407 9.71002 4.33256C6.71639 5.22533 4.458 7.8235 4.06189 11ZM10.0307 11H13.9693C13.8189 8.56122 13.1222 6.27025 12 4.24799C10.8778 6.27025 10.1811 8.56122 10.0307 11ZM14.29 4.33256C15.2526 6.37407 15.8427 8.62577 15.9727 11H19.9381C19.542 7.8235 17.2836 5.22533 14.29 4.33256Z">
                                    </path>
                                </svg>
                                <span class="text-blue-500">https://svs.com.pg</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path
                                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                </svg>
                                <span>Lae, Morobe Province</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path
                                        d="M438-226 296-368l58-58 84 84 168-168 58 58-226 226ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                                </svg>
                                <span>Feb 5, 2025 - Current</span>
                            </li>
                        </ul>
                        <p class="text-sm text-gray-700 dark:text-gray-500 mt-2">
                            Responsible for designing,
                            developing, testing, and
                            maintaining software
                            applications and systems
                            that support operations.
                            Role involves writing
                            efficient code,
                            troubleshooting technical
                            issues, integrating
                            databases, and ensuring
                            smooth communication
                            between software and
                            hardware systems.
                        </p>
                    </div>

                    <div class="rounded-full mt-4 flex flex-col text-center items-center justify-center"
                        style="width: 75px; height: 75px; background: linear-gradient(to bottom, #3b82f6, black);">
                        <h2 class="flex items-center justify-center text-white font-bold text-md">
                            <span class="text-md">J</span>
                            <img src="{{ URL::asset('images/truck.svg') }}" alt="Logo" class="w-3 h-3" />
                            <span class="text-md">T</span>
                            <img src="{{ URL::asset('images/truck.svg') }}" alt="Logo" class="w-3 h-3" />
                            <span class="text-md">I</span>
                        </h2>
                        <p class="text-white text-center" style="font-size: 0.525rem;">Jim Tapako Investment</p>
                    </div>

                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-lg text-black dark:text-white font-bold my-1">IT Support Officer</h2>
                        <div class="text-sm flex items-center space-x-2 mb-2">
                            <span
                                class="bg-blue-500 text-white dark:text-black text-xs font-medium px-2 py-0.5 rounded-full">Contract
                                - Short term</span>
                        </div>
                        <ul class="text-sm text-black dark:text-white space-y-1">
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M12.6727 1.61162 20.7999 9H17.8267L12 3.70302 6 9.15757V19.0001H11V21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001 11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162ZM14 11H23V18H14V11ZM16 13V16H21V13H16ZM24 21H13V19H24V21Z">
                                    </path>
                                </svg>
                                <span class="font-bold">Jim Tapako Investment (JTI)</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM9.71002 19.6674C8.74743 17.6259 8.15732 15.3742 8.02731 13H4.06189C4.458 16.1765 6.71639 18.7747 9.71002 19.6674ZM10.0307 13C10.1811 15.4388 10.8778 17.7297 12 19.752C13.1222 17.7297 13.8189 15.4388 13.9693 13H10.0307ZM19.9381 13H15.9727C15.8427 15.3742 15.2526 17.6259 14.29 19.6674C17.2836 18.7747 19.542 16.1765 19.9381 13ZM4.06189 11H8.02731C8.15732 8.62577 8.74743 6.37407 9.71002 4.33256C6.71639 5.22533 4.458 7.8235 4.06189 11ZM10.0307 11H13.9693C13.8189 8.56122 13.1222 6.27025 12 4.24799C10.8778 6.27025 10.1811 8.56122 10.0307 11ZM14.29 4.33256C15.2526 6.37407 15.8427 8.62577 15.9727 11H19.9381C19.542 7.8235 17.2836 5.22533 14.29 4.33256Z">
                                    </path>
                                </svg>
                                <span class="text-blue-500">http://jtinvestment.com.pg</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path
                                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                </svg>
                                <span>Lae, Morobe Province</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path
                                        d="M438-226 296-368l58-58 84 84 168-168 58 58-226 226ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                                </svg>
                                <span>May 2021 - Jul 2022</span>
                            </li>
                        </ul>
                        <p class="text-sm text-gray-700 dark:text-gray-500 mt-2">
                            Provided IT support on a short-term basis, including troubleshooting hardware and software
                            issues, configuring and maintaining network systems, assisting with IT infrastructure setup, and
                            delivering technical support to employees to ensure smooth operations.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Card 4 -->
            <div class="bg-white pb-12 dark:bg-custom-dark rounded-lg">
                <div class="flex p-4 items-center gap-2 lg:gap-4">
                    <div
                        class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-500 rounded-full"></span>
                    </div>
                    <span
                        class="flex items-center text-black dark:text-white text-lg font-medium text-gray-900 dark:text-white">Projects
                        - Websites</span>

                    <div class="ml-auto flex justify-right text-black dark:text-white items-right">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11V17H13V11H11ZM11 7V9H13V7H11Z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Scrollable Project List -->
                <div class="max-h-96 bg-gray-50 dark:bg-black px-4 overflow-y-auto">
                    <ol class="relative border-s border-gray-400 dark:border-gray-700">
                        <!-- Project 1 -->
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2025</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                Bira Consultants
                                <span
                                    class="bg-blue-100 text-blue-500 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-500">Job
                                    Portal</span>
                            </h3>

                            <span
                                class="bg-lime-500 text-white dark:text-black text-xs font-semibold px-2.5 py-0.5 rounded-full">Web
                                Development Contract
                            </span>

                            <p class="mb-4 text-sm font-normal text-gray-700 dark:text-gray-400">Bira Consultants is a
                                modern job and recruitment platform built to connect great talent with great companies. We
                                make it easy for job seekers to find exciting opportunities and for employers to discover
                                the right people to grow their teams.</p>

                            <!-- Project Web Preview -->
                            <iframe class="w-full h-40 rounded-lg border border-gray-300 dark:border-gray-700 mb-3"
                                src="https://www.biraconsultants.com" title="Bira Consultants Preview" allowfullscreen>
                            </iframe>

                            <div class="flex justify-between">
                                <!-- View Button -->
                                <a href="https://www.biraconsultants.com"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M6.23509 6.45329C4.85101 7.89148 4 9.84636 4 12C4 16.4183 7.58172 20 12 20C13.0808 20 14.1116 19.7857 15.0521 19.3972C15.1671 18.6467 14.9148 17.9266 14.8116 17.6746C14.582 17.115 13.8241 16.1582 12.5589 14.8308C12.2212 14.4758 12.2429 14.2035 12.3636 13.3943L12.3775 13.3029C12.4595 12.7486 12.5971 12.4209 14.4622 12.1248C15.4097 11.9746 15.6589 12.3533 16.0043 12.8777C16.0425 12.9358 16.0807 12.9928 16.1198 13.0499C16.4479 13.5297 16.691 13.6394 17.0582 13.8064C17.2227 13.881 17.428 13.9751 17.7031 14.1314C18.3551 14.504 18.3551 14.9247 18.3551 15.8472V15.9518C18.3551 16.3434 18.3168 16.6872 18.2566 16.9859C19.3478 15.6185 20 13.8854 20 12C20 8.70089 18.003 5.8682 15.1519 4.64482C14.5987 5.01813 13.8398 5.54726 13.575 5.91C13.4396 6.09538 13.2482 7.04166 12.6257 7.11976C12.4626 7.14023 12.2438 7.12589 12.012 7.11097C11.3905 7.07058 10.5402 7.01606 10.268 7.75495C10.0952 8.2232 10.0648 9.49445 10.6239 10.1543C10.7134 10.2597 10.7307 10.4547 10.6699 10.6735C10.59 10.9608 10.4286 11.1356 10.3783 11.1717C10.2819 11.1163 10.0896 10.8931 9.95938 10.7412C9.64554 10.3765 9.25405 9.92233 8.74797 9.78176C8.56395 9.73083 8.36166 9.68867 8.16548 9.64736C7.6164 9.53227 6.99443 9.40134 6.84992 9.09302C6.74442 8.8672 6.74488 8.55621 6.74529 8.22764C6.74529 7.8112 6.74529 7.34029 6.54129 6.88256C6.46246 6.70541 6.35689 6.56446 6.23509 6.45329ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22Z">
                                        </path>
                                    </svg>
                                    Visit Website
                                </a>
                            </div>
                        </li>

                        <!-- Project 2 -->
                        <li class="ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2023</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                Grogreen
                                <span
                                    class="bg-blue-100 text-blue-500 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-500">Open
                                    Source</span>
                            </h3>

                            <span
                                class="bg-lime-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-lime-500 dark:text-black">APEC
                                App Challenge</span>

                            <p class="mb-4 text-sm font-normal text-gray-700 dark:text-gray-400">Grogreen, a small
                                multi-vendor project, stems from our deep desire to empower local micro or small and
                                medium-sized enterprises (MSMEs) in the agricultural sector.</p>

                            <!-- Project Web Preview -->
                            <iframe class="w-full h-40 rounded-lg border border-gray-300 dark:border-gray-700 mb-3"
                                src="https://www.youtube.com/embed/Gk9RwY4oN20" title="Grogreen Preview" allowfullscreen>
                            </iframe>

                            <div class="flex mb-2 justify-between">

                                <!-- Devpost Button -->
                                <a href="https://devpost.com/software/grogreen"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M24 12L18.3431 17.6569L16.9289 16.2426L21.1716 12L16.9289 7.75736L18.3431 6.34315L24 12ZM2.82843 12L7.07107 16.2426L5.65685 17.6569L0 12L5.65685 6.34315L7.07107 7.75736L2.82843 12ZM9.78845 21H7.66009L14.2116 3H16.3399L9.78845 21Z">
                                        </path>
                                    </svg>
                                    Devpost
                                </a>

                                <!-- GitHub Button -->
                                <a href="https://github.com/casndrih/grogreen"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z">
                                        </path>
                                    </svg>
                                    Github
                                </a>
                            </div>
                        </li>

                        <!-- Project 3 -->
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2021</time>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                MyGuide
                                <span
                                    class="bg-blue-100 text-blue-500 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-500">Open
                                    Source</span>
                            </h3>

                            <span
                                class="bg-lime-500 text-white dark:text-black text-xs font-semibold px-2.5 py-0.5 rounded-full">5<sup>th</sup>
                                Winner - APEC App Challenge</span>

                            <p class="mb-4 text-sm font-normal text-gray-700 dark:text-gray-400">MyGuide serves as place
                                guide
                                or tour for local explorers or international tourists who wanted to explore Papua New
                                Guinea, it shows places based on different categories, detailed descriptions along with safe
                                travel Covid-19 status and location, flight booking, news and Covid-19 alerts.</p>

                            <!-- Project Web Preview -->
                            <iframe class="w-full h-40 rounded-lg border border-gray-300 dark:border-gray-700 mb-3"
                                src="https://www.youtube.com/embed/mLuZBIlrGnE" title="MyGuide Preview" allowfullscreen>
                            </iframe>

                            <div class="flex justify-between">
                                <!-- Devpost Button -->
                                <a href="https://devpost.com/software/myguide-fati2g"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M24 12L18.3431 17.6569L16.9289 16.2426L21.1716 12L16.9289 7.75736L18.3431 6.34315L24 12ZM2.82843 12L7.07107 16.2426L5.65685 17.6569L0 12L5.65685 6.34315L7.07107 7.75736L2.82843 12ZM9.78845 21H7.66009L14.2116 3H16.3399L9.78845 21Z">
                                        </path>
                                    </svg>
                                    Devpost
                                </a>

                                <!-- GitHub Button -->
                                <a href="https://github.com/casndrih/myguide/tree/master"
                                    class="inline-flex items-center px-4 py-2 line-clamp-1 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z">
                                        </path>
                                    </svg>
                                    Github
                                </a>
                            </div>
                        </li>

                    </ol>
                </div>
            </div>

            <!-- Card 5 -->
            <!-- Android Apps Section -->
            <div class="bg-white pb-12 dark:bg-custom-dark rounded-lg">
                <div class="flex p-4 items-center gap-2 lg:gap-4">
                    <div
                        class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-500 rounded-full"></span>
                    </div>
                    <span
                        class="flex items-center text-black dark:text-white text-lg font-medium text-gray-900 dark:text-white">Projects
                        - Android</span>

                    <div data-popover-target="popover-app"
                        class="ml-auto flex justify-right text-black dark:text-white items-right"><svg
                            class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11V17H13V11H11ZM11 7V9H13V7H11Z">
                            </path>
                        </svg></div>

                    <div data-popover id="popover-app" role="tooltip"
                        class="absolute z-50 invisible inline-block w-64 shadow-sm shadow-gray-500 transition-opacity duration-300 bg-gray-50 rounded-lg opacity-0 dark:bg-black">
                        <div class="px-3 py-2 bg-white rounded-t-lg dark:bg-custom-dark">
                            <h3 class="text-sm font-semibold text-black dark:text-white">Account – Dev Name: Cintel</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p class="text-sm text-gray-700 dark:text-gray-400 font-regular">Due to a violation of Google
                                Play's Ads Policy, my Google Play Developer account, associated with the developer name
                                Cintel, has been terminated. While I strive to adhere to all Google Play guidelines, the
                                termination occurred unexpectedly. The apps previously published under my account are
                                currently available on alternative app stores but have since been deprecated and
                                discontinued. I am no longer working on these projects.</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>

                </div>

                <!-- Android Apps Projects -->
                <div class="max-h-96 bg-gray-50 dark:bg-black px-4 overflow-y-auto">
                    <ol class="relative border-s border-gray-400 dark:border-gray-700">

                        <!-- Project 1 -->
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2018</time>
                            <div class="flex gap-2">
                                <img src="https://play-lh.googleusercontent.com/Js-k7aiEBWi1_JVZuVVtJUIUKIQbq_4hPEFNi48Ht7gsWbG9grVqdhGohpfowt1mADXI=s75-rw"
                                    alt="Icon"
                                    class="rounded-lg object-cover w-12 h-12 md:w-14 md:h-14 lg:w-18 lg:h-18">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                    Droid Firewall
                                    <span
                                        class="bg-red-100 text-red-500 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-500">Discontinued</span>
                                </h3>
                            </div>

                            <!-- Details Section -->
                            <ul class="text-sm font-normal text-gray-800 dark:text-gray-400 mb-4 mt-2 space-y-1">
                                <li><strong>Installs:</strong> 100,000+</li>
                                <li><strong>Version:</strong> 1.6</li>
                                <li><strong>Last Update:</strong> Dec 9, 2020</li>
                                <li><strong>Variants:</strong> armeabi-v7a, arm64-v8a</li>
                                <li><strong>API Level:</strong> 21+</li>
                            </ul>

                            <!-- Carousel for Screenshots -->
                            <div id="carouselExampleIndicators" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative overflow-hidden rounded-lg h-56">
                                    <!-- Screenshot 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://cdn6.aptoide.com/imgs/3/5/1/35199e40a6fd26e7daa15a754c739a83_screen.png"
                                            class="block w-full" alt="Screenshot 1">
                                    </div>
                                    <!-- Screenshot 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://cdn6.aptoide.com/imgs/3/7/1/37145f66b049c7679179a37435a23033_screen.png"
                                            class="block w-full" alt="Screenshot 2">
                                    </div>
                                    <!-- Screenshot 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://cdn6.aptoide.com/imgs/3/7/0/370fa6228a5b1df7c8658a362285e9fd_screen.png"
                                            class="block w-full" alt="Screenshot 3">
                                    </div>
                                </div>
                                <!-- Controls -->
                                <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-white/30 group-hover:bg-black/50 dark:group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-black/50 dark:group-focus:ring-white/50">
                                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-black" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-white/30 group-hover:bg-black/50 dark:group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-black/50 dark:group-focus:ring-white/50">
                                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-black" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Description -->
                            <p class="my-4 text-sm font-normal text-black dark:text-gray-400">
                                Droid Firewall safeguards your data without requiring root access. Manage app connections
                                for Wi-Fi and Mobile Data, filter system/installed apps, and control individual app
                                permissions with precision.
                            </p>

                            <!-- View Button -->
                            <a href="https://apkcombo.app/droid-firewall/com.cintel.droidfirewall/"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12ZM12.0003 17C14.7617 17 17.0003 14.7614 17.0003 12C17.0003 9.23858 14.7617 7 12.0003 7C9.23884 7 7.00026 9.23858 7.00026 12C7.00026 14.7614 9.23884 17 12.0003 17ZM12.0003 15C10.3434 15 9.00026 13.6569 9.00026 12C9.00026 10.3431 10.3434 9 12.0003 9C13.6571 9 15.0003 10.3431 15.0003 12C15.0003 13.6569 13.6571 15 12.0003 15Z">
                                    </path>
                                </svg>
                                View App
                            </a>
                        </li>

                        <!-- Project 2 -->
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2018</time>
                            <div class="flex gap-2">
                                <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5kcm9pZG9wdGltaXplcl9pY29uXzE1Mzg0Mjg5NzJfMDcx/icon.webp?w=280&fakeurl=1&type=.webp"
                                    alt="Icon"
                                    class="rounded-lg object-cover w-12 h-12 md:w-14 md:h-14 lg:w-18 lg:h-18">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                    Droid Optimizer
                                    <span
                                        class="bg-red-100 text-red-500 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-500">Discontinued</span>
                                </h3>
                            </div>

                            <!-- Details Section -->
                            <ul class="text-sm font-normal text-gray-800 dark:text-gray-400 mb-4 mt-2 space-y-1">
                                <li><strong>Installs:</strong> 1000+</li>
                                <li><strong>Version:</strong> 1.0</li>
                                <li><strong>Last Update:</strong> Oct 4, 2018</li>
                                <li><strong>Variants:</strong> armeabi-v7a, arm64-v8a, x86</li>
                                <li><strong>API Level:</strong> 19+</li>
                            </ul>

                            <!-- Carousel for Screenshots -->
                            <div id="carouselExampleIndicators" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative overflow-hidden rounded-lg h-56">
                                    <!-- Screenshot 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5kcm9pZG9wdGltaXplcl9zY3JlZW5fMF8xNTM4NDI4OTczXzAzNw/screen-0.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 1">
                                    </div>
                                    <!-- Screenshot 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5kcm9pZG9wdGltaXplcl9zY3JlZW5fMV8xNTM4NDI4OTc1XzAzOA/screen-1.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 2">
                                    </div>
                                    <!-- Screenshot 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5kcm9pZG9wdGltaXplcl9zY3JlZW5fM18xNTM4NDI4OTc3XzAxMA/screen-3.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 3">
                                    </div>
                                    <!-- Screenshot 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5kcm9pZG9wdGltaXplcl9zY3JlZW5fNF8xNTM4NDI4OTc3XzA1NQ/screen-4.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 3">
                                    </div>
                                </div>
                                <!-- Controls -->
                                <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-white/30 group-hover:bg-black/50 dark:group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-black/50 dark:group-focus:ring-white/50">
                                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-black" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-white/30 group-hover:bg-black/50 dark:group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-black/50 dark:group-focus:ring-white/50">
                                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-black" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Description -->
                            <p class="my-4 text-sm font-normal text-black dark:text-gray-400">
                                Droid Optimizer is an Material Design Android Battery & Device Performance Optimizer to help
                                boost your device & battery health to live longer.
                            </p>

                            <!-- View Button -->
                            <a href="https://m.apkpure.com/droid-optimizer/com.cintel.droidoptimizer"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12ZM12.0003 17C14.7617 17 17.0003 14.7614 17.0003 12C17.0003 9.23858 14.7617 7 12.0003 7C9.23884 7 7.00026 9.23858 7.00026 12C7.00026 14.7614 9.23884 17 12.0003 17ZM12.0003 15C10.3434 15 9.00026 13.6569 9.00026 12C9.00026 10.3431 10.3434 9 12.0003 9C13.6571 9 15.0003 10.3431 15.0003 12C15.0003 13.6569 13.6571 15 12.0003 15Z">
                                    </path>
                                </svg>
                                View App
                            </a>

                        </li>

                        <!-- Project 3 -->
                        <li class="mb-2 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-blue-500">2018</time>
                            <div class="flex gap-2">
                                <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5mYWlyd2F5X2ljb25fMTUzODY2ODM1OV8wMDU/icon.webp?w=280&fakeurl=1&type=.webp"
                                    alt="Icon"
                                    class="rounded-lg object-cover w-12 h-12 md:w-14 md:h-14 lg:w-18 lg:h-18">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white flex items-center gap-2">
                                    Fairway File Manager
                                    <span
                                        class="bg-red-100 text-red-500 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-500">Discontinued</span>
                                </h3>
                            </div>

                            <!-- Details Section -->
                            <ul class="text-sm font-normal text-gray-800 dark:text-gray-400 mb-4 mt-2 space-y-1">
                                <li><strong>Installs:</strong> 1000+</li>
                                <li><strong>Version:</strong> 1.0</li>
                                <li><strong>Last Update:</strong> Sept 30, 2018</li>
                                <li><strong>Variants:</strong> arm64-v8a, x86_64</li>
                                <li><strong>API Level:</strong> 21+</li>
                            </ul>

                            <!-- Carousel for Screenshots -->
                            <div id="carouselExampleIndicators" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative overflow-hidden rounded-lg h-56">
                                    <!-- Screenshot 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5mYWlyd2F5X3NjcmVlbl8wXzE1Mzg2NjgzNjBfMDYx/screen-0.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 1">
                                    </div>
                                    <!-- Screenshot 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5mYWlyd2F5X3NjcmVlbl8xXzE1Mzg2NjgzNjFfMDc2/screen-1.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 2">
                                    </div>
                                    <!-- Screenshot 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5mYWlyd2F5X3NjcmVlbl82XzE1Mzg2NjgzNjZfMDAz/screen-6.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 3">
                                    </div>
                                    <!-- Screenshot 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://image.winudf.com/v2/image/Y29tLmNpbnRlbC5mYWlyd2F5X3NjcmVlbl8zXzE1Mzg2NjgzNjNfMDY3/screen-3.webp?fakeurl=1&type=.webp"
                                            class="block w-full" alt="Screenshot 3">
                                    </div>
                                </div>
                                <!-- Controls -->
                                <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-white/30 group-hover:bg-black/50 dark:group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-black/50 dark:group-focus:ring-white/50">
                                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-black" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-white/30 group-hover:bg-black/50 dark:group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-black/50 dark:group-focus:ring-white/50">
                                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-black" fill="none"
                                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Description -->
                            <p class="my-4 text-sm font-normal text-black dark:text-gray-400">
                                Fairway is a small but fully featured material design file explorer that supports all common
                                file management operations with an powerful interface and highly optimized performance. File
                                management has never been so easy.
                            </p>

                            <!-- View Button -->
                            <a href="https://m.apkpure.com/fairway-file-manager/com.cintel.fairway"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white shadow-lg shadow-gray-500 hover:shadow-blue-500 bg-black hover:bg-blue-500 dark:bg-white dark:hover:bg-blue-500 dark:hover:text-white dark:text-black rounded-full">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12ZM12.0003 17C14.7617 17 17.0003 14.7614 17.0003 12C17.0003 9.23858 14.7617 7 12.0003 7C9.23884 7 7.00026 9.23858 7.00026 12C7.00026 14.7614 9.23884 17 12.0003 17ZM12.0003 15C10.3434 15 9.00026 13.6569 9.00026 12C9.00026 10.3431 10.3434 9 12.0003 9C13.6571 9 15.0003 10.3431 15.0003 12C15.0003 13.6569 13.6571 15 12.0003 15Z">
                                    </path>
                                </svg>
                                View App
                            </a>
                        </li>
                    </ol>
                </div>
            </div>

        </div>


    </div>

@include('modals.hire-modal')

@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('js')
    {{-- Include scripts only once --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- Portfolio animation --}}
    <script>
        lottie.loadAnimation({
            container: document.getElementById('docs-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: "{{ asset('images/lottie/loading.json') }}"
        });
    </script>

@endsection