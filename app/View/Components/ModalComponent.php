<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $modalType = null,
        public $buttonColor= null,
        public $buttonText = null,
        public $modalColor= null,
        public $modalTextColor= null,
        public $modalTitle= null,
        public $modalSaveButtonColor= null,
        public $modalCloseButtonColor= null,
        public $modalContent = null
        )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
       
        return view('components.modal-component');
    }
}
