@props(['ticket'])

<x-card.base title="{{ __('Kommentare') }}" subtitle="{{ __('Bitte übermittel deine Antwort unten') }}" icon="" icon-color="#eec980">
    <x-form.form route="{{ route('help-center.tickets.replies.store', $ticket) }}" class="flex flex-col gap-3">
        <x-form.textarea id="content" placeholder="{{ __('Gebe hier deine Antwort ein') }}" required />
        <x-button type="submit" variant="secondary">{{ __('Antwort vorlegen') }}</x-button>
    </x-form.form>
</x-card.base>