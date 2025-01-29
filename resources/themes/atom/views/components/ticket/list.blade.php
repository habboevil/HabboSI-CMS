@props(['tickets'])

<x-card.base title="{{ __('Offene Tickets') }}" subtitle="{{ __('Deine aktuellen offenen Tickets') }}" icon="" icon-color="#eec980">
    <div class="flex flex-col gap-3">
        @foreach ($tickets as $ticket)
            <x-ticket.item :ticket="$ticket" />
        @endforeach
    </div>
</x-card.base>