<div class="relative overflow-x-auto shadow shadow-lg mt-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                @foreach ($tableData['heading'] as $heading)
                    <th scope="col" class="px-6 py-3">
                        {{$heading}}
                    </th>    
                @endforeach
                <th scope="col" class="px-6 py-3">
                    Actions
                </th> <!-- New Actions column -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData['data'] as $row)
                <!-- Alternating row colors between white and light blue -->
                <tr class="{{ $loop->even ? 'bg-white' : 'bg-blue-50' }} border-b">
                    @foreach ($row as $key => $cell)
                        <!-- First column as <th> and others as <td> -->
                        @if ($loop->first)
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$cell}}
                            </th>
                        @else
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                {{$cell}}
                            </td>
                        @endif
                    @endforeach
                    <td class="px-6 py-4 text-gray-900 whitespace-nowrap flex items-center justify-between"> <!-- New Actions cell with flex -->
                        <div>
                            <x-button href="{{ route($origin.'.edit', $row['id']) }}" class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded inline-flex items-center">Edit</x-button>
                        </div>
                        <div>
                            <form action="{{ route($origin.'.destroy', $row['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <x-button name="delete" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded inline-flex items-center">Delete</x-button>
                            </form>
                        </div>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>