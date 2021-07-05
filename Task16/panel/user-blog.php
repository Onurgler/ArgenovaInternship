<?php
session_start();
include('../connection.php');
include "../includes/header.php";
?>
<style>
.rs-inner-blog .blog-item .blog-content .blog-desc img{
    max-width: 100%;
    border-radius: 10px;
    max-width: 100%;
}

</style>
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Blog</h1>
        <ul class="list-inline">
            <li style="display: inline-block;">
                <a class="active" style="color: white;" href="/Task16/index.php">Home</a>
            </li>
            <li style="color: white; display: inline-block;"> Blog</li>
        </ul>
    </div>
</div>

<div class="container mb-5 mt-5">

    <?php
    if(isset($_SESSION['username'])){
        $currentUser = $_SESSION['username'];
    }
        
    //echo date('Y-m-d H:i:s');
    ?>
    <div class="mt-1 mb-3">



    </div>

    <!-- BLOG BODY -->
    <?php
    $sql = "SELECT * FROM blog ORDER BY date DESC";
    $result = mysqli_query($connect, $sql);

    $sqlL = "SELECT * FROM blog ORDER BY date DESC";
    $resultL = mysqli_query($connect, $sqlL);
    ?>
    <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 order-lg-4">
                    <div class="widget-area">
                        <div class="search-widget mb-50">
                            <div class="search-wrap">
                                <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                <button type="submit" value="Search"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                        <div class="recent-posts mb-50">
                            <div class="widget-title">
                                <h3 class="title">Latest Posts</h3>
                            </div>

                            <?php
                            $i = 0;
                            while ($rowL = mysqli_fetch_array($resultL)) {
                                $i = $i + 1;
                                $tm = strtotime($rowL["date"]);
                                $ndate = date('d-m-Y H:i', $tm);
                                echo '
                            <div class="recent-post-widget">
                                <div class="post-img">
                                    <a href="user-blog-details.php?id=' . $rowL["id"] . '"> <img class="widimg" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" alt=""></a>
                                </div>
                                <div class="post-desc">
                                    <a href="user-blog-details.php?id=' . $rowL["id"] . '">' . $rowL["title"] . '</a>
                                    <span class="date">
                                        <i class="fa fa-calendar"></i>
                                        ' . $ndate . '
                                    </span>
                                </div>
                            </div>
                                ';
                                if ($i == 5) {
                                    break;
                                }
                            }
                            ?>

                        </div>
                        <div class="categories mb-50">
                            <div class="widget-title">
                                <h3 class="title">Categories</h3>
                            </div>
                            <ul class="list-group">
                                <li class="linew"><a href="#">Application Testing</a></li>
                                <li class="linew"><a href="#">Artifical Intelligence</a></li>
                                <li class="linew"><a href="#">Digital Technology</a></li>
                                <li class="linew"><a href="#">IT Services</a></li>
                                <li class="linew"><a href="#">Software Development</a></li>
                                <li class="linew"><a href="#">Web Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-50">
                            <div class="blog-item">
                                <form method="POST" action="addBlog.php" id="BlogAddForm" name="BlogAddForm" novalidate="novalidate" style="padding: 20px;
    text-align: left; ">
                                    <input type="hidden" id="user" name="user" value="<?php $currentUser ?>">
                                    <div class="row mx-auto">
                                        <div class="mb-4 col-sm-9">
                                            <label class="mb-2 " style="font-weight: 600">Title<span>*</span></label>
                                            <input class="form-control bg-light formStyle" type="text" id="title" name="title">
                                        </div>
                                        <div class="mb-4 col-sm-3">
                                            <label class="mb-2 " style="font-weight: 600">Kind<span>*</span></label>
                                            <input class="form-control bg-light formStyle" type="text" id="kind" name="kind" value="Strategy">
                                        </div>
                                    </div>
                                    <div class="row mx-auto">
                                        <div class="mb-4">
                                            <label class="mb-2 " style="font-weight: 600">Details<span>* </span></label>
                                            <label class="mb-2 " style="font-weight: 300"> (You can put a picture in the first paragraph) </label>
                                            <textarea class="ckeditor form-control bg-light formStyle" type="text" id="details" name="details" rows="3"> </textarea>
                                        </div>
                                    </div>
                                    <div class="mb-4 col-2">
                                        <button type="submit" id="btn1" name="btnLogin" value="login" class="btn btn-primary buttonStyle" style="border-radius: 5px;"> Add blog post </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $img="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg";
                            $tm = strtotime($row["date"]);
                            $ndate = date('d-m-Y', $tm);
                            $stri=$row["details"];
                            $tmp=strstr($stri,"<img",false);
                            //echo($tmp);
                            if($tmp!=false){
                                $tmp=strstr($tmp,'src=',false);
                                $tmp=substr($tmp, 5, );
                                $tmp=strstr($tmp,'"',true);
                                $img=$tmp;
                                //echo($img);
                                $stri=strstr($stri,"</p>",false);
                            }
                           
                         echo '
                        <div class="col-lg-12 mb-50">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="user-blog-details.php?id=' . $row["id"] . '"><img class="widimg" src="'. $img .'" alt=""></a>
                                    <ul class="post-categories">
                                        <li><a href="user-blog-details.php?id=' . $row["id"] . '">Application Testing</a></li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="user-blog-details.php?id=' . $row["id"] . '">' . $row["title"] . '</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <ul class="btm-cate">
                                            <li>
                                                <div class="blog-date">
                                                    <i class="bi bi-calendar-check"></i></i> ' . $ndate . '
                                                </div>
                                            </li>
                                            <li>
                                                <div class="author">
                                                    <i class="bi bi-person"></i> ' . $row["user"] . '
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-desc">
                                        ' . substr($stri, 0, 220) . '...
                                    </div>
                                    <div class="blog-button inner-blog">
                                        <a class="blog-btn" href="user-blog-details.php?id=' . $row["id"] . '">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    </script>

</div>

<?php
include "../includes/footer.php";

?>