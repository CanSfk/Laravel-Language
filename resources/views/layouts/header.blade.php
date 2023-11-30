<nav class="py-4 flex justify-between items-center">
    <a href="javascript:void(0)" class="font-extrabold text-3xl text-gray-800">My Blog</a>
    <div class="flex gap-24">
        <x-navlink url="blog" text="{{__('navlink.home')}}" />
        <x-navlink url="about" text="{{__('navlink.about')}}" />
        <x-navlink url="acount" text="{{__('navlink.acount')}}" />
    </div>
    <div>
        <select class="py-1 px-4 outline-none bg-slate-800 rounded-md text-slate-100 text-lg font-bold">
            @foreach(config('app.locales') as $locale)
            <option {{app()->getlocale()==$locale ? 'selected' : ''}}>{{$locale}}</option>
            @endforeach
        </select>
    </div>
</nav>