<div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#de86ff] rounded-xl shadow-md p-4 lg:w-1/2 md:w-[70%] sm:w-[90%] xs:w-[98%] iphone:w-[98%] mx-auto z-10 sm:h-[595px] xs:h-[620px] iphone:h-[630px] modal-content hidden" id="modal-content">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-transparent">
        <!-- Modal header -->
        <div class="flex items-start justify-between rounded-t p-2">
            <button class="text-gray-700 bg-transparent hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center close-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        <div class="p-6 space-y-6 bg-modal">
            <div class="flex justify-center items-start">
                <div class="bg-gradient-to-r from-secondary to-purple-700 p-[1px] rounded-full lg:ml-6 md:ml-0 sm:w-[65%] xs:w-full iphone:w-full">
                    <div class="font-bold tracking-wider font-malishroman lg:text-lg md:text-base xs:text-base iphone:text-base bg-[#de86ff] text-gray-900 py-2 lg:px-8 md:px-4 rounded-full flex justify-center">
                        Join before the slots run out
                        <div class="flex items-center ml-3">
                            <img src="{{ url('assets/images/rocket.png') }}" class="w-6 h-6" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center sm:mt-20 xs:mt-12">
                <div class="w-full text-center">
                    <h1 class="xl:text-5xl lg:text-4xl md:text-3xl sm:text-3xl xs:text-3xl iphone:text-2xl text-black font-wavehausSemiBold">
                        Join Persuation Waitlist for Exclusive 3-month Free Access
                    </h1>
                    <p class="text-primary xl:text-xl lg:text-lg sm:text-lg xs:text-lg iphone:text-base font-malishroman italic mt-10">We're giving an exclusive 3-month, full package free access<br>for the <span class="font-bold">first 100</span> people in our waitlist.</p>
                    <form class="xl:flex lg:flex-row sm:flex-row justify-center mt-10 mb-[60px]" method="POST" action="{{ route('pre-register-user.store') }}" id="newsletter-form">
                        @csrf
                        <div class="w-full">
                            <input type="email" name="email" id="email" class="bg-[#e7a5ff] border-none h-11 rounded-lg px-3 py-3 font-malishroman font-medium active:border-none focus:border-none mr-3 border-transparent placeholder-gray-600 xl:w-[65%] lg:w-full md:w-full sm:w-full xs:w-full iphone:w-full email" placeholder="Enter Email ID" />
                            <button class="font-bold font-malishroman rounded-lg text-lg border-gradient py-2 xl:px-4 lg:px-12 md:px-12 sm:px-12 xs:px-12 iphone:px-12 text-white btn-email xl:mt-0 lg:mt-5 md:mt-5 sm:mt-5 xs:mt-5 iphone:mt-5" type="button">
                                Join the Waitlist
                            </button>
                            <div class="sm:mt-10 xs:mt-6 hidden success-msg">
                                <p class="text-gray-900 font-malishroman flex justify-center">
                                    <div class="flex items-center sm:text-lg xs:text-sm">
                                        Congrats, you're now part of our exclusive list! &nbsp;&nbsp;
                                        <img src="{{ url('assets/images/congrats.png') }}" class="w-6 h-6" />
                                    </div>
                                </p>
                            </div>
                            <div class="hidden mt-1 lg:ml-3 xl:justify-start lg:justify-center md:justify-center sm:justify-center iphone:justify-center error-msg">
                                <p class="text-red-500 text-sm font-malishroman font-semibold error-message" id="error-message"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full modal"></div>