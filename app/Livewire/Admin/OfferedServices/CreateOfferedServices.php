<?php

namespace App\Livewire\Admin\OfferedServices;

use App\Models\OfferedServices;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateOfferedServices extends Component
{
	public $name;

	public $description;

	public $time;

	public $price;

	public $color;
	
	public $isActived;

	public function rules()
	{
		return [
			'name' => [
				'required',
				'max:255',
				'min:3',
				'string',
				Rule::unique('offered_services', 'name')
					->ignore($this->name, 'name')
					->whereNull('deleted_at')
			],
			'description' => 'nullable',
			'time' => 'nullable',
			'price' => 'required',
			'color' => 'nullable|string',
			'isActived' => 'nullable|boolean'
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'O nome é obrigatório',
			'name.max' => 'O nome aceita no máximo 255 caracteres',
			'name.unique' => 'O nome já existe',
			'price.required' => 'O preço é obrigatório',
		];
	}

	public function store()
	{
		$validated = $this->validate();

		OfferedServices::create($validated);

		return to_route('admin.offered-services.index');
	}

	public function render()
	{
		return view('livewire.admin.offered-services.create-offered-services');
	}
}
