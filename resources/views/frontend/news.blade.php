<x-frontend-layout>
    {{-- <h1>{{$posts}}</h1> --}}
    <section>
        <div class="container">
            <div class="grid grid-cols-12 gap-8 mt-9">
                <div class="col-span-8 space-y-6">
                    {{$news->title}}
                    {{$news->views}}
                    {!!$news->description!!}
                    <div class="sharethis-inline-share-buttons"></div>

                    {{-- {{Str::limit($news->title,5,'....')}} --}}
                    <div class="fb-comments" data-href="{{route('news',$news->id)}}" data-width=""
                        data-numposts="{{$news->id}}">
                    </div>
                </div>
                <div class="col-span-4">
                    @foreach ($advertises as $ad)
                        <div>
                            <a href="{{ $ad->link}}" target="_blank">
                                <img src="{{ asset($ad->image)}}" class="w-full h-[200px] object-cover" alt="{{ $ad->title}}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
