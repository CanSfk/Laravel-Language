<nav class="py-4 flex justify-between items-center flex-wrap">
    <a href="javascript:void(0)" class="font-extrabold text-3xl text-gray-800">My Blog</a>

    <div class="flex items-center justify-between bg-slate-100 flex-1
     max-lg:flex-none max-lg:fixed max-lg:z-20 max-lg:pt-4 max-lg:pr-5 max-lg:gap-10 max-lg:w-[300px] max-lg:flex max-lg:flex-col max-lg:right-[-350px] 
     max-lg:top-0 max-lg:bottom-0 max-lg:items-start max-lg:justify-normal transition-all duration-300" data-navbar>

        <ion-icon name="close-outline" class="text-[40px] font-bold text-purple-500 ml-auto max-lg:inline hidden" data-toggle></ion-icon>

        <div class="flex gap-24 mx-auto max-lg:flex-col max-lg:ml-5 max-lg:gap-5">
            <x-navlink url="blog" text="{{__('navlink.home')}}" />
            <x-navlink url="about" text="{{__('navlink.about')}}" />
            <x-navlink url="acount" text="{{__('navlink.acount')}}" />
        </div>

        <div class="max-lg:mx-auto">
            <select onchange="window.location.href=this.value" class="py-1 px-4 outline-none bg-slate-800 rounded-md text-slate-100 text-lg font-bold">
                @foreach(config('app.locales') as $locale)
                <option value="{{route('lang',$locale)}}" {{app()->getlocale()==$locale ? 'selected' : ''}}>{{$locale}}</option>
                @endforeach
            </select>
        </div>

    </div>

    <div data-toggle data-screen class="fixed top-0 left-0 right-0 bottom-0 bg-slate-800 opacity-0 z-10 transition duration-300 invisible"></div>

    <ion-icon name="menu-outline" class="text-[40px] font-extrabold text-purple-500 max-lg:inline hidden" data-toggle></ion-icon>
</nav>