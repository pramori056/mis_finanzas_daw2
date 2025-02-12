<x-layouts.index :title="$title">
    <x-error-message />
    <x-forms.transaction 
        :options="$options" 
        method="PUT" 
        action="{{ route('outcomes.update', $outcome->id) }}" 
        :date="$outcome->Date" 
        :category="$outcome->Category" 
        :amount="$outcome->Amount" 
    />
</x-layouts.index>