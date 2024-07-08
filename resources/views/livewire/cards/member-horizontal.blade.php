<article class="rounded-lg shadow my-10">

    <div class="flex overflow-hidden  flex-row justify-between">
      <div class="relative overflow-hidden rounded-l-lg flex flex-row items-center justify-between w-[35%] max-md:ml-0 max-md:w-full]">
          <img src="{{ $images[$indexImg] }}" alt="" class = "absolute z-1">  
          <div class = "absolute z-2 w-full h-full flex justify-row {{ $hideRightArrow ? 'justify-between' : 'justify-end' }}">
            <div class = "w-10/12">
              <button type="button" wire:click="left" class="flex {{ $hideLeftArrow ? 'hidden' : '' }} justify-center items-center w-1/5 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 " ><livewire:buttons.arrow/></button> 
            </div> 
            <button type="button" wire:click="right" class="flex {{ $hideRightArrow ? 'hidden' : '' }} justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 scale-x-[-1]"><livewire:buttons.arrow/></button> 
          </div>  
      </div>
    <div class="flex flex-col max-md:flex-col max-md:gap-0 w-[65%]">
      <div class="flex flex-col items-center ml-5  max-md:ml-0 max-md:w-full">
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
      <div class = "flex flex-row justify-between items-center">
        <audio controls src="music1.mp3" class = "bg-blue-600   saturate-200   rounded-br-lg w-full"></audio>
      </div>
    </div>

  </div>
</article>
