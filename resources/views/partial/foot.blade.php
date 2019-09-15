<!-- jQuery 2.2.3 -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>

<!-- CK Editor -->
<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('admin/select2/dist/js/select2.full.min.js')}}"></script>


<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content')
    // //bootstrap WYSIHTML5 - text editor
    // $('.textarea').wysihtml5()

    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>


