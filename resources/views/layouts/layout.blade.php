<!-- begin:: Page -->

<div class="kt-grid kt-grid--hor kt-grid--root">
  <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

    @include("partials/_aside/base")
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

      <!--[html-partial:include:{"file":"partials/_header/base.html"}]/-->
      @include("partials/_header/base")
      <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        @include("partials/_subheader/subheader-v1")
        <!--[html-partial:include:{"file":"partials/_subheader/subheader-v1.html"}]/-->

        @yield("content")
        <!--[html-partial:include:{"file":"partials/_content/base.html"}]/-->
      </div>

      @include("partials/_footer/base")
      <!--[html-partial:include:{"file":"partials/_footer/base.html"}]/-->
    </div>
  </div>
</div>

<!-- end:: Page -->

@include("partials/_quick-panel")

@include("partials/_scrolltop")


<!--[html-partial:include:{"file":"partials/_quick-panel.html"}]/-->

<!--[html-partial:include:{"file":"partials/_scrolltop.html"}]/-->

<!--[html-partial:include:{"file":"partials/_toolbar.html"}]/-->

<!--[html-partial:include:{"file":"partials/_demo-panel.html"}]/-->

<!--[html-partial:include:{"file":"partials/_chat.html"}]/-->
