<?php include('header.php'); ?>

	<div style="background-color: #f3f3f3;">
      <br><br><br>
    <!-- ============================ Agency List Start ================================== -->
			<section>
			
            <div class="container">
            
                <div class="row">
                    <div class="col text-center">
                        <div class="sec-heading center">
                            <h2>Social Pedia Blogs</h2>
                            <p>Influencer Marketing Blog</p>
                        </div>
                    </div>
                </div>
            
                <!-- row Start -->
                <div class="row">
                <?php
                $result = $conn->query("SELECT * FROM post");
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                    <!-- Single blog Grid -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap-grid">
                            
                            <div class="blog-thumb" style="height:200px">
                                <a href="/SocialPedia/<?php echo $row['post_slug'];?>"><img src="assets/postimage/<?php echo $row['post_image'];?>" class="img-fluid" alt=""></a>
                            </div>
                            
                            <div class="blog-info">
                                <span class="post-date"><i class="ti-calendar"></i><?php echo $row['post_date'];?> </span>&nbsp;&nbsp;&nbsp;
                                <span class="post-date"><i class="fas fa-tag"></i><?php echo $row['post_category'];?></span>
                            </div>
                            
                            <div class="blog-body">
                                <h4 class="bl-title"><a href="/SocialPedia/<?php echo $row['post_slug'];?>"><?php echo $row['post_title'];?></a></h4>
                                <p><?php echo $row['post_title'];?>. </p>
                                <a href="/SocialPedia/<?php echo $row['post_slug'];?>" class="bl-continue">Continue</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php	
                    }
                }
                else {
                    echo "0 results"; 
                }  ?>
                    
                    
                </div>
                <!-- /row -->

                			
                
            </div>
                    
        </section>
        <!-- ============================ Agency List End ================================== -->



	<!-- Influcer search end -->





			
			<?php include('footer.php');?>