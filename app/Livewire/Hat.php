<?php

namespace App\Livewire;

use ATehnix\VkClient\Auth;
use Livewire\Component;
use App\Services\SessionService;

class Hat extends Component
{
    public function clickAutorizeVk()
    {
        //$auth = new Auth('client_id', 'client_secret', 'redirect_uri');
        //$auth->getUrl();
        //$token = $auth->getToken($_GET['code']);
        //dd($auth->getUserData($_GET['code']));
        
        //dd(SessionService::getLogin());
        //return redirect()->route('main', ['login' => 'mylogin']);
        //dd(SessionService::getLogin());
    }

    public function render()
    {
        //SessionService::setLogin('111');
        //dd(SessionService::getLogin());
        return view('livewire.hat');
    }
}
