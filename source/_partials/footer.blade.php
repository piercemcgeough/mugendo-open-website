<footer id="footer">
    <div class="container">
        <div class="row">
            <!-- SOCIAL ICONS -->
            <div class="col-sm-6 col-sm-push-6 footer-social-icons">
                <span>Follow us:</span>
                <a href="{{ $page->facebookUrl }}"><i class="fa fa-facebook"></i></a>
                <a href="{{ $page->instagramUrl }}"><i class="fa fa-instagram"></i></a>
                {{-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-pinterest-p"></i></a> --}}
            </div>

            <!-- /SOCIAL ICONS -->
            <div class="col-sm-6 col-sm-pull-6 copyright">
                <p>
                    &copy; {{ date('Y') }} Mugendo-Open.com
                    {{-- <a href="">ShapedTheme</a>. All Rights Reserved. --}}
                </p>
            </div>
        </div>
    </div>
</footer>
