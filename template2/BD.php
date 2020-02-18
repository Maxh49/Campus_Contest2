<!DOCTYPE html>
<html lang="zxx">
    

<!-- Start: head Section -->
    <?php include("head.php"); ?>
<!-- End: head Section -->

    <body class="layout-v3">
    
        <!-- Start: Header Section -->
        <?php include("header.php"); ?>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Univers BD's</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li>BD's</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-full-width">
                        <div class="container">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                            </section>
                            <!-- End: Search Section -->
                            
                            <div class="filter-options margin-list">
                                <div class="row">                                            
                                    <div class="col-md-9 col-sm-3">
                                        <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <select name="orderby">
                                            <option selected="selected">Trier par prix croissant</option>
                                            <option>Trier par prix décroissant</option>
                                            <option>Trier par nouvauté</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="booksmedia-fullwidth">
                                <ul>
                                    <li>
                                        <figure>
                                            <a href="BD_details.php"><img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book"></a>
                                            <figcaption>
                                                <header>
                                                    <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                    <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    <p><strong>ISBN:</strong>  9781581573268</p>
                                                </header>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                <div class="actions">
                                                    <ul>
                                                        <li>
                                                            <a href="BD_details.php" target="_blank" data-toggle="blog-tags" data-placement="top" title="Réserver">
                                                                9,99 € <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>                                                
                                    </li>
                                </ul>
                            </div>
                        </div>
                                    
        <!-- Start: Footer Section-->
        <?php include("footer.php"); ?>
        <!-- End: Footer Section-->

        <!-- Start: formulaire_popup Section-->
        <?php include("formulaire_popup.php"); ?>
        <!-- End: formulaire_popup Section-->

        <!-- Start: SCRIPTS Section-->
        <?php include("script_js.php"); ?>
        <!-- End: SCRIPTS Section-->
    </body>


</html>