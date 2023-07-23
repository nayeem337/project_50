<!-- JAVASCRIPT -->
<script src="{{asset('/')}}back/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}back/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}back/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}back/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}back/assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{asset('/')}}back/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{asset('/')}}back/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{asset('/')}}back/assets/js/app.js"></script>

<script src="{{asset('/')}}back/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}back/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('success'))


    <script>
        toastr.success('{{Session::get('success')}}')
    </script>

@endif

<script>
    $(function () {

        $('.baseDataTable').DataTable();

    })
</script>
