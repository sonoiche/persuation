<div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#de86ff] rounded-xl shadow-md p-4 w-1/2 mx-auto hidden z-10 h-[595px] modal-content" id="modal-content">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-transparent">
        <!-- Modal header -->
        <div class="flex items-start justify-between rounded-t p-2">
            <button class="text-gray-700 bg-transparent hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center close-modal" id="">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        <div class="p-6 space-y-6 bg-modal">
            <div class="flex justify-center items-start">
                <div class="bg-gradient-to-r from-secondary to-purple-700 p-[1px] rounded-full ml-6">
                    <div class="font-bold tracking-wider font-malishroman text-lg bg-[#de86ff] text-gray-900 py-2 px-8 rounded-full flex">
                        Join before the slots run out
                        <div class="flex items-center ml-3">
                            <img src="{{ url('assets/images/rocket.png') }}" class="w-6 h-6" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-20">
                <div class="w-[80%] text-center">
                    <h1 class="text-5xl text-black font-wavehausSemiBold">
                        Join Persuation Waitlist for Exclusive 3-month Free Access
                    </h1>
                    <p class="text-primary text-xl font-malishroman italic mt-10">We're giving an exclusive 3-month, full package free access<br>for the <span class="font-bold">first 100</span> people in our waitlist.</p>
                    <form class="flex justify-center mt-10 mb-[60px]" method="POST" action="{{ route('pre-register-user.store') }}" id="newsletter-form">
                        @csrf
                        <div class="w-[80%]">
                            <input type="email" name="email" id="email" class="bg-[#e7a5ff] border-none h-11 rounded-lg px-3 py-3 font-malishroman font-medium active:border-none focus:border-none mr-3 border-transparent placeholder-gray-600 w-[65%] email" placeholder="Enter Email ID" />
                            <button class="font-bold font-malishroman rounded-lg text-lg border-gradient py-2 px-4 text-white btn-email" type="button">
                                Join the Waitlist
                            </button>
                            <div class="hidden mt-10 justify-center success-msg">
                                <p class="text-gray-900 text-lg font-malishroman">Congrats, you're now part of our exclusive list!</p>
                                <div class="flex items-center ml-3">
                                    <img src="{{ url('assets/images/congrats.png') }}" class="w-6 h-6" />
                                </div>
                            </div>
                            <div class="hidden mt-1 ml-3 justify-start error-msg">
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