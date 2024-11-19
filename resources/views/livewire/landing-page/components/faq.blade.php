<div class="bg-cmyBlue-100 text-cmyBlue-900 flex justify-center py-24 px-5 md:px-12 lg:px-20 xl:px-32 font-cmyPoppins">
    <div class="max-w-7xl w-full grid grid-cols-2">
        <div class="">
            <h2>Frequently asked questions</h2>
            <p>Can't find the answer you're looking for? Feel free to book a call!</p>
        </div>
        <div class="flex flex-col justify-end">
            @foreach ($faqs as $index => $faq)
                <div class="border-cmyBlue-900 border-b-2 transition pb-2" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between items-center pb-1 pt-8">
                        <p class="text-cmy2xl text text-cmyBlue-900 font-semibold">{{ $faq['question'] }}</p>
                        <div class="" :class="open ? 'transform rotate-180 mr-2.5' : 'transform rotate-0 mr-2.5'">
                            <x-bi-arrow-down-circle class="size-5" />
                        </div>
                    </button>
                    <p class="" x-show="open">{{ $faq['answer'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
