<?php

namespace App\Http\Livewire;

use App\Models\Delivery;
use Livewire\Component;

class ListDeliveries extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.list-deliveries')
            ->with('deliveries', $this->deliveries());
    }

    private function deliveries()
    {
        if (empty($this->search)) {
            return Delivery::all();
        }

        return Delivery::join('customers', 'deliveries.customer_id', '=', 'customers.id')
            ->where('deliveries.description', 'LIKE', "%{$this->search}%")
            ->orWhere('deliveries.address', 'LIKE', "%{$this->search}%")
            ->orWhere('customers.name', 'LIKE', "%{$this->search}%")
            ->orWhere('customers.phone', 'LIKE', "%{$this->search}%")
            ->get();
    }
}
