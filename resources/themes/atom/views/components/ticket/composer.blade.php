@props(['categories'])

<x-card.base title="{{ __('Erstelle ein Ticket') }}" subtitle="{{ __('Bitte beschreibe deine Anfrage unten.') }}" icon="" icon-color="#ee5454">
    <x-form.form route="{{ route('help-center.tickets.store') }}" class="flex flex-col gap-3">
        <x-form.select
            id="category_id"
            :options="$categories"
            value="{{ old('category_id') }}"
        />

        <x-form.input
            id="title"
            type="text"
            label="{{ __('Titel') }}"
            placeholder="{{ __('Gib einen Titel für dein Ticket ein') }}"
            value="{{ old('title') }}"
            required
            autofocus
        />

        <x-form.textarea
            id="content"
            rows="3"
            label="{{ __('Inhalt') }}"
            value="{{ old('content') }}"
        />

        <x-button type="submit" variant="secondary">{{ __('Ticket erstellen') }}</x-button>
    </x-form.form>
</x-card.base> 