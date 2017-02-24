<?php
echo "<p>du php<p>\n";
?>
<p>du html</p>

<?php
for ($i = 1; $i <= 10; $i++) {
?>
<p>du html + php <?php echo $i; ?></p>
<?php
}
