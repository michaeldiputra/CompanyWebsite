<div class="bg-cmyBlue-100 text-cmyBlue-900 flex justify-center py-24 px-5 md:px-12 lg:px-20 xl:px-32 font-cmyPoppins">
    <div class="max-w-7xl w-full gap- gap-16 grid lg:grid-cols-2">
        <div class="space-y-3 lg:space-y-6 mb">
            <h2 class="text-4xl">Frequently asked questions</h2>
            <p class="text-cmyLg">Can't find the answer you're looking for? Feel free to book a call!</p>
        </div>
        <div class="flex flex-col justify-end">
            @foreach ($faqs as $index => $faq)
                <div class="border-cmyBlue-900 border-b-2 transition pb-1 lg:pb-2" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between items-center pb-0.5 lg:pb-1 pt-4 md:pt-6 lg:pt-8">
                        <p class="text-cmy2xl text text-cmyBlue-900 font-semibold text-left">{{ $faq['question'] }}</p>
                        <div class="" :class="open ? 'transform rotate-180 mr-2.5' : 'transform rotate-0 mr-2.5'">
                            <x-bi-arrow-down-circle class="size-5" />
                        </div>
                    </button>
                    <p class="text-sm" x-show="open">{{ $faq['answer'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
