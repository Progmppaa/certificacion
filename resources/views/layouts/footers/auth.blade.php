<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="#">
                        {{ __(config('app.name')) }}
                    </a>
                </li>
                {{-- <li>
                    <a href="https://creative-tim.com/presentation">
                        {{ __('About Us') }}
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        {{ __('Blog') }}
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        {{ __('Licenses') }}
                    </a>
                </li> --}}
            </ul>
        </nav>
        <div class="copyright float-right">
          {{ config('app.name') }}
          <span class="text-muted">{{ ' V.' . env('APP_VERSION') }}</span>
          &copy;
          <script>
              document.write(new Date().getFullYear())
              // with <i class="material-icons"></i>
          </script>, creado por la
          <a href="https://minaguas.gob.ve" target="_blank">{{ env('APP_DEVELOPER') }}</a>.
        </div>
    </div>
</footer>
