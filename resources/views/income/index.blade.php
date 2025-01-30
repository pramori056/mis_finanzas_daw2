<x-layouts.index :title="$title">
  <x-button href="/incomes/create" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-4">Add new income</x-button>
  <x-table :tableData="$tableData" />
</x-layouts.index>