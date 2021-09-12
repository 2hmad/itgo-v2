<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
	<loc>https://itgo-solutions.com/</loc>
	<lastmod>2021-09-09T02:01:41+01:00</lastmod>
	<priority>1.0</priority>
</url>
<url>
	<loc>https://itgo-solutions.com/about-us.php</loc>
	<lastmod>2021-09-09T02:01:45+01:00</lastmod>
	<priority>1.0</priority>
</url>
<url>
	<loc>https://itgo-solutions.com/portfolio.php</loc>
	<lastmod>2021-09-09T02:01:45+01:00</lastmod>
	<priority>1.0</priority>
</url>
<?php
include 'connection.php';
$sql = "SELECT * FROM portfolio";
$query = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($query)) {
	$id = $row['id'];
	echo '
	<url>
		<loc>https://itgo-solutions.com/work.php?id='.$id.'</loc>
		<lastmod>2021-09-09T02:01:49+01:00</lastmod>
		<priority>1.0</priority>
	</url>
	';
}
?>

<url>
	<loc>https://itgo-solutions.com/blog.php</loc>
	<lastmod>2021-09-09T02:01:47+01:00</lastmod>
	<priority>1.0</priority>
</url>
<url>
	<loc>https://itgo-solutions.com/contact-us.php</loc>
	<lastmod>2021-09-09T02:01:48+01:00</lastmod>
	<priority>1.0</priority>
</url>
<url>
	<loc>https://itgo-solutions.com/programming-languages.php</loc>
	<lastmod>2021-09-09T02:01:47+01:00</lastmod>
	<priority>1.0</priority>
</url>
<?php
include 'connection.php';
$sql = "SELECT * FROM blog";
$query = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($query)) {
	$id = $row['id'];
	echo '
	<url>
		<loc>https://itgo-solutions.com/article.php?article='.$id.'</loc>
		<lastmod>2021-09-09T02:01:49+01:00</lastmod>
		<priority>1.0</priority>
	</url>

	';
}
?>
</urlset>