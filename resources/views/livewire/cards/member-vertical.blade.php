<article class="flex flex-col rounded-lg shadow-sm max-w-[370px]">

  <div  class="flex overflow-hidden relative justify-between items-center w-full aspect-[1.85] rounded-t-lg " alt="">
    <!--<a href="/"><div class = "absolute z-10 w-full h-full bottom-1/2"></div></a>-->
    
    <img loading="lazy" src="{{ Storage::disk('local')->url($images[$indexImg]) }}" alt="" class="absolute z-1 object-cover w-full h-full">
    <div class = "absolute w-full h-full flex justify-row {{ $hideLeftArrow ?  'justify-end' : 'justify-between'}}">
        
        <button type="button" wire:click="left" class = "z-50 flex {{ $hideLeftArrow ? 'hidden' : '' }} justify-center items-center h-full w-2/12 bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 rounded-tl-lg"><livewire:buttons.arrow/></button>        
        
        <button type="button" wire:click="right" class = "z-50 flex {{ $hideRightArrow ? 'hidden' : '' }} justify-center items-center h-full w-2/12 bg-gray-900 bg-opacity-0 hover:bg-opacity-40 px-5 rounded-tl-lg scale-x-[-1]"><livewire:buttons.arrow/></button> 

    </div>
  </div>


  <div class="flex flex-col px-9 py-5 w-full bg-white items-center">

    <h2 class="text-2xl font-semibold leading-7 text-center text-gray-900">
      {{ $member->title }}
    </h2>

    <p class="mt-4 text-base leading-6 text-center text-gray-500">
      {{ $member->description }}
    </p>

    <p class="mt-4 text-base leading-6 text-center text-gray-500">
      {{ $member->author }}
    </p>
    <div class="flex flex-col justify-center items-center h-1/2 text-xl font-mono w-full rounded-md text-white mt-2" >
      <audio id="song-{{ $member->music }}" class="hidden w-full max-w-md mx-auto" controls>
        <source loading="lazy" src="{{ Storage::disk('local')->url($member->music) }}" type="audio/mpeg">
      </audio>
      <div class="flex flex-row items-center">
          <button onclick="document.getElementById('song-{{ $member->music }}').currentTime = 0, document.getElementById('song-{{ $member->music }}').pause()" class="px-2 mx-1"><livewire:buttons.skipback/></button>
          <button onclick="document.getElementById('song-{{ $member->music }}').play()" class="px-2 mx-1"><livewire:buttons.play/></button>
          <button onclick="document.getElementById('song-{{ $member->music }}').pause()" class="px-2 mx-1"><livewire:buttons.pause/></button>
      </div>
    </div>
    <p class="text-base font-medium leading-6 mt-2 text-gray-500 max-w-[89px]">
      Голосов: {{ $member->votes }}
    </p>
  </div>


</article>