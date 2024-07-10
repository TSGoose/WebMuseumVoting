<article class="rounded-lg shadow my-10">
  
  <div class="flex flex-col lg:flex-row overflow-hidden justify-between">
    <div class="relative overflow-hidden rounded-t-lg lg:rounded-l-lg lg:rounded-tr-none flex items-center w-full lg:w-[35%] min-h-[250px]">
    <a href="/" wire:click.prevent="clickImg"><div class = "absolute z-10 w-full h-full bottom-0"></div></a>  
    <img src="{{ $images[$indexImg] }}" alt="" class="absolute z-1 object-cover w-full h-full">
      <div class="absolute w-full h-full flex  {{ $hideLeftArrow ?  'justify-end' : 'justify-between'}}">
      
        <button type="button" wire:click="left" class="z-50 flex {{ $hideLeftArrow ? 'hidden' : '' }} justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5"><livewire:buttons.arrow/></button>

        <button type="button" wire:click="right" class="z-50 flex {{ $hideRightArrow ? 'hidden' : '' }} justify-center items-center w-2/12 h-full bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 scale-x-[-1]"><livewire:buttons.arrow/></button>
      </div>
    </div>
    <div class="flex flex-col w-full lg:w-[65%]">
      <div class="flex flex-col items-center p-5 bg-white">
        <section class="flex flex-col lg:flex-row items-center w-full gap-5">
          <div class="flex flex-col w-full lg:w-6/12">
            <div class="flex flex-col grow text-center lg:mt-10">
              <h2 class="text-2xl font-semibold leading-7 text-gray-900">{{ $member->title }}</h2>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->description }}</p>
              <p class="mt-4 text-base leading-6 text-gray-500">{{ $member->author }}</p>
            </div>
          </div>
          <div class="flex flex-col w-full lg:w-6/12">
            <div class="flex flex-col grow justify-end pt-6 pb-3.5 lg:mt-10">
              <button class="justify-center self-center px-7 py-3 mt-2 text-base font-medium leading-6 text-center text-white bg-blue-600 border border-solid border-zinc-200 rounded-[50px] hover:text-blue-600 hover:bg-white hover:outline hover:outline-blue-600">
                Отменить голос
              </button>
              <div class="self-center text-center mt-1">
                <p class="text-base font-medium leading-6 text-gray-500 max-w-[89px]">Голосов: {{ $member->votes }}</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="flex justify-between items-center">
        <audio controls src="{{ $member->music }}" class="rounded-b-lg bg-blue-600 lg:rounded-bl-none lg:rounded-br-lg w-full"></audio>
      </div>
    </div>
  </div>
</article>