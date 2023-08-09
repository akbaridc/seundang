<footer class="custom-footer bg-dark py-5 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <div>
                    <div>
                        <img src="{{ asset('assets/template') }}/images/logo-light.png" alt="logo light" height="17">
                    </div>
                    <div class=mt-4 fs-13">
                        <p>Premium Multipurpose Admin & Dashboard Template</p>
                        <p class="ff-secondary">You can build any type of web application like eCommerce, CRM,
                            CMS, Project
                            management apps, Admin Panels, etc using Velzon.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 ms-lg-auto">
                <div class="row">
                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">Company</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="pages-profile">About Us</a></li>
                                <li><a href="pages-gallery">Gallery</a></li>
                                <li><a href="apps-projects-overview">Projects</a></li>
                                <li><a href="pages-timeline">Timeline</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">Apps Pages</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="pages-pricing">Calendar</a></li>
                                <li><a href="apps-mailbox">Mailbox</a></li>
                                <li><a href="apps-chat">Chat</a></li>
                                <li><a href="apps-crm-deals">Deals</a></li>
                                <li><a href="apps-tasks-kanban">Kanban Board</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <h5 class="text-white mb-0">Support</h5>
                        <div class="text-muted mt-3">
                            <ul class="list-unstyled ff-secondary footer-list">
                                <li><a href="pages-faqs">FAQ</a></li>
                                <li><a href="pages-faqs">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('templates.includes.__footer-created')
    </div>
</footer>
