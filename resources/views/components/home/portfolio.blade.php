<!-- ====== Portfolio Section Start -->
<section
    id="portfolio"
    x-data="
        {
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
    class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
>
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    <h2 class="text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-gray-300 mb-4">
                        My Recent Projects
                    </h2>
                    <p class="text-base text-body-color">
                        You learn most by building projects. Go ahead and build something right now.
                    </p>
                </div>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap justify-center">
            <div class="w-full px-4">
                <ul class="mb-12 flex flex-wrap justify-center space-x-1">
                    <li class="mb-1">
                        <button
                            @click="selectedTab = 'all' "
                            :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
                            class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                        >
                            All Projects
                        </button>
                    </li>
                    @foreach($tabs as $tab)
                        <li class="mb-1">
                            <button
                                @click="selectedTab = '{{$tab}}' "
                                :class="selectedTab == '{{$tab}}' ? activeClasses : inactiveClasses "
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                            >
                                {{$tab}}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
            @foreach($items as $item)
                <x-portfolio-item
                    :title="$item['title']"
                    :categories="$item['category']"
                    :image="$item['image']"
                    :github="$item['github']"></x-portfolio-item>
            @endforeach
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->
