<div class="w-1/2 m-auto">
    @foreach($members as $member)
        <!--<livewire:cards.member-horizontal :member = $member/>  @include("livewire.cards.member-horizontal", ['member' => $member])-->
        @livewire('cards.member-horizontal', ['member' => $member])
        
    @endforeach
</div>
