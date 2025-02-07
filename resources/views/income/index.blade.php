<x-layouts.index :title="$title">
  <x-alert :message="$successMessage" />
  <x-button href="/incomes/create">Add new income</x-button>
  <x-table :tableData="$tableData" :origin="'incomes'"/>
</x-layouts.index>