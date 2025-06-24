<?php

use function Livewire\Volt\{state};
 
state(['count' => 0]);
 
$increment = fn () => $this->count++;

?>

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Livewire Volt Counter</h1>
    <div class="text-center">
        <h2 class="text-4xl mb-2">{{ $count }}</h2>
        <button wire:click="increment" class="bg-blue-600 text-white px-4 py-2 rounded">Increment</button>
    </div>
</div>
