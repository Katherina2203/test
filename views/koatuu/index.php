<?php 
define('ROOT',dirname(__FILE__));
include ROOT . '/views/layout/header.php'; 
?>
<section>
    <div class="container">
        <div class="row">
                        <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Regions</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($regions as $regionItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/regions/<?php echo $regionItem['idregion'];?>">
                                            <?php echo $regionItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
             
                    <div class="row">
                        <?php foreach($koatuu as $koatuuItem):?>
                        <div class="col-sm-7">
                            <div class="koatuu-information">
                               
                                <span><?php echo $koatuuItem['ter_id'];?></span>
                                <span><?php echo $koatuuItem['ter_pid'];?></span>
                                <span><?php echo $koatuuItem['ter_name'];?></span>
                                <span><?php echo $koatuuItem['ter_address'];?></span>
                                <span><?php echo $koatuuItem['ter_type_id'];?></span>
                                
                               
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                   
          

            </div>
        </div>
    </div>

<?php include ROOT . '/views/layout/footer.php'; ?>