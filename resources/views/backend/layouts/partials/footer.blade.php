        <!--begin::Footer-->
        <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted font-weight-bold mr-2">2020©</span>
                    <a href="{{route('index')}}" target="_blank"
                       class="text-dark-75 text-hover-primary">Explore Asian Food</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Nav-->
                <div class="nav nav-dark">
                    <a href="#" target="_blank" class="nav-link pl-0 pr-5">About</a>
                    <a href="#" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                    <a href="#" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Footer-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('backend/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('backend/assets/js/pages/widgets.js')}}"></script>
<!--end::Page Scripts-->

<x:notify-messages/>
@notifyJs
</body>
<!--end::Body-->
</html>
