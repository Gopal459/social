<?php
include('header.php');
                $url = $_SERVER['REQUEST_URI'];
                $arr = explode('/',$url);
                $slug = $arr[2];
                $result = $conn->query("SELECT * FROM post where post_slug='$slug'");
                  ?>

	<div style="background-color: #f3f3f3;">
      <br><br><br>
      <?php
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
    <!-- ============================ Agency List Start ================================== -->
            <div class="">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title"><?php echo $row['post_title'];?></h2>
							<span class="ipn-subtitle">See Our Latest Articles & News</span>
							
						</div>
					</div>
				</div>
			</div>
            <!-- ============================ Agency List Start ================================== -->
			<section>
            <div class="container">
                <!-- row Start -->
                <div class="row">
                    <!-- Blog Detail -->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="blog-details single-post-item format-standard">
                            <div class="post-details">
                                <div class="post-featured-img">
                                    <img class="img-fluid" src="assets/postimage/<?php echo $row['post_image'];?>" alt="">
                                </div>
                                <div class="post-top-meta">
                                    <ul class="meta-comment-tag">
                                        <li><span class="icons"><i class="ti-user"></i></span> by SocialPedia</li>
                                        <li><span class="icons"><i class="fa fa-calendar" aria-hidden="true"></i></span> <?php echo $row['post_date'];?></li>
                                    </ul>
                                </div>
                                <h2 class="post-title"><?php echo $row['post_title'];?></h2>
                                <div><?php echo $row['post_desc'];?></div>
                               
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    <!-- Single blog Grid -->
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        
                        <!-- Searchbard -->
                        <div class="single-widgets widget_search">
                            <h4 class="title">Search</h4>
                            <form action="#" class="sidebar-search-form">
                                <div class="search-box">
                                    <input type="search" autocomplete="off" placeholder="Search..." />
                                    <div class="result"></div>
                                </div>
                                
                            </form>
                        </div>
                        <!-- Trending Posts -->
                        <div class="single-widgets widget_thumb_post">
                            <h4 class="title">Trending Posts</h4>
                            <ul>
                            <?php
                                $result = $conn->query("SELECT * FROM post");
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) { ?>
                                <li>
                                    <span class="left">
                                        <img src="assets/postimage/<?php echo $row['post_image'];?>" alt="" class="">
                                    </span>
                                    <span class="right">
                                        <a class="feed-title" href="/SocialPedia/<?php echo $row['post_slug'];?>"><?php echo $row['post_title'];?></a> 
                                        <span class="post-date"><i class="ti-calendar"></i> <?php echo $row['post_date'];?></span>
                                    </span>
                                </li>
                                <?php } }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->					
            </div>
        </section>
        <!-- ============================ Agency List End ================================== -->
        
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="search"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<?php include('footer.php');?>