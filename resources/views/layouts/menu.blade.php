<?php $url= explode('/', $_SERVER['REQUEST_URI']); 
	$active_item=$url[1];
?>
<a class="navLink <?php echo ($active_item=='')?'active':''  ?>" href="/">Books</a>
<a class="navLink <?php echo ($active_item=='add-book')?'active':''  ?>" href="/add-book">Add Book</a>
<a class="navLink <?php echo ($active_item=='category')?'active':''  ?>" href="/category">Category</a>
<a class="navLink <?php echo ($active_item=='add-category')?'active':''  ?>" href="/add-category">Add Category</a>
<a class="navLink <?php echo ($active_item=='author')?'active':''  ?>" href="/author">Author</a>
<a class="navLink <?php echo ($active_item=='add-author')?'active':''  ?>" href="/add-author">Add Author</a>
<a class="navLink <?php echo ($active_item=='book-author')?'active':''  ?>" href="/book-author">Assign book Author</a>
<a class="navLink <?php echo ($active_item=='review')?'active':''  ?>" href="/review">Review</a>


<style type="text/css">
	.navLink{
		padding: 10px;
		color: #909090;
	}
	.navLink.active{
		color: #1942bd;
    background: #d3e5f9;
    border-radius: 5px;
	}
</style>
