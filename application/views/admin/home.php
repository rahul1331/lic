<?php include('header.php') ?>
<style type="text/css">
  input[type=text] {
    
    padding: 5px;
    margin: 5px 0;
    box-sizing: border-box;
}

#autoSuggestionsList > li {
    background: none repeat scroll 0 0 #F3F3F3;
    border-bottom: 1px solid #33b5e5;
    list-style: none outside none;
    padding: 3px 15px 3px 15px;
    text-align: left;
}

#autoSuggestionsList > li a { color: black; }

.auto_list {
    border: 1px solid #33b5e5;
    border-radius: 5px 5px 5px 5px;
    position: absolute;
}
</style>
<body style="background-color:#e9ebee ">
<div >
        <div style="    padding-top: 154px;padding-bottom: 36px;">
               <h1 style="text-align: center;font-weight: bold;font-size: 35px;color: #33b5e5;text-decoration: underline;"> Search 
               </h1>
        </div>

         <div class="container" style="background-color:white ;border-style: solid;border-color: #33b5e5"> 
         <div class="row">
	            <div class="col-lg-12" style="margin-bottom: 41px;margin-top: 40px;">
		        <!-- Search form -->
                <div class="something">
     <input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" autocomplete="off" class="form-control">
     <div id="suggestions">
      
         <div id="autoSuggestionsList">
           
         </div>

     </div>
</div>

	            </div>
         </div>
         </div>
</div>




<script type="text/javascript">

function ajaxSearch()
{
    var input_data = $('#search_data').val();

    if (input_data.length === 0)
    {
        $('#suggestions').hide();
    }
    else
    {

        var post_data = {
            'search_data': input_data,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/autocomplete/",
            data: post_data,
            success: function (data) {
                // return success
                if (data.length > 0) {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').addClass();

                    $('#autoSuggestionsList').html(data);
                }
            }
         });

     }
 }
</script>
</body>
<?php include('footer.php') ?>