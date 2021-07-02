<?php
session_start();
include('../connection.php');
include "../includes/header.php";
?>

<style>
    .rs-inner-blog .blog-details img {
        max-width: 100%;
        border-radius: 10px;
        max-width: 100%;
    }
</style>

<?php
$currentUser = $_SESSION['username'];
//echo "Welcome user , " . $currentUser;
$blogid = $_GET['id'];
//echo nl2br("\nBlog ID , " . $blogid);

$sql = "SELECT * FROM blog WHERE id=" . $blogid . "";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$sqlL = "SELECT * FROM blog WHERE user='" . $currentUser . "' ORDER BY date DESC";
$resultL = mysqli_query($connect, $sqlL);

$sqlC = "SELECT * FROM blogcomment WHERE BlogId=" . $blogid . "";
$resultC = mysqli_query($connect, $sqlC);
$count = mysqli_num_rows($resultC);
//echo  nl2br("\nComCount: ".$count);
?>
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title new-title mb-"><?php echo $row["title"] ?></h1>
        <ul class="list-inline">
            <li class="blogdetStyle" title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="index.php">Home</a>
            </li>
            <li class="blogdetStyle" title="Go to Blog"><a class="active" href="user-blog.php"><?php echo $currentUser ?>'s Blog</a></li>
            <li class="blogdetStyle" title="Go to the It Services category archives"><a class="active" href="index.php">It
                    Services</a></li>
            <li class="blogdetStyle"><?php echo $row["title"] ?></li>
        </ul>
    </div>
</div>

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
                                    <a href="user-blog-details.php?id=' . $rowL["id"] . '"><img class="widimg" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" alt=""></a>
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
            <?php
            $img="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg";
            $stri = $row["details"];
            $tmp = strstr($stri, "<img", false);
            //echo($tmp);
            if ($tmp != false) {
                $tmp = strstr($tmp, 'src=', false);
                $tmp = substr($tmp, 5,);
                $tmp = strstr($tmp, '"', true);
                $img = $tmp;
                //echo($img);
                $stri = strstr($stri, "</p>", false);
            }
            ?>
            <div class="col-lg-8 order-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details">
                            <div class="bs-img mb-35">
                                <a href="#"><img class="widimg" src="<?php echo $img ?>" alt=""></a>
                            </div>
                            <div class="blog-full">
                                <ul class="single-post-meta">
                                    <li>
                                        <span class="p-date"> <i class="bi bi-calendar-check"></i> <?php $tm = strtotime($row["date"]);
                                                                                                    $ndate = date('d-m-Y', $tm);
                                                                                                    echo $ndate ?> </span>
                                    </li>
                                    <li>
                                        <span class="p-date"> <i class="bi bi-person"></i> <?php echo $row["user"] ?> </span>
                                    </li>
                                    <li class="Post-cate">
                                        <div class="tag-line">
                                            <i class="bi bi-book"></i>
                                            <a href="#"> <?php echo $row["kind"] ?> </a>
                                        </div>
                                    </li>
                                    <li class="post-comment"><i class="bi bi-chat-text"></i> <?php echo $count ?></li>
                                </ul>
                                <p>
                                    <?php echo $stri ?>
                                </p>

                                <h3 class="comment-title"><?php echo $count ?> comment on “<?php echo $row["title"] ?>”</h3>

                                <?php
                                while ($rowC = mysqli_fetch_array($resultC)) {
                                    $tm = strtotime($rowC["CoDate"]);
                                    $newdate = date('d-m-Y H:i', $tm);
                                    echo '
                                    <div class="comment-body">
                                    <div class="rstheme-logo">
                                        <img class="widimg" src="https://rstheme.com/products/html/braintech/assets/images/rstheme.png" alt="">
                                    </div>
                                    <div class="comment-meta">
                                        <span><a href="#">' . $rowC["CoUser"] . '</a></span>
                                        <a href="#">' . $newdate . '</a>
                                        <p class="mb-15">
                                        ' . $rowC["comment"] . '
                                        </p>
                                        <div class="btn-part">
                                            <a class="readon reply" href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                    ';
                                }
                                ?>


                                <h3 class="comment-title">Leave a Reply</h3>
                                <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                                <div class="comment-note">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="addComment.php">
                                        <fieldset>
                                            <div class="row">
                                                <input type="hidden" id="blogid" name="blogid" value="<?php echo $blogid ?>">
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                </div>
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                </div>
                                                <div class="col-lg-12 mb-30">
                                                    <textarea class="from-control" rows="5" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <button type="submit" id="btn1" name="btnLogin" value="login" class="btn btn-primary buttonStyle" style="border-radius: 35px;">Post Comment</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "../includes/footer.php";

?>