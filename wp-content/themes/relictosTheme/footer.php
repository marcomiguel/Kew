			</div> <!-- end .row -->

				

			<div id="footer-push"></div>	

			

		</div> <!-- end #root -->

		

		<div id="footer-main">

		

			<footer>

        

                <div class="row container show-for-small">

                

                    <div class="twelve columns">

                                                        

                        <?php wp_nav_menu( array( 'container_class' => 'mobile-nav block-grid one-up show-for-small', 'menu' => 'Menu General' ) ); ?>



                    </div>

                    

                </div>

	

				<div class="row">

					

					<div class="three columns">

											

					</div>

					

					<div class="three columns kew-foot">

						

						<a href="http://www.kew.org/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/logo-kew.png" alt="KEW" /></a>

					

					</div>

					

					<div class="three columns spda-foot">

						

						<a href="http://www.spda.org.pe/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/logo-spda.png" alt="SPDA" /></a>

					

					</div>

					

					<div class="three columns">

											

					</div>

					

				</div>

		

			</footer>

		

		</div> <!-- end #footer-main -->



	

		

	<?php if ( get_post_type() == 'relicto' || get_post_type() == 'fauna' || get_post_type() == 'flora' || get_post_type() == 'vegetacion' || is_tree(1111) ){ ?>

		<script type="text/javascript">

		    jQuery(function(){

		      //SyntaxHighlighter.all();

		    });

		    jQuery(window).load(function(){

		      jQuery('#carousel').flexslider({

		        animation: "slide",

		        controlNav: false,

		        animationLoop: false,

		        slideshow: false,

		        itemWidth: 210,

		        itemMargin: 5,

		        asNavFor: '#slider'

		      });



		      jQuery('#slider').flexslider({

		        animation: "fade",

		        controlNav: false,

		        animationLoop: false,

		        slideshow: true,

		        sync: "#carousel",

		        start: function(slider){

		          jQuery('div').removeClass('loading');

		        }

		      });

		    });

		 </script>

	<?php } ?>

	

<script type="text/javascript">

var isNullUndefined = function(id){
  var temp = document.getElementById(id);
  return temp;
};

</script>



  <script type="text/javascript"

    src="https://maps.googleapis.com/maps/api/js?v=3.exp">

  </script>

  <script type="text/javascript">

if(isNullUndefined('map-canvas-all')!=null){

    var map;

    var layer_0;

    function initialize() {

      map = new google.maps.Map(document.getElementById('map-canvas-all'), {

        center: new google.maps.LatLng(-14.458460678858642, -75.15944400537109),

        zoom: 9,

        streetViewControl:false,

       // mapTypeId: google.maps.MapTypeId.TERRAIN

      });



      layer_0 = new google.maps.FusionTablesLayer({

        query: {

          select: "col3",

          from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

          where: "col6 = 'Grupo relicto'"

        },

        map: map,

        styleId: 2,

        templateId: 2

      });

      layer_1 = new google.maps.FusionTablesLayer({

        query: {

          select: "col3",

          from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

          where: "col6 = 'Arboles Centenarios'"

        },

        map: map,

        styleId: 2,

        templateId: 2

      });

      layer_2 = new google.maps.FusionTablesLayer({

        query: {

          select: "col3",

          from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

          where: "col6 = 'Relicto'"

        },

        map: null,

        styleId: 2,

        templateId: 2

      });

       layer_3 = new google.maps.FusionTablesLayer({

        query: {

          select: "col3",

          from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

          where: "col6 = 'Huertas'"

        },

        map: map,

        styleId: 2,

        templateId: 2

      });











    google.maps.event.addListener(map, 'zoom_changed', function() {

	    var zoomLevel = map.getZoom();

	    if (zoomLevel >= 13) {

	    	  layer_2.setMap(map)

	          layer_1.setMap(map);

	          layer_0.setMap(null);

	          layer_3.setMap(map);

	    } else {

	    	layer_2.setMap(map);

	        layer_1.setMap(map);

	        layer_0.setMap(map);

	        layer_3.setMap(map);

	    }

});



}

    google.maps.event.addDomListener(window, 'load', initialize);


  }



  </script>







		 <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">  </script>-->

  <script type="text/javascript">

if(isNullUndefined('map-canvas-relictos')!=null){

    var map;

    var layer_0;

    function initialize() {


      map = new google.maps.Map(document.getElementById('map-canvas-relictos'), {

        center: new google.maps.LatLng(-14.431460678858642, -75.15944400537109),

        zoom: 9,

        streetViewControl:false,

        mapTypeId: google.maps.MapTypeId.TERRAIN

      });



      layer_0 = new google.maps.FusionTablesLayer({

        query: {

          select: "col3",

          from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

          where: "col6 = 'Grupo relicto'"

        },

        map: map,

        styleId: 2,

        templateId: 2

      });



      layer_2 = new google.maps.FusionTablesLayer({

        query: {

          select: "col3",

          from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

          where: "col6 = 'Relicto'"

        },

        map: null,

        styleId: 2,

        templateId: 2

      });









    google.maps.event.addListener(map, 'zoom_changed', function() {

	    var zoomLevel = map.getZoom();

	    if (zoomLevel >= 13) {

	    	  layer_2.setMap(map)

	          layer_0.setMap(null);

	    } else {

	    	layer_2.setMap(map);

	        layer_0.setMap(map);

	    }

});













}

    google.maps.event.addDomListener(window, 'load', initialize);

  }



  </script>

	







<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

  <script type="text/javascript">

if(isNullUndefined('map-canvas-trees')!=null){
    var map;

    var layer_0;

    function initialize() {

      map = new google.maps.Map(document.getElementById('map-canvas-trees'), {

        center: new google.maps.LatLng(-14.521460678858642, -75.15944400537109),

        zoom: 9,

        streetViewControl:false,

        mapTypeId: google.maps.MapTypeId.TERRAIN

      });





    layer = new google.maps.FusionTablesLayer({

      map: map,

      heatmap: { enabled: false },

      query: {

        select: "col3",

        from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

        where: "col6 \x3d \x27Arboles Centenarios\x27"

      },

      options: {

        styleId: 2,

        templateId: 2

      }

    });



}



    google.maps.event.addDomListener(window, 'load', initialize);

}

  </script>









<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

  <script type="text/javascript">

if(isNullUndefined('map-canvas-huertas')!=null){

    var map;

    var layer_0;

    function initialize() {

      map = new google.maps.Map(document.getElementById('map-canvas-huertas'), {

        center: new google.maps.LatLng(-14.06394, -75.743988),

        zoom: 9,

        streetViewControl:false,

        mapTypeId: google.maps.MapTypeId.TERRAIN

      });





    layer = new google.maps.FusionTablesLayer({

      map: map,

      heatmap: { enabled: false },

      query: {

        select: "col3",

        from: "1T7Wboqr6kmXhyssUiXTeZLYBlUPhJBF5GFbCikFw",

        where: "col6 \x3d \x27Huertas\x27"

      },

      options: {

        styleId: 2,

        templateId: 2

      }

    });



}



    google.maps.event.addDomListener(window, 'load', initialize);

}

  </script>











		

	<!--[if lt IE 7 ]>

			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>

			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>

	<![endif]-->

	

	<?php wp_footer(); ?>

	

	

	<script>

	 /*

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	

	  ga('create', 'UA-43269751-1', 'rdcim.com');

	  ga('send', 'pageview');

*/

	

	</script> <!-- analytics -->

</body>



</html>