<!-- ナビバー componentにはvueで宣言した変数の値は渡されないっぽい -->
<div class="uk-section-primary" style="width: 100%; border-bottom: dotted 2px #ffffff;">
    <div class="uk-container">
        <nav class="uk-navbar">
            <div class="uk-navbar-left">
                <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                </a>
            </div>
            <div class="uk-navbar-center">
                <a href="/" class="uk-navbar-item">
                    <div style="font-size: 30px; font-family: Droid Sans;
                    ">WikiLearns</div>
                </a>
            </div>
            <div class="uk-navbar-right">
                <a uk-navbar-toggle-icon v-on:click="inportButton" class="uk-icon
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
