@if ($paginator->hasPages())
    <div class="flex items-center justify-end mb-20">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="rounded-l rounded-sm border border-brand-light px-3 py-2 cursor-not-allowed no-underline text-gray-400 font-inter">Sebelumnya</span>
        @else
            <a
                class="rounded-l rounded-sm border-t border-b border-l border-brand-light px-3 py-2 text-brand-dark hover:bg-brand-light no-underline hover:bg-gray-300 font-inter"
                href="{{ $paginator->previousPageUrl() }}"
                rel="prev"
            >
                Sebelumnya
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element)) {{--ini utk yang kotak (...)--}}
                <span class="border-t border-b border-l border-brand-light px-3 py-2 cursor-not-allowed no-underline font-inter">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- ini untuk kotak halaman yg aktif --}}
                        <span class="border-t border-b border-l border-brand-light px-3 py-2 bg-brand-light no-underline bg-gray-300 font-inter">{{ $page }}</span>
                    @else
                        {{-- ini untuk bukan halaman yg aktif --}}
                        <a class="border-t border-b border-l border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline hover:bg-gray-100 font-inter" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline hover:bg-gray-100 font-inter" href="{{ $paginator->nextPageUrl() }}" rel="next">Selanjutnya</a>
        @else
            <span class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline cursor-not-allowed  text-gray-400 font-inter">Selanjutnya</span>
        @endif
    </div>
@endif

{{-- &raquo; = symbol next --}}