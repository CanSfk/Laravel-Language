<div class="grid grid-cols-[auto,1fr] grid-rows-[auto,2fr] max-md:gap-5 max-sm:grid-rows-[auto 3] max-sm:grid-cols-1">
    <div class="w-[300px] h-[200px] {{$color}} rounded-md mr-10 max-md:mr-0 shadow-[2px_2px_8px_rgba(0,0,0,.4)] grid place-items-center row-span-2 max-md:row-span-1 max-[400px]:mx-auto">
        <a href="https://codeneon.com.tr" target="_blank" class="text-2xl font-bold text-slate-200 -rotate-12 transition duration-300 hover:scale-[1.1]">codeneon.com.tr</a>
    </div>
    <div class="flex gap-10 h-max items-start justify-between mb-3 max-md:mb-0 max-md:flex-col max-md:h-max max-md:gap-1">
        <h2 class="text-2xl font-bold text-slate-800 max-md:order-2">{{$title}}</h2>
        <span class="text-sm font-medium text-green-600 align-bottom min-w-[100px]">{{$time}} {{__('blogPost.time')}}</span>
    </div>
    <p class="text-lg font-medium text-slate-600 max-md:col-span-2 max-sm:col-span-1">{{$description}}</p>
</div>