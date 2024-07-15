<article class="rounded-lg shadow my-10">
  
  <div class="flex flex-col lg:flex-row overflow-hidden justify-between">
    <div class="relative overflow-hidden rounded-t-lg lg:rounded-l-lg lg:rounded-tr-none flex items-center w-full lg:w-[35%] min-h-[250px]">
    <a href="#" wire:click.prevent="clickImg"><div class = "absolute z-10 w-full h-full bottom-0"></div></a>  
    <img src="{{ $images[$indexImg] }}" alt="" class="absolute z-1 object-cover w-full h-full">
      <div class="absolute w-full h-full flex  {{ $hideLeftArrow ?  'justify-end' : 'justify-between'}}">
      
        <button type="button" wire:click="left" class="z-50 flex {{ $hideLeftArrow ? 'hidden' : '' }} justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5"><livewire:buttons.arrow/></button>

        <button type="button" wire:click="right" class="z-50 flex {{ $hideRightArrow ? 'hidden' : '' }} justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 scale-x-[-1]"><livewire:buttons.arrow/></button>
      </div>
    </div>
    <div class="flex flex-col w-full lg:w-[65%]">
      <div class="flex flex-col h-full items-center p-5 bg-white">
        <section class="flex flex-col h-full lg:flex-row items-center w-full gap-5">
          <div class="flex flex-col items-center h-full w-full lg:w-6/12">
            <div class="flex flex-col justify-center items-center grow text-center">
              <h2 class="text-2xl font-semibold leading-7 text-gray-900">{{ $member->title }}</h2>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->description }}</p>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->author }}</p>
            </div>
          </div>
          <div class="flex flex-col h-full w-full lg:w-6/12">
            <div class="flex flex-col justify-center items-center h-1/2 text-xl font-mono w-full rounded-md text-white" >
              <audio id="song-{{ $member->music }}" class="hidden w-full max-w-md mx-auto" controls>
                <source src="{{ $member->music }}" type="audio/mpeg">
              </audio>
              <div class="flex flex-row items-center">
                  <button onclick="document.getElementById('song-{{ $member->music }}').currentTime = 0, document.getElementById('song-{{ $member->music }}').pause()" class="px-2 mx-1"><livewire:buttons.skipback/></button>
                  <button onclick="document.getElementById('song-{{ $member->music }}').play()" class="px-2 mx-1"><livewire:buttons.play/></button>
                  <button onclick="document.getElementById('song-{{ $member->music }}').pause()" class="px-2 mx-1"><livewire:buttons.pause/></button>
              </div>
            </div>
            
            <div class="flex flex-col h-1/2 grow justify-end">
              @if (!$selected)
                  <button onclick="document.getElementById('cb_member-{{ $member->id }}')" wire:click="clickSelect" class="justify-center px-7 py-3 text-base font-medium leading-6 text-center text-gray-500 whitespace-nowrap border border-solid border-zinc-200 rounded-[50px] hover:text-blue-600 hover:bg-white hover:outline hover:outline-blue-600">
                    Проголосовать
                  </button>
                @else
                  <button onclick="document.getElementById('cb_member-{{ $member->id }}')" wire:click="clickSelect" class="justify-center px-7 py-3 text-base font-medium leading-6 text-center text-white bg-blue-600 border border-solid border-zinc-200 rounded-[50px] hover:text-blue-600 hover:bg-white hover:outline hover:outline-blue-600">
                    Отменить голос
                  </button>
                @endif
              <div class="self-center text-center mt-1">
                <p class="text-base font-medium leading-6 text-gray-500 max-w-[89px]">Голосов: {{ $member->votes }}</p>
              </div>
            </div>

            
          </div>
        </section>
      </div>
     
  </div>
</article>