<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full px-4 lg:w-6/12">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ url('/img/me1.png') }}"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ url('/img/me3.png') }}"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <img
                                src="{{ url('/img/me2.png') }}"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="mt-10 lg:mt-0">
                    <figure class="font-semibold text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500"
                                    cite="https://www.brainyquote.com/citation/quotes/timothy_weah_975475">
                            <p class="before:content-['\201C'] after:content-['\201D']">With hard work and dedication, anything is possible.</p>
                        </blockquote>
                        <figcaption class="text-right">— Timothy Weah, <cite>BrainyQuote.com</cite></figcaption>
                    </figure>
                    <h2 class="dark:text-gray-200 mb-8 font-bold text-3xl sm:text-4xl">
                        About me
                    </h2>
                    <p class="text-base text-body-color dark:text-gray-400 mb-8">
                        I have been working as a professional software developer for 5 years.<br/>
                        During my career I have worked on various types of projects with various technologies, but very
                        often I feel that I am a junior developer who just started coding.<br/>
                    </p>
                    <p class="text-base text-body-color dark:text-gray-400 mb-8">
                        In 2023 I decided to create a YouTube channel and share my knowledge. My channel is mostly
                        focused on
                        <span class="text-amber-500 font-bold">PHP</span> and <span class="text-amber-500 font-bold">JavaScript</span>.<br/>
                        My content is mostly focused on practical examples and projects.<br/>
                    </p>
                    <x-button-link href="https://youtube.com/ur7ez" variant="red" target="_blank">
                        View my channel
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== About Section End -->
