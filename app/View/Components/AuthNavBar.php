<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AuthNavBar extends Component
{
    public $user;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Obtener data del usuario autenticado
        $this->user = Auth::user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-nav-bar');
    }

}
