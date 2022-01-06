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
/* the good and the bad buttons */
#button--good--one {
        display: flex;
        margin: 5px;

        width: calc(100% / 3);
        margin-left: calc(100% / 3);
        margin-right: calc(100% / 3);
}
#button--bad--one {
        display: flex;
        margin: 5px;

        width: calc(100% / 3);
        margin-left: calc(100% / 3);
        margin-right: calc(100% / 3);

}
/**/
#button--good--water {
        display: flex;
        margin: 5px;

        width: calc(100% / 3);
        margin-left: calc(100% / 3);
        margin-right: calc(100% / 3);

}
#button--bad--water {
        display: flex;
        margin: 5px;

        width: calc(100% / 3);
        margin-left: calc(100% / 3);
        margin-right: calc(100% / 3);

}

#button--good--materials {
        display: flex;
        margin: 5px;

        width: calc(100% / 3);
        margin-left: calc(100% / 3);
        margin-right: calc(100% / 3);

}
#button--bad--materials {
        display: flex;
        margin: 5px;

        width: calc(100% / 3);
        margin-left: calc(100% / 3);
        margin-right: calc(100% / 3);

}
/**/
.stars {
	display: flex;
	
	width: calc(100% / 3);
	margin-left: calc(100% / 3);
	margin-right: calc(100% / 3);

	justify-content: center;
	align-items: center; 

	padding: 5px;
}
.stars-row {
	margin: auto;
	position: relative;
}
/**/
</style>
</head>
<body>
<div id="carousel">
        <div id="overlay_text"></div>

	<!--button-->

<button class="button--one" id="button--one">FIND OUT</button>

</div>

<?php
//the survey array
$questions[0]="pssst, curious about your co2 footprint ?";
$questions[1]="let's start with your energy supplier";
$questions[2]="now how about your water situation ?";
$questions[3]="and the materials ?";
$questions[4]="how about logistics ?";
$questions[5]="and the ecology?";
?>

<!--javascripts-->
<script>
        $( document ).ready(function() {
                var sometext= <?php echo json_encode($questions); ?>;

                var counter = 0;

                $("#button--one").click(function() {
                        counter++
                        $("#overlay_text").html(sometext[counter]);



                        $("#button--one").hide();

			//now comes jq to add the new buttons
                        var gb = $('<button class="button--one" id="button--good--one">GOOD SUPPLIER</button>');
                        var bb = $('<button class="button--one" id="button--bad--one">BAD SUPPLIER</button>');
			var br = $('<br>')

                        $("#carousel").append(gb);
                        $("#carousel").append(br);
			$("#carousel").append(br);
			$("#carousel").append(br);
			$("#carousel").append(br);
			$("#carousel").append(bb);
                });

	$("#overlay_text").html(sometext[counter]);
        });
</script>

<script>

var points = 0;
//deal with stuff
$(document).on('click', '#button--good--one', function() {
	deal_with_stuff_and_increment();
});

$(document).on('click', '#button--bad--one', function() {
	deal_with_stuff();
});

function deal_with_stuff_and_increment () {
        points=points+1;
        console.log(points);
        var sometext= <?php echo json_encode($questions); ?>;
        $("#overlay_text").html(sometext[2]);

        //hide water buttons
        hide_stuff("#button--good--one");
        hide_stuff("#button--bad--one");

	//go to materials
        //materials();
        //$("#overlay_text").html(sometext[3]);

        var gb_water = $('<button class="button--one" id="button--good--water">GOOD ONE</button>');
        var bb_water = $('<button class="button--one" id="button--bad--water">BAD ONE</button>');
        var br_water = $('<br>');
        $("#carousel").append(gb_water);
        $("#carousel").append(br_water);
        $("#carousel").append(br_water);
	$("#carousel").append(br_water);
	$("#carousel").append(br_water);
        $("#carousel").append(bb_water);
};

function deal_with_stuff () {
        console.log(points);
        var sometext= <?php echo json_encode($questions); ?>;
        $("#overlay_text").html(sometext[2]);

        //hide water buttons
        hide_stuff("#button--good--one");
        hide_stuff("#button--bad--one");

        var gb_water = $('<button class="button--one" id="button--good--water">GOOD ONE</button>');
        var bb_water = $('<button class="button--one" id="button--bad--water">BAD ONE</button>');
        var br_water = $('<br>');
        $("#carousel").append(gb_water);
        $("#carousel").append(br_water);
        $("#carousel").append(br_water);
	$("#carousel").append(br_water);
	$("#carousel").append(br_water);
        $("#carousel").append(bb_water);

        
        //go to other materials
        //materials();
        //$("#overlay_text").html(sometext[3]);
};

