<!-- Footer -->
<div style="margin-top: 80px;">
<footer class="page-footer fixed-bottom font-small blue" style="background-color: #1976d2 !important">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Developed by:Rahul Pawar</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>

<!-- serch page script -->

<script type="text/javascript" src="<?= base_url('assets/mdb/js/table_search.js') ?> "></script>
<script>

$('#input').keyup(function () {
    table_search($('#input').val(),$('#table tbody tr'),'012');
});


</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- serch page script end -->



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?= base_url('assets/js/bootstrap-fileselect.js') ?>" src=""></script>
<script type="text/javascript">
  $('#dem').fileselect({
  browseBtnClass: 'btn btn-danger'
});
</script>
  <!-- JQuery -->
 <script type="text/javascript" src="<?= base_url('assets/mdb/js/jquery-3.3.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/mdb/js/mdb.min.js') ?> "></script>
<script type="text/javascript" src="<?= base_url('assets/mdb/js/popper.min.js') ?> "></script>
<script type="text/javascript" src="<?= base_url('assets/mdb/js/bootstrap.min.js') ?> "></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/mdb/js/jquery.dateselect.js') ?> "></script>

<script type="text/javascript">
	// using bind
$('#demo').bind('mousewheel', function(event, delta, deltaX, deltaY) {
    console.log(delta, deltaX, deltaY);
});

// using the event helper
$('#demo').mousewheel(function(event, delta, deltaX, deltaY) {
    console.log(delta, deltaX, deltaY);
});
</script>


<script type="text/javascript">
	$('.trigger-element').on('click', function(e) {
  e.preventDefault();
  $.dateSelect.show({
    formatDate: function(date) {
      var formatted = $.dateSelect.pad(date.getDate(), 2) + '/' + $.dateSelect.pad(date.getMonth() + 1, 2) + '/' + date.getFullYear();
      return formatted;
    },
    parseDate: function(string) {
      var date = new Date();
      var parts = string.match(/(\d{1,2})\/(\d{1,2})\/(\d{4})/);
      if (parts && parts.length == 4) {
        date = new Date(parts[3], parts[2] - 1, parts[1]);
      }
      return date;
    },
    container: 'body',
    element: null, // target input element
    date: new Date().toDateString(),
    strings: {
      days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
      months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
    }
  });
});</script>
<script type="text/javascript" src="<?= base_url('assets/mdb/js/customfileinput.js') ?> "></script>

<script type="text/javascript">
	$('.customfileinput').customFileinput({

  // button text
  buttontext : 'Send',

  // max width
  customboxwidth : '98%',

  // default CSS classes
  customboxclass : 'customfile',
  fileinputclass : 'fileinput'
  
});
</script>

</body>
</html>