<?php 
define('ROOT',dirname(__FILE__));
include ROOT . '/views/layout/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
                        <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>cities/view</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($cities as $cityItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/city/<?php echo $cityItem['idcity'];?>">
                                            <?php echo $cityItem['idregion'];?>
                                            <?php echo $cityItem['name'];?>
                                        </a>
                                    </h4>
            
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        
        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer.php'; ?>