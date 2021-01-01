<div class="w-full min-h-screen p-8">
    <div class="flex justify-center w-full">
        <div class="flex justify-between w-2/3 pb-8">
            {{-- <a class="p-2 text-sm text-white bg-gray-500 rounded hover:bg-gray-600" href="#">Add Product</a> --}}
            <div class="text-sm">
                Show
                <select class="p-1 border border-gray-300 rounded shadow">
                    {{-- TODO: learn alpinejs select onchange event --}}
                    @foreach ([10, 50, 100] as $entries)
                        <option value="{{$entries}}" wire:click="$set('length', {{$entries}})">{{$entries}}</option>
                    @endforeach
                </select>
                Entries
            </div>
            <input class="px-2 text-sm border border-gray-300 rounded shadow" wire:model="search" type="text" placeholder="Search Product">
        </div>
    </div>
    <div class="flex justify-center w-full">
        <table class="w-2/3 border border-collapse border-gray-800 shadow">
            <thead>
                <tr>
                    <th class="p-2 text-sm text-gray-500 bg-white border border-gray-300">Name</th>
                    <th class="p-2 text-sm text-gray-500 bg-white border border-gray-300">Created At</th>
                    <th class="p-2 text-sm text-gray-500 bg-white border border-gray-300">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="p-2 text-sm bg-white border border-gray-300 text-gray">{{ $product->title }}</td>
                        <td class="p-2 text-sm text-center bg-white border border-gray-300 text-gray">{{ $product->created_at->toDateTimeString() }}</td>
                        <td class="p-2 text-sm text-center bg-white border border-gray-300 text-gray">-</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-center w-full pt-8">
        <div class="flex justify-end w-2/3">
            @if ($pages_count > 0)
                <div class="px-4 py-2 text-sm bg-white border border-gray-300 cursor-pointer" wire:click="$set('page', {{ $page > 1 ? $page - 1 : 1 }})">Previous</div>
                @for ($_page = 1; $_page <= $pages_count; $_page++)
                    <div class="px-4 py-2 border border-gray-300 text-sm @if ($page == $_page) bg-gray-500 text-white @else bg-white cursor-pointer @endif" wire:click="$set('page', {{ $_page }})">{{ $_page }}</div>
                @endfor
                <div class="px-4 py-2 text-sm bg-white border border-gray-300 cursor-pointer" wire:click="$set('page', {{ $page < $pages_count ? $page + 1 : $pages_count }})">Next</div>
            @endif
        </div>
    </div>

</div>
