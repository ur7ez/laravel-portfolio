<!-- ====== Hero Section Start -->
<div class="relative bg-white dark:bg-slate-800 pt-[60px] pb-[110px] lg:pt-[80px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-5/12">
                <div class="hero-content">
                    <h1
                        class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-3"
                    >
                        My name is Mike. <br/>
                        I am the <span class="rounded-md text-amber-600">PHP Web developer</span>
                    </h1>
                    <p class="text-base text-body-color mb-8 max-w-[520px]">
                        I am a developer with 5 years of experience. <br/>
                        I love sharing my knowledge to others, that's why I created a
                        <a
                            class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary"
                            href="https://youtube.com/ur7ez" target="_blank"
                        >Youtube Channel</a>.<br>
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                My Projects
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="font-normal text-xs flex items-center  text-body-color dark:text-gray-300 mb-4">
                            Follow me on social media
                            <span class="ml-2 inline-block h-[1px] w-8 bg-body-color"></span>
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img
                            src="{{ url('/img/me_hero.png') }}"
                            alt="hero"
                            class="max-w-full lg:ml-auto rounded-md rounded-tl-[6.5rem]"
                        />
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                          <svg
                              width="93"
                              height="93"
                              viewBox="0 0 93 93"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
                          </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
