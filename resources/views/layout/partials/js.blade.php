<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/storage/js/app.js"></script>
<script>
  //load blog
  $(function() {

  	// Call the /posts endpoint via the WordPress API
  	$.get("<?php echo env('WP_BLOG_URL'); ?>", function (posts) {

      blog_posts = '';
      $.each(posts, function(index, post) {
        var date = new Date(post.date);

        blog_posts += '<h3 class="ctitle">'+post.title['rendered']+'</h3>';
        blog_posts += '<h4>'+(date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear()+'</h4>';
        blog_posts += post.content['rendered'];
        blog_posts += '<div class="hline"></div>';
        blog_posts += '<div class="spacing"></div>';
      });

      $('#blog-posts').html(blog_posts);
  	});

    $.ajax({
        url : "/site_generated.txt",
        dataType: "text",
        success : function (data) {
          $("#site_generated").html('<h5>'+data+'</h5>');
        }
    });

  });
</script>
