<?php get_header(); ?>

<!-- Region: styling for columns on front page only -->
<style>

    /* make columns stack up when screen is resized */
    @media screen and (max-width: 600px) {
  .col {
    width: 100%;
  }
}

    /* Set additional styling options for the columns*/
    .col{
    float: left;
    /* width: 30%; */
    padding-left: 20px;
    background: transparent;

    /* auto fit image bakground */
    background-position: center center;
    background-size: cover;

    /* add spacing btn columns */
    margin-right: 20px;

    /* font styling */
    
    }

/* Polaroid look for columns */
.col{
  width: 100%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 15px;
}

    .my-container:after {
    content: "";
    display: table;
    clear: both;
    background: transparent;
    
    }

    .my-container{
        text-align: center;
        padding: 10px 20px;
        
    }

    /* hover effect */
    .my-container .col:hover{
        color: greenyellow;
        z-index: 1;
        transform: scale(1.25);
        box-shadow: 0 25px 40px rgba(0, 0, 0, 0.5);
        transition: 0.7s ease-out
    }
    </style>

<!-- End Region -->

<!-- Body of html -->
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__mobile-menu">
               
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>   
             <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                
                            </div>
                        </div>
                    </div>      
               </div>
            </div>
        </div>       
         <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 

      <!---Main-->    
      <div class="app-main main1">
                  <div class="app-main__outer">
                    <div class="app-main__inner inner1">
                        <div class="app-page-title"></div>
        <!-- Create rows for images -->
        <div class="container">
        <div class="my-container">
            
        <!-- <h2>Click on image to proceed to page</h2> -->

        <!-- Column -->
        <a href="#">
        <div class=" col-md-3 col" style="background-color:#B8B8B8; height:200px; background-image: url('<?php echo get_theme_file_uri()."/assets/images/ws.jpg";?>')">
            <div class="content">
                <div style="position: absolute; margin-top: 10px; position: absolute; margin-top: 10px; left: 34%; top: 20%;">
                    
                    <p>Proceed to Log-in</p>
                </div>
            </div>    
        
        </div>
        </a>
        

        <!-- Column -->
        <a href="#">
        <div class="col-md-3 col"  style="background-color:#B8B8ef; height:200px; background-image: url('<?php echo get_theme_file_uri()."/assets/images/ap.png";?>');">
        <div class="content">
                <div style="position: absolute; margin-top: 10px; position: absolute; margin-top: 10px; left: 34%; top: 20%;">
                    <p>Proceed to next page</p>
                </div>
            </div>
          
        </div>
    </a>
        
        
        <!-- Column -->
        <a href="#">
        <div class="col-md-3 col"  style="background-color:#B8B8B8; height:200px; background-image: url('<?php echo get_theme_file_uri()."/assets/images/st.jpg";?>');">
        <div class="content">
                <div style="position: absolute; margin-top: 10px; position: absolute; margin-top: 10px; left: 34%; top: 20%;">
                    <p>Some Page</p>
                </div>
            </div>
        </div>
        </a>

    </div>
    </div> 
</div>

    </script>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>

    
<?php get_footer(); ?>