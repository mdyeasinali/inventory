 <footer>
                2017 &copy; Inventory.
            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>


<!--jquery-ui-->
<script src="js/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--switchery-->
<script src="js/switchery/switchery.min.js"></script>
<script src="js/switchery/switchery-init.js"></script>
<!--dropzone-->
<script src="js/dropzone.js"></script>
<!--flot chart -->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/flot-spline.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.pie.js"></script>
<script src="js/flot-chart/jquery.flot.selection.js"></script>
<script src="js/flot-chart/jquery.flot.stack.js"></script>
<script src="js/flot-chart/jquery.flot.crosshair.js"></script>
<!--bootstrap picker-->
<script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<!--picker initialization-->
<script src="js/picker-init.js"></script>
<!--earning chart init-->
<script src="js/earning-chart-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>.

<!--form validation-->
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<!--form validation init-->
<script src="js/form-validation-init.js"></script>


<!--Data Table-->
<script src="js/data-table/js/jquery.dataTables.min.js"></script>
<script src="js/data-table/js/dataTables.tableTools.min.js"></script>
<script src="js/data-table/js/bootstrap-dataTable.js"></script>
<script src="js/data-table/js/dataTables.colVis.min.js"></script>
<script src="js/data-table/js/dataTables.responsive.min.js"></script>
<script src="js/data-table/js/dataTables.scroller.min.js"></script>
<!--data table init-->
<script src="js/data-table-init.js"></script>



<!--easy pie chart-->
<script src="js/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>



<!--vectormap-->
<script src="js/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/dashboard-vmap-init.js"></script>

<!--Icheck-->
<script src="js/icheck/skins/icheck.min.js"></script>
<script src="js/todo-init.js"></script>

<!--jquery countTo-->
<script src="js/jquery-countTo/jquery.countTo.js"  type="text/javascript"></script>

<!--owl carousel-->
<script src="js/owl.carousel.js"></script>
<!--bootstrap-fileinput-master-->
<script type="text/javascript" src="js/bootstrap-fileinput-master/js/fileinput.js"></script>
<script type="text/javascript" src="js/file-input-init.js"></script>
<!--bootstrap-wysihtml5-->
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<!--summernote-->
<script src="js/summernote/dist/summernote.min.js"></script>



<!--common scripts for all pages-->

<script src="js/scripts.js"></script>





<script>

			  $(document).ready(function() {
				$('#selecctall').click(function(event) {  //on click
					if(this.checked) { // check select status
						$('.checkbox1').each(function() { //loop through each checkbox
							this.checked = true;  //select all checkboxes with class "checkbox1"              
						});
					}else{
						$('.checkbox1').each(function() { //loop through each checkbox
							this.checked = false; //deselect all checkboxes with class "checkbox1"                      
						});        
					}
				});
			   
			});
			
			
			function confirm_delete() {
				var txt;
				var r = confirm("Are You Sure to do this?");
				if (r == true) {					
					$( "#form-delete" ).submit();					
				}			
			}
			
			

			</script>


<script type="text/javascript">

    $(document).ready(function() {

        //countTo

        $('.timer').countTo();

        //owl carousel

        $("#news-feed").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true
        });
    });

    $(window).on("resize",function(){
        var owl = $("#news-feed").data("owlCarousel");
        owl.reinit();
    });

</script>
<script>
        $(document).ready(function(){
            $('.iCheck').iCheck({
                checkboxClass: 'icheckbox_minimal',
                radioClass: 'iradio_minimal',
                increaseArea: '20%' // optional
            });
            $('.iCheck-square').iCheck({
                checkboxClass: 'icheckbox_square',
                radioClass: 'iradio_square',
                increaseArea: '20%' // optional
            });
            $('.iCheck-flat').iCheck({
                checkboxClass: 'icheckbox_flat',
                radioClass: 'iradio_flat',
                increaseArea: '20%' // optional
            });
            $('.iCheck-polaris').iCheck({
                checkboxClass: 'icheckbox_polaris',
                radioClass: 'iradio_polaris',
                increaseArea: '20%' // optional
            });


        });
    </script>
<script>

    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

</script>
<!------------------------uploadImage-------------------------->
    </script>
       <script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
<!------------------------uploadImage2-------------------------->
    </script>
       <script type="text/javascript">

    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview2").src = oFREvent.target.result;
        };
    };

</script>
<!------------------------uploadImage3-------------------------->
    </script>
    <script type="text/javascript">
		function PreviewImage3() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("uploadImage3").files[0]);

			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview3").src = oFREvent.target.result;
			};
		};
	</script>
	<!------------------------< products Gallery Slider Images >-------------------------->
	
    <script type="text/javascript">
		function PreviewImage4() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);

			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview4").src = oFREvent.target.result;
			};
		};
	</script>
    <script type="text/javascript">
		function PreviewImage5() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("uploadImage5").files[0]);

			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview5").src = oFREvent.target.result;
			};
		};
	</script>
    <script type="text/javascript">
		function PreviewImage6() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("uploadImage6").files[0]);

			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview6").src = oFREvent.target.result;
			};
		};
	</script>
    <script type="text/javascript">
		function PreviewImage7() {
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("uploadImage7").files[0]);

			oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview7").src = oFREvent.target.result;
			};
		};
	</script>
	<!------------------------</ products Gallery Slider Images >-------------------------->

<!------------------------save-------------------------->
<script type="text/javascript">
	$(document).ready(function() {
	   $("#myButton").click(function() {
		   $("#basic-form").submit();
	   });
	});
</script>
</body>
</html>
