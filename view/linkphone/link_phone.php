<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css"
        media="all" />
    <!-- Bootstrap CSS -->
</head>

<body>
    <?php

    // $categories = $product->getCategories();
// $brands = $product->getBrand();
// $materials = $product->getMaterial();
// $productSizes = $product->getProductSize();
// $totalRecords = $product->getTotalProducts();
    $category = getProductCategory();
    $screen = getProductScreen();
    $camera = getProductCamera();
    $memory = getProductMemory();
    $chip = getProductChip();
    ?>
    <div style="margin-top:80px">
        <div class="container">
            <div class="btn btn-danger">Bộ lọc</div>
            <div class="container" id="search_filter">
                <div class="row">
                    <div class="col-md-12">
                        <div id="slider-range" class="price-filter-range" name="rangeInput"></div>

                        <div style="margin:30px auto">
                            <input type="number" min=0 max="49000000" oninput="validity.valid||(value='0');"
                                id="min_price" class="price-range-field" />
                            <input type="number" min=0 max="50000000" oninput="validity.valid||(value='50000000');"
                                id="max_price" class="price-range-field" />
                        </div>

                        <button class="price-range-search" id="price-range-submit">Search</button>

                        <div id="searchResults" class="search-results-block"></div>
                    </div>
                </div>
                <form method="POST" id="search_form">
                    <div class ="d-flex">
        <div class="panel list">
                        <div class="panel-heading click_filter">
                            <h3 class="panel-title "  data-target="#panelTwo" aria-expanded="true">
                                Material</h3>
                        </div>
                        <div class="panel-body filter_none in list_filter" id="panelTwo">
                            <ul class="list-group">
                                <?php

                                foreach ($category as $key) {
                                    if (isset($_POST['category'])) {
                                        if (in_array($product = cleanString($key['TenLoaiSP']), $_POST['category'])) {
                                            $categoryCheck = 'checked="checked"';
                                        } else {
                                            $categoryCheck = "";
                                        }
                                    }
                                    ?>
                                                <li class="list-group-item">
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                value="<?php echo $product = cleanString($key['TenLoaiSP']); ?>"
                                                                <?php echo @$categoryCheck; ?> name="category[]"
                                                                class="sort_rang category"><?php echo ucfirst($key['TenLoaiSP']); ?></label></div>
                                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
        <div class="panel list">
                        <div class="panel-heading click_filter">
                            <h3 class="panel-title" data-target="#panelOne" aria-expanded="true">
                                Màn hình</h3>
                        </div>
                        <div class="panel-body filter_none in list_filter" id="panelOne">
                            <ul class="list-group">
                                <?php
                                foreach ($screen as $key) {
                                    if (isset($_POST['screen'])) {
                                        if (in_array($product = cleanString($key['ManHinh']), $_POST['screen'])) {
                                            $screenChecked = 'checked="checked"';
                                        } else {
                                            $screenChecked = "";
                                        }
                                    }
                                    ?>
                                                    <li class="list-group-item">
                                                        <div class="checkbox"><label><input type="checkbox"
                                                                    value="<?php echo ($key['ManHinh']); ?>" <?php echo @$screenChecked; ?> name="screen[]" class="sort_rang screen"><?php echo ucfirst($key['ManHinh']); ?></label></div>
                                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
        <div class="panel list">
                        <div class="panel-heading click_filter">
                            <h3 class="panel-title" data-target="#panelOne" aria-expanded="true">
                                Camera</h3>
                        </div>
                        <div class="panel-body filter_none in list_filter" id="panelOne">
                            <ul class="list-group">
                                <?php
                                foreach ($camera as $key) {
                                    if (isset($_POST['camera'])) {
                                        if (in_array($product = cleanString($key['Camera']), $_POST['camera'])) {
                                            $cameraChecked = 'checked="checked"';
                                        } else {
                                            $cameraChecked = "";
                                        }
                                    }
                                    ?>
                                                                                                        <li class="list-group-item">
                                                                                                            <div class="checkbox"><label><input type="checkbox"
                                                                                                                        value="<?php echo $product = cleanString($key['Camera']); ?>" <?php echo @$cameraChecked; ?> name="camera[]" class="sort_rang camera"><?php echo ucfirst($key['Camera']); ?></label></div>
                                                                                                        </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
        <div class="panel list">
                        <div class="panel-heading click_filter">
                            <h3 class="panel-title" data-target="#panelOne" aria-expanded="true">
                                Dung Lượng</h3>
                        </div>
                        <div class="panel-body filter_none in list_filter" id="panelOne">
                            <ul class="list-group">
                                <?php
                                foreach ($memory as $key) {
                                    if (isset($_POST['memory'])) {
                                        if (in_array($product = cleanString($key['DungLuong']), $_POST['memory'])) {
                                            $memoryChecked = 'checked="checked"';
                                        } else {
                                            $memoryChecked = "";
                                        }
                                    }
                                    ?>
                                                    <li class="list-group-item">
                                                        <div class="checkbox"><label><input type="checkbox"
                                                                    value="<?php echo ($key['DungLuong']); ?>" <?php echo @$memoryChecked; ?> name="memory[]" class="sort_rang memory"><?php echo ucfirst($key['DungLuong']); ?></label></div>
                                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
        <div class="panel list">
            <div class="panel-heading click_filter">
                <h3 class="panel-title"  data-target="#panelOne" aria-expanded="true">
                    Chip</h3>
            </div>
            <div class="panel-body filter_none in list_filter" id="panelOne">
                <ul class="list-group">
                    <?php
                    foreach ($chip as $key) {
                        if (isset($_POST['chip'])) {
                            if (in_array($product = cleanString($key['Chip']), $_POST['chip'])) {
                                $chipChecked = 'checked="checked"';
                            } else {
                                $chipChecked = "";
                            }
                        }
                        ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox"
                                                    value="<?php echo ($key['Chip']); ?>" <?php echo @$chipChecked; ?> name="chip[]" class="sort_rang chip"><?php echo ucfirst($key['Chip']); ?></label></div>
                                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="panel list">
                        <div class="panel-heading click_filter">
                            <h3 class="panel-title"  data-target="#panelOne" aria-expanded="true">
                                Sort By </h3>
                        </div>
                        <div class="panel-body filter_none in list_filter" id="panelOne">
                            <div class="radio disabled">
                                <label><input type="radio" name="sorting" value="newest" <?php if (isset($_POST['sorting']) && ($_POST['sorting'] == 'newest' || $_POST['sorting'] == '')) {
                                    echo "checked";
                                } ?>
                                        class="sort_rang sorting">Newest</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sorting" value="low" <?php if (isset($_POST['sorting']) && $_POST['sorting'] == 'low') {
                                    echo "checked";
                                } ?>
                                        class="sort_rang sorting">Price: Low to High</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sorting" value="high" <?php if (isset($_POST['sorting']) && $_POST['sorting'] == 'high') {
                                    echo "checked";
                                } ?>
                                        class="sort_rang sorting">Price: High to Low</label>
                            </div>
                        </div>
                    </div>
                    <!-- <input class="btn btn-primary d-flex justify-content-center" name="search_up"
                value="search" id="search_product_up"  > -->
                </div>
                <button class="btn btn-primary d-flex justify-content-center" name="search_up"
                value="search" id="search_product_up" type="submit" >search</button>
            </form>
            
            </div>
           
                </div>   
                 
    </div>
    <div id="non-search-up">
        <?php
        // $i = 1;
        foreach ($code as $item) {
            $i = 1;
            $array = getnamecodeproduct($item['MaLoaiSP']);
            var_dump($array);
            ?>

                            <div class="container name mt-3 mb-2 d-flex justify-content-between ">
                                <h4 class="p-3 mb-0 mt-1">Điện thoại
                                    <?php echo ($item['TenLoaiSP']) ?>
                                </h4>
                                <a href="index.php?control=dienthoai&id=<?php echo ($item['MaLoaiSP']) ?>" class="a-midle">
                                    Xem thêm
                                </a>
                            </div>
                            <div class="container pr-0 pl-0 bg-white container-product">
                                <div class="container-fluid pr-0 pl-0 mb-4 mt-2 compoment ">

                <div class="d-flex">
                    
                    <?php foreach ($array as $name) {
                        if ($i < 5) { ?>
                                            <div class="card" style="width: 18rem;">
                                                <a href="index.php?control=sanphamdienthoai&id=<?php echo ($name['MaSP']) ?>"
                                                    style="width:100%">
                                                    <div>
                                                        <img class="card-img-top p-2"
                                                            src="https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg"
                                                            alt="Card image cap">
                                                    </div>
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title"><a href="#">
                                                            <?php echo $name['TenSP'] ?>
                                                        </a></h5>
                                                    <div class="card-text"><span>6.7"</span><span>
                                                            <?php echo $name['ManHinh'] ?>
                                                        </span></div>
                                                    <div class="card-text mt-3 mb-2">
                                                        <div class="btn btn-primary btn-memory">
                                                            <?php echo $name['DungLuong'] ?>
                                                        </div>

                                                    </div>
                                                    <p class="card-text product">
                                                        <?php echo $name['GiaSP'] ?>
                                                    </p>
                                                    <a href="index.php?control=sanphamdienthoai&id=<?php echo ($name['MaSP']) ?>"
                                                        class="btn btn-primary d-flex justify-content-center">Mua ngay</a>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                        } else {
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>

                            </div>
                            <?php
                            $i = 1;
        }
        ?>
    </div>
    </div>
    <div id="search-up" class="d-flex flex-wrap">

    </div>
    <nav aria-label="Page navigation example " id="midpagination">
      <ul class="pagination m-3 pb-3" id="midulpagi">

      </ul>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        type="text/javascript"></script>
 
    <script type="text/javascript">
        var x=document.querySelectorAll('.click_filter');
        var z=document.querySelectorAll('.list_filter')
        var i;
        for(i=0;i<x.length;i++){
            var y=z[i];
          
            x[i].addEventListener("click", function (){
                console.log(x[i]);
            });
            
            console.log(y);
        }
     
        
var page=1;

    </script>
   

        <script src="public/js/price-range.js">
    </script>
    
</body>

</html>