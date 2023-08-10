@include('templates.includes.__head')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">

        <!-- navbar -->
        @include('templates.includes.__navbar')
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
        @include('frontend.landing-page.hero-section')
        <!-- end hero section -->

        <!-- start client section -->
        @include('frontend.landing-page.client-section')
        <!-- end client section -->

        <!-- start services -->
        @include('frontend.landing-page.services-section')
        <!-- end services -->

        <!-- start features -->
        @include('frontend.landing-page.features-section')
        <!-- end features -->

        <!-- start plan -->
        @include('frontend.landing-page.plan-section')
        <!-- end plan -->

        <!-- start faqs -->
        @include('frontend.landing-page.faq-section')
        <!-- end faqs -->

        <!-- start review -->
        @include('frontend.landing-page.review-section')
        <!-- end review -->

        <!-- start counter -->
        @include('frontend.landing-page.counter-section')
        <!-- end counter -->

        <!-- start Work Process -->
        @include('frontend.landing-page.work-section')
        <!-- end Work Process -->

        <!-- start team -->
        @include('frontend.landing-page.team-section')
        <!-- end team -->

        <!-- start contact -->
        @include('frontend.landing-page.contact-section')
        <!-- end contact -->

        <!-- Start footer -->
        @include('templates.includes.__footer')
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    @include('templates.includes.__vendor-scripts')
</body>

</html>
