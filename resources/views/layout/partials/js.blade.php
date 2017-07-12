<!-- jQuery 2.2.0 -->
<script src="{{ url('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script src="makemyinvite_slider/amazingcarousel.js"></script>
<script src="makemyinvite_slider/initcarousel-1.js"></script>
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button);
</script> -->
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<!-- <script src="{{ url('plugins/morris/morris.min.js') }}"></script> -->
<!-- Sparkline -->
<!-- <script src="{{ url('plugins/sparkline/jquery.sparkline.min.js') }}"></script> -->
<!-- jvectormap -->
<!-- <script src="{{ url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> -->
<!-- <script src="{{ url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="{{ url('plugins/knob/jquery.knob.js') }}"></script> -->
<!-- daterangepicker -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js') }}"></script> -->		
<!-- <script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script> -->
<!-- datepicker -->
<!-- <script src="{{ url('plugins/datepicker/bootstrap-datepicker.js') }}"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script> -->
<!-- Slimscroll -->
<!-- <script src="{{ url('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script> -->
<!-- FastClick -->
<!-- <script src="{{ url('plugins/fastclick/fastclick.js') }}"></script> -->
<!-- AdminLTE App -->
<script src="{{ url('dist/js/app.min.js') }}"></script>
<script src="fontDropdown/jquery.fontselect.js"></script>
<!-- <script src="makemyinvite_slider/jquery.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ url('dist/js/demo.js') }}"></script> -->
<script>
    $(function() {
        $('#font').fontselect().change(function() {

            // replace + signs with spaces for css
            var font = $(this).val().replace(/\+/g, ' ');

            // split font into family and weight
            font = font.split(':');

            // set family on paragraphs
            $('p').css('font-family', font[0]);
        });

        $(".hide_show_clr_but").click(function(){
	        $(".displaymoreclr").toggle(120);
	    });
	    $(".hide_show_clr_but2").click(function(){
	        $(".displaymoreclr2").toggle(120);
	    });

    });
    </script>

