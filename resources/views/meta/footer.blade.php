<footer id="footer">
    <ul class="link_box">
        <li class="link_item"><a href="{{ action('ContactController@index') }}">お問い合わせ</a></li>


    </ul>
    <p class="copyright">Copyrights {{ config('app.name') }} {{ Carbon\Carbon::now()->format('Y') }} </p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
