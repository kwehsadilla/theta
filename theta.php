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

<button class="button--one" id="button--one" on-click=cool_func()>FIND OUT</button>

</div>

</body>';
};

//let's run some funtions
spit_carousel();
?>

<?php
// i guess this is like the first "slide" or the greeting rather
$questions[0]="pssst, curious about your co2 footprint ?";
$questions[1]="let's start with your energy supplier";
$questions[2]='wrgrwg';
?>

<!--javascripts-->
<script>
	$( document ).ready(function() {
		//why did we json_encode it again
		//because transfering things from php to js and stuff
		var sometext= <?php echo json_encode($questions); ?>;

		var counter = 0;

		//i think here comes our on-click function
		$("#button--one").click(function() {
			$("#overlay_text").html(sometext[1]);
		});

		$("#overlay_text").html(sometext[counter]);
	});
</script>

<script>
function cool_func() {
	document.body.innerHTML += "some text";
	var div = document.getElementById('overlay_text');
	//div.innerHTML += 'sljnfgsjln';
	//div.remove();
}
</script>
