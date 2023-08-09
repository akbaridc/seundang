@include('templates.includes.__head')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">

        <!-- navbar -->
        @include('templates.includes.__navbar')
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
        @include('templates.frontend.content.hero-section')
        <!-- end hero section -->

        <!-- start client section -->
        @include('templates.frontend.content.client-section')
        <!-- end client section -->

        <!-- start services -->
        @include('templates.frontend.content.services-section')
        <!-- end services -->

        <!-- start features -->
        @include('templates.frontend.content.features-section')
        <!-- end features -->

        <!-- start plan -->
        @include('templates.frontend.content.plan-section')
        <!-- end plan -->

        <!-- start faqs -->
        @include('templates.frontend.content.faq-section')
        <!-- end faqs -->

        <!-- start review -->
        @include('templates.frontend.content.review-section')
        <!-- end review -->

        <!-- start counter -->
        @include('templates.frontend.content.counter-section')
        <!-- end counter -->

        <!-- start Work Process -->
        @include('templates.frontend.content.work-section')
        <!-- end Work Process -->

        <!-- start team -->
        @include('templates.frontend.content.team-section')
        <!-- end team -->

        <!-- start contact -->
        @include('templates.frontend.content.contact-section')
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
