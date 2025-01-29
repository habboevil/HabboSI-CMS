<footer
    class="px-12 pt-5"
    onclick="showFooter()">
    <div class="container mx-auto flex md:px-10 py-3 flex-col md:flex-row items-center justify-between">
        <div class="flex flex-col md:flex-row items-center gap-3">
            <img src="/assets/images/icons/habboicon.png" alt="">
            <div class="flex text-center md:text-start flex-col gap-0.5 text-white opacity-60 text-sm font-normal">
                <p>© 2024 Habbo.si - created by HabboSI Team</p>
                <p>All rights go to their respective owner(s). We are not endorsed, affiliated by Sulake Corporation.</p>
            </div>
        </div>
        <div class="flex items-center text-white text-opacity-60 gap-4 relative top-2.5 text-sm font-light">
            <a href="{{ route('help-center.rules') }}">
                Habbo Way
            </a>
            <a href="{{ route('help-center.index') }}">
                Habbo Help Center
            </a>
            <a href="#">
                Terms of Use
            </a>
            <a href="#">
                Discord
            </a>
        </div>
    </div>
</footer>

<style>
    .swal2-html-container {
        max-height: 300px;
        overflow-y: scroll;
    }
</style>

<script>
    function showFooter() {
        const creator =
            '<a class="text-blue-400 underline" href="https://devbest.com/threads/atom-cms-a-multi-theme-cms.93034/" target="_blank">Object</a>';
        const credits = [
            '<strong>Kasja</strong> Helping with design, ideas & GFX <br/>',
            '<strong>Nicollas </strong> Dark mode, Turbolinks, Performance improvements, Article reactions, User sessions, Layout improvements & PT-BR translations <br/>',
            '<strong>Dominic</strong> Performance improvements & User sessions <br/>',
            '<strong>EntenKoeniq#0001</strong> Automatic language registration, rooms page, profile page tweaks & shop additions<br/>',
            '<strong>MisterDeen</strong> Custom Discord widget, bugfixes & tweaks <br/>',
            '<strong>Kani</strong> RCON base & Findretros API <br/>',
            '<strong>Beny</strong> Findretros API Fixes & CF Fixes <br/>',
            '<strong>Oliver</strong> Profile page additions & Finnish translations <br/>',
            '<strong>Live</strong> French translations, bugfixes & tweaks <br/>',
            '<strong>DamienJolly</strong> Bugfixes <br/>',
            '<strong>Danbo</strong> Bugfixes <br/>',
            '<strong>Diddy/Josh</strong> Code readability improvements <br/>',
            '<strong>Damue & EntenKoeniq#0001</strong> German translations <br/>',
            '<strong>Talion</strong> Turkish translations <br/>',
            '<strong>CentralCee, Rille & Tuborgs</strong> Swedish translations <br/>',
            '<strong>Yannick</strong> Netherlands translations <br/>',
            '<strong>Gedomi</strong> Spanish translations <br/>',
            '<strong>Lorenzune</strong> Italian translations <br/>',
            '<strong>Twana & Zaruzet</strong> Norwegian translations <br/>',
            '<strong>Plow</strong> French translations <br/>'
        ];
        const content =
            '{{ __('Thank you for playing :hotel. We have put a lot of effort into making the hotel what it is, and we truly appreciate you being here', ['hotel' => $settings->get('hotel_name')]) }}' + '❤️';
        const drivenBy = '{{ __(':hotel is driven by Atom CMS made by:', ['hotel' => $settings->get('hotel_name')]) }}';

        Swal.fire(
            '<span class="text-[26px]">{{ $settings->get('hotel_name') }}</span>',
            `<span class="text-sm">${content}<br/><br/>${drivenBy} ${creator}<br/><br/><span class="flex flex-col space-y-2">{{ __('Credits:') }}<br/>${credits.join('')}</span></span>`,
            'question'
        )
    }
</script>