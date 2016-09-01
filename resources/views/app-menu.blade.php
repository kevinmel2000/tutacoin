<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-12">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">

                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="/"><img src="/assets/images/logo.png"></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                          <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/">BERANDA</a></li>
                          @if (Auth::check())
                          <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ url('/dashboard') }}">DASHBOARD</a></li>
                          @endif
                          <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ url('/jual') }}">JUAL</a></li>
													<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ url('/beli') }}">BELI</a></li>
                          <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ url('/tentang') }}">TENTANG</a></li>

                          </div>
                          @if (Auth::check())
                          <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                            <li class="mbr-navbar__item">
                              <a class="mbr-buttons__btn btn btn-danger" href="{{ url('/auth/logout') }}">LOGOUT</a>
                            </li>
                            </ul>
                          </div>
                          @endif

                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
