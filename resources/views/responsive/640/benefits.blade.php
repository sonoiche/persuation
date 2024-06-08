<section class="my-36 px-4 bg-f5 flex justify-center w-full">
    <div>
        <div class="text-center bg-role">
            <h1 class="font-bold font-wavehausExtraBold text-4xl text-pPurple leading-[90px] uppercase">
                Unique benefits for every role
            </h1>
        </div>
        <div class="mt-10 relative z-10">
            <div class="mb-4 flex justify-center">
                <div class="w-full">
                    <ul class="flex flex-wrap justify-evenly border-b-gray-500 border-b text-xl font-bold tracking-wider font-malishroman text-center text-white relative tabs" role="tablist">
                        <li class="me-2 border-b-[3px] border-secondary hover:border-secondary active:border-secondary relative top-[2px] li-marketers" role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent py-4 px-5 hover:text-secondary border-secondary text-secondary marketers-tab"
                                type="button"
                                role="tab"
                                aria-controls="marketers"
                                aria-selected="false"
                            >
                                Marketers
                            </button>
                        </li>
                        <li class="me-2 border-b-none border-secondary hover:border-secondary active:border-secondary relative top-[2px] li-solopreneurs" role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent py-4 px-5 hover:text-secondary solopreneurs-tab"
                                type="button"
                                role="tab"
                                aria-controls="solopreneurs"
                                aria-selected="false"
                            >
                                Solopreneurs
                            </button>
                        </li>
                        <li class="me-2 border-b-none border-secondary hover:border-secondary active:border-secondary relative top-[2px] li-agencies" role="presentation">
                            <button
                                class="inline-block rounded-t-lg border-b-2 border-transparent py-4 px-5 hover:text-secondary agencies-tab"
                                type="button"
                                role="tab"
                                aria-controls="agencies"
                                aria-selected="false"
                            >
                                Agencies
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 mt-12 marketers" role="tabpanel" aria-labelledby="marketers-tab">
                <div class="mt-32 pb-[60px] border-2 border-gray-400 rounded-2xl px-10">
                    <div class="grid place-items-center border-b-2 border-darkGreen mt-20">
                        <div class="w-full">
                            <div class="grid place-items-center -mt-[180px] mb-[60px]">
                                <img src="{{ url('assets/images/tab-img-1.png') }}" class="w-[200px]" />
                            </div>
                            <div class="mt-8 mb-12 text-center">
                                <h1 class="text-secondary uppercase text-3xl font-bold font-malishroman leading-[40px]">Get marketing & design expertise at fraction of the cost</h1>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pt-10">
                        <ul class="list-image-[url(../images/sparkler-yellow.png)] ml-16">
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Build for your Business Goals</span>
                            </li>
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Get access to Marketing intelligence</span>
                            </li>
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Design unlimited pages</span>
                            </li>
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Publish with your own domain</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-20 flex justify-center">
                    <button class="font-bold tracking-wider font-malishroman rounded-full text-xl border-gradient py-3 px-8 text-white btn-p-md open-btn">
                        Signup for Launch
                    </button>
                    <div class="bg-gradient-to-r from-secondary to-pPurple p-[1px] rounded-full ml-7">
                        <button class="font-bold tracking-wider font-malishroman text-xl bg-primary text-white py-3 px-16 rounded-full">
                            Talk to Us
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 mt-12 solopreneurs" role="tabpanel" aria-labelledby="solopreneurs-tab">
                <div class="mt-32 pb-[60px] border-2 border-gray-400 rounded-2xl px-10">
                    <div class="grid place-items-center border-b-2 border-darkGreen mt-20">
                        <div class="w-full">
                            <div class="grid place-items-center -mt-[180px] mb-[60px]">
                                <img src="{{ url('assets/images/tab-img-2.png') }}" class="w-[200px]" />
                            </div>
                            <div class="mt-8 mb-12 text-center">
                                <h1 class="text-secondary uppercase text-3xl font-bold font-malishroman leading-[40px]">Turn your strategies into design and get real-time data</h1>
                            </div>
                        </div>
                    </div>
                    <div class="pt-10 flex items-center justify-start">
                        <ul class="list-image-[url(../images/sparkler-yellow.png)] ml-16">
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Build for High-conversion</span>
                            </li>
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Custom Pages based on your Goals</span>
                            </li>
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Built-in Analytics and Heatmap</span>
                            </li>
                            <li class="text-white font-semibold text-xl py-4">
                                <span class="ml-4">Unlimited Iteration</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 mt-12 agencies" role="tabpanel" aria-labelledby="agencies-tab">
                <div class="mt-32 pb-[60px] border-2 border-gray-400 rounded-2xl px-10">
                    <div class="grid place-items-center border-b-2 border-darkGreen mt-20">
                        <div class="w-full">
                            <div class="grid place-items-center -mt-[180px] mb-[60px]">
                                <img src="{{ url('assets/images/tab-img-3.png') }}" class="w-[200px]" />
                            </div>
                            <div class="my-8 text-center">
                                <h1 class="text-secondary uppercase text-3xl font-bold font-malishroman leading-[40px]">Achieve quicker tat, cost efficiency and reduced resource dependecy</h1>
                            </div>
                        </div>
                    </div>
                    <div class="pt-10 flex items-center justify-start">
                        <ul class="list-image-[url(../images/sparkler-yellow.png)] ml-16">
                            <li class="text-white font-semibold text-base py-4">
                                <span class="ml-4">Build in 5 minutes</span>
                            </li>
                            <li class="text-white font-semibold text-base py-4">
                                <span class="ml-4">Design unlimited pages</span>
                            </li>
                            <li class="text-white font-semibold text-base py-4">
                                <span class="ml-4">Publish with any Domain</span>
                            </li>
                            <li class="text-white font-semibold text-base py-4">
                                <span class="ml-4">Value pricing</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>