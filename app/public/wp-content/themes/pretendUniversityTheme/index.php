<?php
function greeting($name, $color) {
echo "<p>Hi, my name is $name and my favorite color is $color</p>";
}
greeting('Julie', 'blue');
greeting('Austin', 'green');
?>
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>


<?php
$names = array('Julie', 'Allen', 'Austin');
$count = 1;
while($count < 100){
echo "<li>$count</li>";
$count ++;
}
?>
<p>Hi, my name is <?php echo $names[0] ?></p>