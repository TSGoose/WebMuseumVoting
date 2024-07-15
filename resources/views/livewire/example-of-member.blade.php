<div>
  <section class="flex flex-col items-center px-2 mx-60 my-16 max-md:mx-8">
    <h2 class="self-center text-5xl font-black text-center text-black max-md:text-4xl">
      Примеры работ
    </h2>
    <div class="w-full">
      <div class="flex items-center flex-col xl:flex-row justify-center mt-16 w-full max-md:mt-10 max-md:max-w-full">
        <div class="flex justify-between items-center content-center flex-col xl:flex-row gap-5 w-full">

            @foreach($members as $member)
              <!-- <livewire:cards.member-horizontal :member = $member/> @#include("livewire.cards.member-horizontal", ['member' => $member]) -->
                <div>
                  @livewire('cards.member-vertical', ['member' => $member], key('member_vert-'.$member->id))
                </div>
            @endforeach

        </div>
      </div>
    </div>
  </section>
</div>