@props([
    'containerClass' => 'flex flex-col bg-white border border-neutral-200 rounded-lg shadow-sm',
    'headerClass' => 'px-8 py-5 border-b border-neutral-200',
    'theadClass' => 'bg-neutral-50 py-3 px-8 gap-4 text-sm',
    'cols' => '5',
    'tableClass' => 'divide-y divide-neutral-200',
    'tbodyClass' => 'divide-y divide-neutral-200',
    'tfootClass' => 'grid bg-white divide-y divide-neutral-200',
    'footerClass' => 'px-8 py-4',
])

@php
    $theadClasses = $theadClass . ' ' . 'grid-cols-' . $cols;
    $tfootClasses = $tfootClass . ' ' . 'grid-cols-' . $cols;
@endphp

<div class="{{ $containerClass }}">
    @isset($header)
        <div class="{{ $headerClass }}">
            {{ $header }}
        </div>
    @endisset

    <table class="{{ $tableClass }}">
        @isset($colgroup)
            {{ $colgroup }}
        @else
            <colgroup>
                <col class="w-2/3 lg:w-3/12">
                <col class="lg:w-3/12">
                <col class="lg:w-2/12">
                <col class="lg:w-2/12">
                <col class=" lg:w-2/12">
            </colgroup>
        @endisset

        @isset($thead)
            <thead class="{{ $theadClasses }}">
                <tr>
                    {{ $thead }}
                </tr>
            </thead>
        @endisset

        @isset($tbody)
            <tbody class="{{ $tbodyClass }}">
                {{ $tbody }}
            </tbody>
        @endisset

        @isset($tfoot)
            <tfoot class="{{ $tfootClasses }}">
                {{ $tfoot }}
            </tfoot>
        @endisset
    </table>

    @isset($footer)
        <div class="{{ $footerClass }}">
            {{ $footer }}
        </div>
    @endisset
</div>
