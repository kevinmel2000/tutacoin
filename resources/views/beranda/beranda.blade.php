@extends('app')

@section('content')

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-11" style="background-image: url(assets/images/bg.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">

        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">
                <div class="row"><div class=" col-sm-8 col-sm-offset-2">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">[DEMO] JUAL BELI BITCOIN</h1>
                        <p class="mbr-hero__subtext">[DEMO] TutaCOIN adalah aplikasi untuk transaksi jual beli bitcoin. Lorem ipsum dolor sit amet, cum et labore prodesset argumentum, nemore deleniti cu eam.</p>
                    </div>
                    @if (Auth::guest())
                    <div class="mbr-buttons btn-inverse mbr-buttons--center">
                      <a class="mbr-buttons__btn btn btn-lg btn-danger animated fadeInUp delay" href="{{ url('/jual') }}">JUAL</a>
                      <a class="mbr-buttons__btn btn btn-lg btn-warning animated fadeInUp delay" href="{{ url('/beli') }}">BELI</a>
                    </div>
                    @else
                    <div class="mbr-buttons btn-inverse mbr-buttons--center">
                      <a class="mbr-buttons__btn btn btn-lg btn-danger animated fadeInUp delay" href="{{ url('/dashboard') }}">DASHBOARD</a>
                    </div>
                    @endif
                    <div class="mbr-hero animated fadeInDown">
                    <p class="mbr-hero__subtextrate">Anda Jual Rp. {{number_format($bitcoin_rate->rate_jual, 0, ',', '.')}} dan Anda Beli Rp. {{number_format($bitcoin_rate->rate_beli, 0, ',', '.')}}</p>
                  </div>
                </div></div>
            </div></div>
        </div>
    </div>
</section>




<section class="msgbox-1" id="msg-box2-13" style="background-color: rgb(255, 255, 255);">


    <div class="container">
        <div class="row">

            <div class="col-sm-8">
                <h2>[DEMO] TRANSAKSIKAN BITCOIN ANDA DISINI.</h2>

            </div>
            <div class="col-sm-2"><a class="btn btn-lg btn-default" href="{{ url('/jual') }}">JUAL</a></div>
            <div class="col-sm-2"><a class="btn btn-lg btn-default" href="{{ url('/beli') }}">BELI</a></div>
        </div>
    </div>
</section>

<section class="content-2 simple col-1 col-undefined mbr-parallax-background" id="content5-4" style="background-image: url(assets/images/bg3.jpg);">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(40, 50, 78);"></div>
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>[DEMO] JUAL BELI BITCOIN!</h3>
                        <div><p>[DEMO] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in metus fringilla, tincidunt tellus in, facilisis elit. Duis non velit nisl. Pellentesque bibendum nisl faucibus interdum elementum. Pellentesque massa mi, consectetur ac nibh non, malesuada pellentesque neque. Proin ut diam dignissim, tincidunt sem in, blandit felis. Nulla non nibh nec sem suscipit pretium. Aenean sed risus sit amet nibh suscipit finibus. Integer vestibulum scelerisque scelerisque.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons1-8" style="background-color: rgb(255, 255, 255);">


    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">BAGIKAN HALAMAN!</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    <div class="mbr-social-icons__icon social-likes__icon facebook socicon-bg-facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>

                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon twitter socicon-bg-twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>

                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon plusone socicon-bg-google" title="Share link on Google+">
                        <i class="socicon socicon-google"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
