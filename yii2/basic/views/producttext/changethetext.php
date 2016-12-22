<h1><?php echo $message; ?></h1>

<h3>Step 1: Finding and loading the rows</h3>


<?php 

foreach ($data as $d) { 

 	echo '<hr><br>';
	$new_value=findpositionofscripttagandreplace($d->value);
	
	echo '<br>'.$model->updatethenewvalue($d->value_id, $new_value);
	
	
}///enbd of foreach


/////////MY FUNCTUIONS//////////

function findpositionofscripttagandreplace($product_text)
{
 
  
	// Note our use of ===.  Simply == would not work as expected
	// because the position of 'a' was the 0th (first) character.
	echo "<textarea>$product_text</textarea>";	

	$product_text = preg_replace('~<script type="text/javascript">.*?</script>~s', '<span id="brandname"></span>', $product_text, 1);
	
	echo "<textarea>$product_text</textarea>";	

	return $product_text;

}///end of function findpositionofscripttag($product_text)


 

?>

