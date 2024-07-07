<article class="rounded-lg shadow my-10">
  <div class="flex gap-5 max-md:flex-col max-md:gap-0">
    <div class="rounded-l-lg flex flex-row items-center justify-between w-[35%] max-md:ml-0 max-md:w-full bg-cover bg-center bg-[url('https://cdn.builder.io/api/v1/image/assets/TEMP/50c8f2882bca7fabe913eaa22930fec71368321080635b3c15be6ea6c588c493?apiKey=6af3166b190849ae913a27151a2b7816&')]">

        <button class = "flex justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 rounded-l-lg"><livewire:buttons.arrow/></button> 
        <button class = "flex justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 scale-x-[-1]"><livewire:buttons.arrow/></button> 
    
    </div>
    <div class="flex flex-col items-center ml-5 w-[65%] max-md:ml-0 max-md:w-full">
      <section class="flex items-center grow justify-center w-full bg-white max-md:px-5 max-md:max-w-full">
        <div class="flex w-full gap-5 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow text-center max-md:mt-10">
              <h2 class="text-2xl font-semibold leading-7 text-gray-900">{{ $member->title }}</h2>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->description }}</p>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->author }}</p>
            </div>
          </div>
          <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow justify-end pt-6 pb-3.5 max-md:mt-10">
              <div class="flex gap-5 justify-between">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c8a6e134ab4a75cc942471c11ec83a610384956949d58a71e818b02e98b5ed1?apiKey=91f2b3c7e1024281a6c7da0dfb0eaca6&" alt="" class="shrink-0 w-8 aspect-square fill-zinc-700" />
                <div class="flex flex-col justify-center my-auto rounded-full bg-slate-100">
                  <div class="shrink-0 h-2 rounded-full bg-zinc-700"></div>
                </div>
              </div>
              <button class="justify-center self-center px-7 py-3 mt-2 text-base font-medium leading-6 text-center text-white bg-blue-600 border border-solid border-zinc-200 rounded-[50px] max-md:px-5 hover:text-blue-600 hover:bg-white hover:outline hover:outline-blue-600">
                Отменить голос
              </button>
              <div class="self-center text-center mt-1">
                <p class="text-base font-medium leading-6 text-gray-500 max-w-[89px]">Голосов: {{ $member->votes }}</p>
              </div>             
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</article>
