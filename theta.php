<?php

function spit_carousel() {
	echo'
<!DOCTYPE html>
<head>
<script src ="jq.js"></script>
<style>
#carousel{
	border: 1px solid silver;	
	height: 500px;
	background: #32323c;
	margin-top: 25px;
}

#overlay_text{
        position: relative;
        font-size: 54px;
        font-family: verdana,helvetica;
        font-weight: 800;
        color: #FFFFFF;
        padding: 25px;
        opacity: 0.9;
        top: 21%;
        text-align: center;
        text-shadow: 1px 1px 0 #333333, 1px -1px 0 #333333, -1px 1px 0 #333333, -1px -1px 0 #333333;
	
	vertical-align: top;
}

/* button css */

button {
        pointer-events: auto;
        cursor: pointer;
        background: #e7e7e7;
        border: none;
        padding: 1.5rem 3rem;
	margin: 0;
	font-family: inherit;
        font-size: inherit;
        position: relative;
        display: inline-block;
}

/* first button */
.button--one {
	background:white;
	color:black;
	transition:0.4s;
	transform: perspective(1px) translateZ(0);

	width: calc(100% / 3);
	margin-left: calc(100% / 3);
	margin-right: calc(100% / 3);
	vertical-align: bottom;
	position:relative;
	top: 22%;
}
/* the hover effect */
.button--one:hover {
	/*color:white;*/
	box-shadow: 0 0 0 10px rgba(250,250,250,0.1)


}
/**/
</style>
</head>
<body>
<div id="carousel">
        <div id="overlay_text"></div>

	<!--button-->
<!--<button class="button--pulse" align="center"><a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">FIND OUT</a></div>-->
<button class="button--one">FIND OUT</button>
</div>

</body>';
};

//let's run some funtions
spit_carousel();
?>

<?php
	// i guess this is like the first "slide" or the greeting rather

	$text = "pssst, curious about your co2 footprint ?";
?>

<!--javascripts-->
<script>
	$( document ).ready(function() {
		//why did we json_encode it again
		var sometext= <?php echo json_encode($text); ?>;
		$("#overlay_text").html(sometext);
	});

	//let's just make it reset for now.
	$('input[type="reset"]').on('click', function(e){
		    e.preventDefault();
		        $('#carousel').empty();
		    })
</script>

<!--back to php-->
<?php
//now comes the next "slide"

?>

