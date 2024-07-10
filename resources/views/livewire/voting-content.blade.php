<div class="2xl:w-2/3 lg:w-3/4 w-4/5 m-auto">
    @foreach($members as $member)
        <!--<livewire:cards.member-horizontal :member = $member/>  @#include("livewire.cards.member-horizontal", ['member' => $member])-->
            @livewire('cards.member-horizontal', ['member' => $member], key('member_hor-'.$member->id))
    @endforeach
</div>
