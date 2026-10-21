<?php

use Livewire\Volt\Component;
use App\Models\Report;

new class extends Component {
    public function with()
    {
        return [
            'reports' => Report::where('user_id', auth()->id())->latest()->get()
        ];
    }
}; ?>

<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Mis Reportes</h2>

    @if($reports->isEmpty())
        <p class="text-gray-500">No tienes reportes registrados todavía.</p>
    @else
        <div class="space-y-4">
            @foreach($reports as $report)
                <div class="p-4 border rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-lg">{{ $report->title }}</h3>
                        <p class="text-sm text-gray-600">Tipo: {{ $report->type }} | Estado: {{ $report->status }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>