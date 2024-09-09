<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $nameLabel;
    public $emailLabel;
    public $messageLabel;
    public $buttonText;
    public function __construct($nameLabel, $emailLabel, $messageLabel, $buttonText)
    {
        $this->nameLabel = $nameLabel;
        $this->emailLabel = $emailLabel;
        $this->messageLabel = $messageLabel;
        $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-form');
    }
}
