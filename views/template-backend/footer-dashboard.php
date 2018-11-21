    <!--   Core JS Files   -->
    <script src="{{ base_url() }}/assets/backend/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{ base_url() }}/assets/backendjs/core/popper.min.js" type="text/javascript"></script>
    <script src="{{ base_url() }}/assets/backendjs/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="{{ base_url() }}/assets/backendjs/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{ base_url() }}/assets/backend/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ base_url() }}/assets/backend/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ base_url() }}/assets/backend/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ base_url() }}/assets/backend/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });
    </script>
</body>

</html>