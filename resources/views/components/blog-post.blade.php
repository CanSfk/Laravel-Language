<div class="flex gap-8">
    <div class="min-w-[300px] min-h-[200px] max-w-[300px] max-h-[200px] {{$color}} rounded-md shadow-[2px_2px_8px_rgba(0,0,0,.4)] grid place-items-center">
        <a href="https://codeneon.com.tr" target="_blank" class="text-2xl font-bold text-slate-200 -rotate-12 transition duration-300 hover:scale-[1.1]">codeneon.com.tr</a>
    </div>
    <div class="flex flex-col gap-3">
        <div class="flex gap-5 items-start justify-between">
            <h2 class="text-2xl font-bold text-slate-800 max-w-[80%]">{{$title}}</h2>
            <span class="text-sm font-medium text-green-600 align-bottom">{{$time}} {{__('blogPost.time')}}</span>
        </div>
        <p class="text-lg font-medium text-slate-600 break-all">{{$description}}</p>
    </div>
</div>