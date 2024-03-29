<!DOCTYPE html>
<html>
<head>
    
            <style type="text/css">
            /*
                    inspired from http://codepen.io/Rowno/pen/Afykb 
                    */
                    .carousel-fade .carousel-inner .item {
                      opacity: 0;
                      transition-property: opacity;
                    }

                    .carousel-fade .carousel-inner .active {
                      opacity: 1;
                    }

                    .carousel-fade .carousel-inner .active.left,
                    .carousel-fade .carousel-inner .active.right {
                      left: 0;
                      opacity: 0;
                      z-index: 1;
                    }

                    .carousel-fade .carousel-inner .next.left,
                    .carousel-fade .carousel-inner .prev.right {
                      opacity: 1;
                    }

                    .carousel-fade .carousel-control {
                      z-index: 2;
                    }

                    /*
                    WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
                    now override the 3.3 new styles for modern browsers & apply opacity
                    */
                    @media all and (transform-3d), (-webkit-transform-3d) {
                        .carousel-fade .carousel-inner > .item.next,
                        .carousel-fade .carousel-inner > .item.active.right {
                          opacity: 0;
                          -webkit-transform: translate3d(0, 0, 0);
                                  transform: translate3d(0, 0, 0);
                        }
                        .carousel-fade .carousel-inner > .item.prev,
                        .carousel-fade .carousel-inner > .item.active.left {
                          opacity: 0;
                          -webkit-transform: translate3d(0, 0, 0);
                                  transform: translate3d(0, 0, 0);
                        }
                        .carousel-fade .carousel-inner > .item.next.left,
                        .carousel-fade .carousel-inner > .item.prev.right,
                        .carousel-fade .carousel-inner > .item.active {
                          opacity: 1;
                          -webkit-transform: translate3d(0, 0, 0);
                                  transform: translate3d(0, 0, 0);
                        }
                    }

                    /* just for demo purpose */
                        html,
                        body,
                        .carousel,
                        .carousel-inner,
                        .carousel-inner .item {
                          height: 360px;
                        }

                        /*
                        .item:nth-child(1) {
                          background: blue;
                        }

                        .item:nth-child(2) {
                          background: red;
                        }

                        .item:nth-child(3) {
                          background: orange;
                        }
                        */


            </style>

           

</head>
<body>

    <div id="dcarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">

            <img src="<?php echo BASE_URL . '/assets/images/uso/banner1.png'; ?>" alt="Image"/>
                <div class="carousel-caption">
                
                </div>
            </div>

            <div class="item">

            <img src="<?php echo BASE_URL . '/assets/images/uso/banner2.png'; ?>" alt="Image"/>

                <div class="carousel-caption">
                    
                </div>
            </div>

            <div class="item">

            <img src="<?php echo BASE_URL . '/assets/images/uso/banner3.png'; ?>" alt="Image"/>

                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#dcarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#dcarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</body>
</html>
