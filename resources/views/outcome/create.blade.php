<x-layouts.index :title="$title">
    <x-forms.transaction 
    :options="['Rent', 'Leisure', 'Shopping', 'Transport', 'Other']" 
    method="POST"
    action="{{ route('outcomes.index') }}"
    />
</x-layouts.index>