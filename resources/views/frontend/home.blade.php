<x-frontend-layout>

    {{-- Home Section --}}
    <section class="py-10">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-8">
                    {{-- <img class="h-[500px] w-full object-cover" src = "data:image/jpeg;base64,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" alt="latest-news"> --}}
                    {{-- <h1 class="text-xl font-bold pt-2">विश्वकप लिग–टू : आज नेपालले अमेरिकासँग प्रतिस्पर्धा गर्दै</h1> --}}
                    <img class="h-[500px] w-full object-cover" src="{{ asset($latest_news->image) }}" alt="Latest News">
                    <h1 class="text-xl font-bold pt-2">{{ $latest_news->title }}</h1>

                </div>
                <div class="col-span-4 space-y-4">
                    <div class="bg-[#d507071a] py-4 border-l-8 border-[#d50707]">
                        <h3 class="primary pl-4 text-xl font-sanserif">ट्रेन्डिङ</h3>
                    </div>
                    @foreach ($trending_news as $news)
                        <x-news-card :news="$news" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Home Section --}}

    <form action="{{route('search')}}" method="get">
        <input type="text" name="q" id="search">
        <button type="submit">Search</button>
    </form>

    <section class="py-10">
        <div class="container space-y-10">
            @foreach ($categories as $category)
                @if (count($category->posts) > 0)
                    <div>
                        <h1>{{ $category->nep_title }}</h1>
                        <div class="grid grid-cols-4 gap-4 pt-2">
                            @foreach ($category->posts as $news)
                                <x-news-card :news="$news" />
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    {{-- News By Category --}}
    <section class="py-10">
        <div class="container">

        </div>
    </section>
    {{-- News By Category  --}}

</x-frontend-layout>
