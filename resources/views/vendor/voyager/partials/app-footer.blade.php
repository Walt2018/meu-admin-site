<footer class="app-footer">
    <div class="site-footer-right">

       <a href="https://bkspace.com.br" target="_blank">Walterson Gusmão</a>

        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
