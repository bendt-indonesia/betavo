@if(!isset($footer_hide))
<div class="section-footer section-footer-a {{isset($footer_bg)?'footer-bg':''}} anim">
    <div class="home-footer width-medium">
        <div class="h-left anim-2">
            <div>
                <a href="#" class="d-block">
                    <img class="light-logo" style="width:180px;"
                         src="{{asset('/img/betavo.png')}}"
                         alt="Betavo Logo">
                </a>
                @if(!isset($footer_bg))
                <b class="copy d-block opacity-5 text-left">&copy; 2006 - {{date('Y')}}</b>
                @endif
            </div>
        </div>
        <div class="h-right anim-3">
            @if(!isset($footer_bg))
                <p class="text-line"><a href="tel:{{phoneval('phone')}}">{{conval('phone')}}</a></p>
                <p class="text-line"><a href="mailto:{{conval('email')}}">{{conval('email')}}</a></p>
            @else
                <p class="text-line"><a href="tel:{{phoneval('phone')}}">{{conval('phone')}}</a> | <a href="mailto:{{conval('email')}}">{{conval('email')}}</a></p>
            @endif
        </div>
    </div>
</div>
@endif