//water slide
$(document).on('click', '#button--good--water', function() {

        points=points+1;
        console.log(points);
        var sometext= <?php echo json_encode($questions); ?>;
        $("#overlay_text").html(sometext[3]);

        //hide water buttons
        hide_stuff("#button--good--water");
        hide_stuff("#button--bad--water");

        //go to materials
        //materials();
        //$("#overlay_text").html(sometext[3]);

        var gb_materials = $('<button class="button--one" id="button--good--materials">GOOD MATERIALS</button>');
        var bb_materials = $('<button class="button--one" id="button--bad--materials">BAD MATERIALS</button>');
        var br_materials = $('<br>');
        $("#carousel").append(gb_materials);
        $("#carousel").append(br_materials);
        $("#carousel").append(br_materials);
	$("#carousel").append(br_materials);
	$("#carousel").append(br_materials);
        $("#carousel").append(bb_materials);

});
//water slide continued
$(document).on('click', '#button--bad--water', function() {

        console.log(points);
        var sometext= <?php echo json_encode($questions); ?>;
        $("#overlay_text").html(sometext[3]);

        //hide water buttons
        hide_stuff("#button--good--water");
        hide_stuff("#button--bad--water");

        //go to materials
        //materials();
        //$("#overlay_text").html(sometext[3]);

        var gb_materials = $('<button class="button--one" id="button--good--materials">GOOD MATERIALS</button>');
        var bb_materials = $('<button class="button--one" id="button--bad--materials">BAD MATERIALS</button>');
        var br_materials = $('<br>');
        $("#carousel").append(gb_materials);
        $("#carousel").append(br_materials);
        $("#carousel").append(br_materials);
	$("#carousel").append(br_materials);
	$("#carousel").append(br_materials);
        $("#carousel").append(bb_materials);
});

$(document).on('click', '#button--good--materials', function() {

        //$("#overlay_text").hide();

        points=points+1;
        console.log(points);

        hide_stuff("#button--good--materials");
        hide_stuff("#button--bad--materials");

	$("#overlay_text").html("your score");
	stars(points);
});

$(document).on('click', '#button--bad--materials', function() {

        //$("#overlay_text").hide();
         console.log(points);

        hide_stuff("#button--good--materials");
        hide_stuff("#button--bad--materials");

	//var anothertext= <?php echo json_encode("your score"); ?>;
	//$("#overlay_text").html(anothertext);	
	$("#overlay_text").html("your score");
	stars(points);
});
</script>

<script>
function hide_stuff(param) {
	$(param).hide();
}
function stars(points) {
	
	//var anothertext = document.getElementById('overlay_text');
	//anothertext.innerHTML += 'your score';	

	if (points === 0) {
		var stars = <?php echo json_encode('

<div class="stars">
	<div class="stars-row">
		<br>
		<br>
		<img src="assets/star-empty.svg" width="100px">
		<img src="assets/star-empty.svg" width="100px">
		<img src="assets/star-empty.svg" width="100px">
	</div>
</div>
'); ?>;
	$("#carousel").append(stars);
	} else if (points === 1) {
		var stars = <?php echo json_encode('

<div class="stars">
        <div class="stars-row">
                <br>
                <br>
                <img src="assets/star-filled.svg" width="100px">
                <img src="assets/star-empty.svg" width="100px">
                <img src="assets/star-empty.svg" width="100px">
        </div>
</div>
'); ?>; 
        $("#carousel").append(stars);
	} else if (points === 2 ) {
		var stars = <?php echo json_encode('

<div class="stars">
        <div class="stars-row">
                <br>
                <br>
                <img src="assets/star-filled.svg" width="100px">
                <img src="assets/star-filled.svg" width="100px">
                <img src="assets/star-empty.svg" width="100px">
        </div>
</div>
'); ?>; 
        $("#carousel").append(stars);
	} else {
		var stars = <?php echo json_encode('

<div class="stars">
        <div class="stars-row">
                <br>
                <br>
                <img src="assets/star-filled.svg" width="100px">
                <img src="assets/star-filled.svg" width="100px">
                <img src="assets/star-filled.svg" width="100px">
        </div>
</div>
'); ?>; 
        $("#carousel").append(stars);
	}
}
</script>
</body>
