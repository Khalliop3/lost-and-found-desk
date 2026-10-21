<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use App\Models\Categoria;
use App\Models\Report; // Asegúrate de usar tu modelo correspondiente (Report o Articulo)

new class extends Component {
    use WithFileUploads;

    public $type = 'lost';
    public $title;
    public $category_id;
    public $image;

    public function with()
    {
        return [
            'categories' => Categoria::where('is_active', true)->get()
        ];
    }

    public function guardarReporte()
    {
        $this->validate([
            'title' => 'required|max:80',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|max:5120',
        ]);

        $imagePath = $this->image->store('reports', 'public');

        Report::create([
            'user_id' => auth()->id(),
            'type' => $this->type,
            'title' => $this->title,
            'category_id' => $this->category_id,
            'image_url' => $imagePath,
            'status' => 'pending',
        ]);

        session()->flash('message', '¡Reporte creado exitosamente!');
        return redirect()->to('/mis-reportes');
    }
}; ?>

<form wire:submit.prevent="guardarReporte" class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md space-y-4">
    <h2 class="text-2xl font-bold text-gray-800">Reportar Objeto Perdido o Encontrado</h2>

    <!-- Tipo de Reporte -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Tipo</label>
        <select wire:model="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <option value="lost">Objeto Perdido</option>
            <option value="found">Objeto Encontrado</option>
        </select>
    </div>

    <!-- Título -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Título breve</label>
        <input type="text" wire:model="title" placeholder="Ej. Mochila azul" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    </div>

    <!-- Categoría -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Categoría</label>
        <select wire:model="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <option value="">Selecciona una categoría</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Subida de Imagen -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Foto del Objeto</label>
        <input type="file" wire:model="image" class="mt-1 block w-full">
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
        Guardar Reporte
    </button>
</form>