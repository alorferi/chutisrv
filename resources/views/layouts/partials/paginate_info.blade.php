<div class="d-flex justify-content-between mt-2">

    <div class="align-self-center">
        {!! $paginator->links() !!}
    </div>

    <div class="text-primary p-2">

@php

$currentTotalItems = $paginator->currentPage() *  $paginator->perPage();

if($currentTotalItems>$paginator->total()){
    $currentTotalItems = $paginator->total();
}

@endphp

        {{$label}}: {{ $currentTotalItems }} of {{ $paginator->total() }}
    </div>

</div>
