<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.1/axios.min.js"
    integrity="sha512-w9PRLSWbo+Yqin/AzSMGoP+qe8UF1njFtd1rEnR58Xv2GEJNEa6O6Bv53mkPbNyAwGCn1HVt1OOvd5i+E55t+w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new WOW().init();
</script>
<script src="{{ asset('assets/js/SAADA.js') }}"></script>
<script src="{{ asset('assets/js/showcard.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (session('success'))
    <script>
        toastr.success("{{ session('success') }}")
    </script>
@endif
@if (session('error'))
    <script>
        toastr.error("{{ session('error') }}")
    </script>
@endif

@stack('script')
