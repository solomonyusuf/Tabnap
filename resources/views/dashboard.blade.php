<div>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-slate-800 mb-2">Records Dashboard</h1>
            <p class="text-slate-600">Manage and view all your records</p>
        </div>

        <!-- Filters Card -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Search -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Search</label>
                    <div class="relative">
                        <input 
                            type="text" 
                            wire:model.debounce.100ms="search"
                             wire:input='updateFilter'
                            placeholder="Search by email or ID..."
                            class="w-full px-4 py-2.5 pl-10 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                        >
                        <svg class="absolute left-3 top-3 h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>

                <!-- Date Filter -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Filter by Date</label>
                    <input 
                        type="date" 
                        wire:model="filterDate"
                        wire:input='updateFilter'
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    >
                </div>
            </div>

            <!-- Per Page & Clear Filters -->
            <div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-200">
                <div class="flex items-center space-x-2">
                    <label class="text-sm font-medium text-slate-700">Show:</label>
                    <select 
                        wire:model="perPage"
                        wire:input='updateFilter'
                        class="px-3 py-1.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="text-sm text-slate-600">entries</span>
                </div>
                
                @if($search || $filterDate)
                    <button 
                        wire:click="$set('search', ''); $set('filterDate', '')"
                        class="text-sm text-blue-600 hover:text-blue-700 font-medium transition"
                    >
                        Clear Filters
                    </button>
                @endif
            </div>
        </div>

        <!-- Records Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 text-left">
                                <button 
                                    wire:click="sortBy('id')"
                                    class="flex items-center space-x-1 text-sm font-semibold text-slate-700 hover:text-slate-900 transition"
                                >
                                    <span>ID</span>
                                    @if($sortField === 'id')
                                        <svg class="w-4 h-4 {{ $sortDirection === 'asc' ? 'rotate-180' : '' }}" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                        </svg>
                                    @endif
                                </button>
                            </th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-700">Email</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-700">Password</th>
                            <th class="px-6 py-4 text-left">
                                <button 
                                    wire:click="sortBy('created_at')"
                                    class="flex items-center space-x-1 text-sm font-semibold text-slate-700 hover:text-slate-900 transition"
                                >
                                    <span>Created At</span>
                                    @if($sortField === 'created_at')
                                        <svg class="w-4 h-4 {{ $sortDirection === 'asc' ? 'rotate-180' : '' }}" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                        </svg>
                                    @endif
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @forelse($records as $record)
                            @php
                                $metadata = json_decode($record->metadata, true);
                            @endphp
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                        #{{ $record->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                                            <span class="text-white text-sm font-medium">
                                                {{ strtoupper(substr($metadata['email'] ?? 'U', 0, 1)) }}
                                            </span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-slate-900">{{ $metadata['email'] ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if(isset($metadata['password']) && !empty($metadata['password']))
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                           {{ $metadata['password'] }}
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                            Not Set
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-slate-900">{{ $record->created_at->format('M d, Y') }}</div>
                                    <div class="text-xs text-slate-500">{{ $record->created_at->format('h:i A') }}</div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-slate-900">No records found</h3>
                                    <p class="mt-1 text-sm text-slate-500">Try adjusting your search or filters.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="bg-slate-50 px-6 py-4 border-t border-slate-200">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-slate-700">
                        Showing <span class="font-medium">{{ $records->firstItem() ?? 0 }}</span> 
                        to <span class="font-medium">{{ $records->lastItem() ?? 0 }}</span> 
                        of <span class="font-medium">{{ $records->total() }}</span> results
                    </div>
                    <div>
                        {{ $records->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
