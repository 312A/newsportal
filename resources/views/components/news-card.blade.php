@props(['news'])
<a href="{{route('news',$news->id)}}">
    <div class="grid grid-cols-12 items-center gap-2  rounded-md overflow-hidden hover:shadow">
        <div class="col-span-4">
            <img  class="h-[90px] w-full object-cover"
             src="{{asset($news->image)}}" alt="logo">
        </div>
        <div class="col-span-8">
            <h1 class="font-bold">{{$news->title}}</h1>
            <small><i class="fa-solid fa-calendar-days"></i>
                {{nepalidate($news->created_at)}}</small>
        </div>
    </div>
</a>
