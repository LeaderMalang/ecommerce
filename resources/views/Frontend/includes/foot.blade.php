<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/poper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    @yield('footer_scripts')
    <script>
        $(function () {
            $('.home-slider-01').owlCarousel({
                loop: true,

                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $('.Gallery').owlCarousel({
                loop: true,
                dots: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        })
    </script>
</body>

</html>
