<div class="w-1/2 m-auto">
    @foreach($members as $member)
        @include("livewire.cards.member-horizontal", ['member' => $member])
    @endforeach
</div>
