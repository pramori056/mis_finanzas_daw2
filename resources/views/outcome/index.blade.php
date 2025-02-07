<x-layouts.index :title="$title">
    <x-alert :message="$successMessage" />
    <x-button href="/outcomes/create">Add new outcome</x-button>
    <x-table :tableData="$tableData" :origin="'outcomes'" />
</x-layouts.index>