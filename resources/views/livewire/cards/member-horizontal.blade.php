<article class="rounded-lg shadow my-10">
  <div class="flex gap-5 max-md:flex-col max-md:gap-0">
    <div class="relative overflow-hidden rounded-l-lg flex flex-row items-center justify-between w-[35%] max-md:ml-0 max-md:w-full]">
        <img src="{{ $images[$indexImg] }}" alt="" class = "absolute z-1">  
        <div class = "absolute z-2 w-full h-full flex justify-row justify-between"> 
          <button type="button" wire:click="left" class="flex justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 " ><livewire:buttons.arrow/></button> 
          <button type="button" wire:click="right" class="flex justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 scale-x-[-1]"><livewire:buttons.arrow/></button> 
        </div>  
      </div>
    <div class="flex flex-col items-center ml-5 w-[65%] max-md:ml-0 max-md:w-full">
      <section class="flex items-center grow justify-center w-full bg-white max-md:px-5 max-md:max-w-full">
        <div class="flex items-center w-full gap-5 max-md:flex-col max-md:gap-0">
          <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow text-center max-md:mt-10">
              <h2 class="text-2xl font-semibold leading-7 text-gray-900">{{ $member->title }}</h2>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->description }}</p>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->author }}</p>
            </div>
          </div>
          <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow justify-end pt-6 pb-3.5 max-md:mt-10">
              <div class = "flex flex-row justify-between items-center">
                <div class="flex  justify-start items-center w-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c8a6e134ab4a75cc942471c11ec83a610384956949d58a71e818b02e98b5ed1?apiKey=91f2b3c7e1024281a6c7da0dfb0eaca6&" alt="" class="shrink-0 aspect-square fill-zinc-700" />
                </div>
                <div class = "w-full flex justify-center pr-8">
                  <div class="w-48 rounded-full bg-zinc-700 h-2 ">
                    <div class="w-6 rounded-full bg-blue-600 h-2 "></div>
                  </div>
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
