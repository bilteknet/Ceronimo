<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-30 10:34:47 +03:00 --- error: Uncaught Kohana_404_Exception: The page you requested, newuser.php, could not be found. in file system/core/Kohana.php on line 841
2011-08-30 10:34:49 +03:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'newuser.php' in 'where clause' - select posts.*,post_positions.*, user.username,posts_category.*
            from posts_category, posts inner join post_positions on 
            posts.post_id = post_positions.post_id inner join 
            user on user.user_id = posts.user_id AND posts.type = 1 AND posts.status = 1 where posts_category.post_id = posts.post_id AND posts_category.category_id =newuser.php in file system/libraries/drivers/Database/Mysql.php on line 371
2011-08-30 10:34:51 +03:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'newuser.php' in 'where clause' - select * from posts_tags where post_id = newuser.php  in file system/libraries/drivers/Database/Mysql.php on line 371
