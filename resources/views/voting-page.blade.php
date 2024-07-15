@extends('welcome')

@section('content')
    <form wire:submit="vote">
    <livewire:voting-content/> 
    <livewire:buttons.accept-button/>    
    </form>
         


    
@endsection