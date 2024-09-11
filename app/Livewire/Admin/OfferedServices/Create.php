<?php

namespace App\Livewire\Admin\OfferedServices;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
	#[Validate('required|max:255|min:3|string')]
	public $name;

	#[Validate('nullable')]
	public $description;

	#[Validate('nullable|numeric')]
	public $time;

	#[Validate('required|decimal:10,2')]
	public $price;

	public function store() 
	{
		dd($this->form);
	}

	public function render()
	{
		return view('livewire.admin.offered-services.create');
	}
}
