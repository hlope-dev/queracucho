@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center mt-6">
        <ul class="inline-flex items-center space-x-1 text-sm font-medium text-gray-700">
            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <li class="px-3 py-2 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                    ← Anterior
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 rounded-lg border border-gray-300 hover:bg-blue-100 hover:text-blue-600 transition-colors">
                        ← Anterior
                    </a>
                </li>
            @endif

            {{-- Pagination elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="px-3 py-2 text-gray-500">...</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="px-3 py-2 rounded-lg bg-blue-500 text-white border border-blue-500">{{ $page }}</li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-3 py-2 rounded-lg border border-gray-300 hover:bg-blue-100 hover:text-blue-600 transition-colors">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 rounded-lg border border-gray-300 hover:bg-blue-100 hover:text-blue-600 transition-colors">
                        Siguiente →
                    </a>
                </li>
            @else
                <li class="px-3 py-2 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                    Siguiente →
                </li>
            @endif
        </ul>
    </nav>
@endif

