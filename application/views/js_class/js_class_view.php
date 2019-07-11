<html>
<head>
<title>Codeigniter javascript and jquery class</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_js.css">

<!--Here is Jquery file "jquery.min.js", which send from controller as variable-->
<?php echo $library_src; ?>
<?php echo $script_head;?>
<?php echo $script_foot; ?>

</head>
<body>
<div class="main">
<div id="content">
<h2 id="form_head">Javascript Library Example</h2><br/>
<hr>
<div id="form_input">
<?php
echo form_open();
// Name Fied
echo form_label('User Name');
$data_name = array(
'name' => 'name',
'class' => 'input_box',
'placeholder' => 'Please Enter Name',
'id' => 'name'
);
echo form_input($data_name);
echo "<br>";
echo "<br>";
// Password Field
echo form_label('Password');
$data_name = array(
'type' => 'password',
'name' => 'pwd',
'class' => 'input_box',
'placeholder' => '',
'id' => 'pwd'
);
echo form_input($data_name);
?>
</div>
<div id="form_button">
<?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
</div>
<?php
// Form Close
echo form_close();
?>
</div>
</div>

<!-- Buttons, which perform jquery task -->
<div id="js_button">
<h3 id="button_heading">Click Buttons and view the effect, using javascript library in codeIgniter</h2>

<button type="button" class="button_type" id="click">Click Me</button>
<br>
<button type="button" class="button_type" id="double_click">Double Click</button>
<br>
<button type="button" class="button_type" id="hide_div">Hide</button>
<br>
<button type="button" class="button_type" id="show_div">Show</button>
<br>
<button type="button" class="button_type" id="fadeout_fun">Fade Out</button>
<br>
<button type="button" class="button_type" id="fadein_fun">Fade In</button>
<br>
<button type="button" class="button_type" id="toggle">Toggle</button>
<br>
<button type="button" class="button_type" id="slidetoggle">Slide Toggle</button>
<br>
<button type="button" class="button_type" id="slideup">Slide Up</button>
<br>
<button type="button" class="button_type" id="slidedown">Slide Down</button>
</div>

<!-- script tag recieve variables with js event,which send from controller. -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery-1.4.2.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
<?php echo $click; ?>
<?php echo $dbl_click; ?>
<?php echo $hide; ?>
<?php echo $show; ?>
<?php echo $fade_in; ?>
<?php echo $fade_out; ?>
<?php echo $toggle; ?>
<?php echo $slide_toggle; ?>
<?php echo $slide_down; ?>
<?php echo $slide_up; ?>
</script>

</body>
</html>