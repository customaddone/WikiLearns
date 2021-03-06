<div class="uk-section-primary" id="top" style="width: 100%; border-bottom: dotted 2px #ffffff;">
    <div class="uk-container">
        <nav class="uk-navbar">
            <div class="uk-navbar-left">
                @if( Auth::check() )
                    <form action="/logout" method="POST">
                        <button uk-icon="icon: user; ratio: 1.5" class="uk-navbar-item uk-logo">
                        </button>
                        @csrf
                    </form>
                @else
                    <a href="/login" uk-icon="icon: sign-in; ratio: 1.5" class="uk-navbar-item uk-logo">
                    </a>
                @endif
            </div>
            <div class="uk-navbar-center">
                <!-- たとえcomponentだろうとRouterのbindの影響は及ぶ -->
                <router-link to="/" class="uk-navbar-item">
                    <div style="font-size: 30px; font-family: Droid Sans;
                        ">WikiLearns</div>
                </router-link>
            </div>
            <div class="uk-navbar-right">
                <a uk-navbar-toggle-icon href="" class="uk-icon
                    uk-navbar-toggle-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20"
                         data-svg="navbar-toggle-icon">
                        <rect y="9" width="20" height="2"></rect>
                        <rect y="3" width="20" height="2"></rect>
                        <rect y="15" width="20" height="2"></rect>
                    </svg>
                </a>
            </div>
        </nav>
    </div>
</div>
