<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cart items
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <table class="uk-table uk-table-striped">
                        <thead>
                            <tr>
                                <th class="uk-width-medium">Product</th>
                                <th class="uk-table-expand">User</th>
                                <th class="uk-width-small">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>
                                <td>{{ $item->product->title }} - ({{ $item->quantity }})</td>
                                <td>{{ $item->user->name }} - id: {{ $item->user->id }}</td>
                                <td>
                                    <div>
                                        <a clsss="uk-icon-button" href="#" uk-icon="icon: pencil;"></a>
                                        <a clsss="uk-icon-button" href="#" uk-icon="icon: trash;"></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

