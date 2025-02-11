<x-layouts.index :title="$title">
    <x-forms.transaction 
        :options="$options" 
        method="PUT" 
        action="{{ route('incomes.update', $income->id) }}" 
        :date="$income->Date" 
        :category="$income->Category" 
        :amount="$income->Amount" 
    />
</x-layouts.index>