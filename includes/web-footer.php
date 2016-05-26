<!-- jQuery 2.1.4 -->
<script src="/itracker/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
 $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/itracker/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/itracker/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/itracker/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/itracker/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/itracker/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/itracker/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/itracker/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/itracker/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/itracker/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/itracker/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/itracker/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="/itracker/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/itracker/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/itracker/dist/js/demo.js"></script>

<!-- UPDATE DIRECTORIES -->
<script type="text/javascript">
  $(document).ready(function () {
    $(".department").click(function () {
      var deptID = $(this).attr("id");
      var deptHREF = $(this).attr("href");
      // alert(deptID);
      // var req =  new XMLHttpRequest();
      // req.onerror = function(){
      //   alert("error");
      // }
      // req.open("get", $(this).attr("href"), true);
      // req.send();
      $.ajax({
        type: 'HEAD',
        url: $(this).attr("href"),
        success: function() {
          // do nothing
        },
        error: function() {
          // alert("/itracker/includes/update.php?" + deptID);
          $.ajax({
            type: 'GET',
            url: "/itracker/includes/update.php?" + deptID,
            success: function(data) {
              // Run the code here that needs
              //    to access the data returned
              // alert(data);
            }
          });
        }
      });
      setTimeout(function () {
        window.location.href = deptHREF;
      }, 500);
      return false;
    })
  })
</script>

<!-- SOCIAL MEDIA -->
<script>
  function FacebookShare() {
    var fb = "https://www.facebook.com/sharer/sharer.php?u=";
    window.open(fb.concat(document.URL));
  }

  function TwitterShare() {
    var tw = "https://twitter.com/home?status=Check%20this%20out%20on%20the%20UMBC%20SGA%20iTracker!%20";
    window.open(tw.concat(document.URL));
  }
</script>