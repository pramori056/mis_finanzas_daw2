<x-layouts.index :title="$title">
    <x-forms.transaction 
        :options="['Salary', 'Donation', 'Investment', 'Freelance', 'Other']" 
        method="POST" 
        action="{{ route('incomes.store') }}" 
    />
</x-layouts.index>