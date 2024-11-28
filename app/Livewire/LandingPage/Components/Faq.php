<?php

namespace App\Livewire\LandingPage\Components;

use Livewire\Component;

class Faq extends Component
{
    public $faqs = [
[
    'question' => 'Lorem ipsum dolor sit amet?',
    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
],
[
    'question' => 'Ut enim ad minim veniam?',
    'answer' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
],
[
    'question' => 'Duis aute irure dolor in reprehenderit?',
    'answer' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
],
[
    'question' => 'Excepteur sint occaecat cupidatat non proident?',
    'answer' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
],
[
    'question' => 'Sed ut perspiciatis unde omnis iste natus?',
    'answer' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
],
[
    'question' => 'At vero eos et accusamus et iusto?',
    'answer' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.'
]
];
    public function render()
    {
        return view('livewire.landing-page.components.faq');
    }
}
