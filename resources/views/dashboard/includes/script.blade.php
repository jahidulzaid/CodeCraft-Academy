<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("is_dark");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.documentElement.classList.remove("is_dark");
    } 
</script>

 <!-- JS here -->
 <script src="{{ asset('/') }}website/js/vendor/modernizr-3.5.0.min.js"></script>
 <script src="{{ asset('/') }}website/js/vendor/jquery-3.6.0.min.js"></script>
 <script src="{{ asset('/') }}website/js/popper.min.js"></script>
 <script src="{{ asset('/') }}website/js/bootstrap.min.js"></script>
 <script src="{{ asset('/') }}website/js/isotope.pkgd.min.js"></script>
 <script src="{{ asset('/') }}website/js/slick.min.js"></script>
 <script src="{{ asset('/') }}website/js/jquery.meanmenu.min.js"></script>
 <script src="{{ asset('/') }}website/js/ajax-form.js"></script>
 <script src="{{ asset('/') }}website/js/wow.min.js"></script>
 <script src="{{ asset('/') }}website/js/jquery.scrollUp.min.js"></script>
 <script src="{{ asset('/') }}website/js/imagesloaded.pkgd.min.js"></script>
 <script src="{{ asset('/') }}website/js/jquery.magnific-popup.min.js"></script>
 <script src="{{ asset('/') }}website/js/waypoints.min.js"></script>
 <script src="{{ asset('/') }}website/js/jquery.counterup.min.js"></script>
 <script src="{{ asset('/') }}website/js/plugins.js"></script>
 <script src="{{ asset('/') }}website/js/swiper-bundle.min.js"></script>
 <script src="{{ asset('/') }}website/js/main.js"></script>

 <script>
     // On page load or when changing themes, best to add inline in `head` to avoid FOUC
     if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
       document.getElementById("light--to-dark-button")?.classList.add("dark--mode");
     } 
     if (localStorage.getItem("theme-color") === "light") {
       document.getElementById("light--to-dark-button")?.classList.remove("dark--mode");
     } 
</script>