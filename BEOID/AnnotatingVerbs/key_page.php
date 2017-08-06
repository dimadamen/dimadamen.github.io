<html>

<script>
<?php
    function generateRadioButtons($name, $values=array('ERROR')) {
        $o = '<p class="ratingButtons">' . "\n";
        //for ($v = 1; $v <= $values; $v++) {
        $c = 0;
        foreach ($values as &$v) {
            $o.= '<input type="hidden" value="0" name="' . $v . '">';
            $o.= '<li><input type="checkbox" class="spacing" name="' . $v . '" value="1">' . $v . "\n</li>";
            $c++;
        }
        $o.= '</p>' . "\n";
        return $o;
    }
?>


    function pagechange(frompage, topage) {
        var page=document.getElementById('verbs'+frompage);
        if (!page) return false;
        page.style.visibility='hidden';
        page.style.display='none';

        page=document.getElementById('verbs_button'+frompage);
        if (!page) return false;
        page.style.visibility='hidden';
        page.style.display='none';

        page=document.getElementById('verbs'+topage);
        if (!page) return false;
        page.style.display='block';
        page.style.visibility='visible';

        if(topage==3) {
            page=document.getElementById('submit_div');
            if (!page) return false;
            page.style.display='block';
            page.style.visibility='visible';
        }

        page=document.getElementById('verbs_button'+topage);
        if (!page) return false;
        page.style.display='block';
        page.style.visibility='visible';


        return true;
    }

</script>

<style>
    input[type=checkbox] {
        transform: scale(1.5);
    }
    .checkbox-grid li {
        display: block;
        float: left;
        width: 16%;
    }
    div {
        text-align:center;
        width:100%;
    }

    h2 {color:navy;}
    h3 {color:darkcyan; font-weight:normal;}
</style>


<body>

<?php
    $key = $_POST['key'];
    $correct = true;
?>

<div>
    <h2>Input Form</h2>
</div>

<!-- Check which key was entered --!>
<?php if($key == "68832"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9neUJOeGtwbzFvcU0/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "12320"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nZkxRWEtHeVl0bWc/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "24073"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nZnhqNzluUXpBSmc/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "59223"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nbm9qb0JmTnA5dlU/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "85044"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nUy14OUNnTTkzNkk/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "95863"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nem5ObHJRUzdkM1E/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "63320"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nbHBUc0xZOF9xdDA/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "54874"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nX3d2S0N2Tm1wNzA/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "95099"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nazRSS0R4VzZiUWs/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "23580"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9ncFA3QjQ4eTBCOU0/preview" width="640" height="480"></iframe>
	</div>
<?php elseif($key == "22943"):?>
	<div>
		<iframe src="https://drive.google.com/file/d/0ByWyRN0d1h9nMnFtNm04RDdnSzA/preview" width="640" height="480"></iframe>
	</div>
<?php else:
	$correct=$false;?>
	<p>An incorrect key has been entered.</p>
	<a href="index.htm">Return</a></p>
<?php endif;?>


<?php if($correct == true):
	$verbs1 = array('divide','point','wash_up','move','set_up','replace','wash','hold_on','shake','touch','open','find','cut','pull_out','transfer','swipe','start','spread','fumble','crack','input','kick','grip','plug','distribute','return','insert','put_down','spoon','lift');
	$verbs2 = array('press','hold','pull','rotate','flip','remove','untangle','slide','adjust','grasp','grab','activate','tap','scan','twist','carry','unlock','switch_on','pull_up','close','check','examine','fill','screw','hold_down','turn_on','scoop','squeeze','relax','tip');
	$verbs3 = array('turn_off','mix','take','swirl','plug_in','weaken','stir','step_on','pick_up','peel','compress','reach','release','spray','press_down','put','pedal','pour','dry','drain','fill_up','drive','turn','switch','let_go','place','clean','push','position','rinse');
?>

<form action="submit_page.php" method="post">

    <div>
        <h3>Choose all verbs which are applicable to the video above (if any)</h3> 
    </div>

    <fieldset id="verbs1">
        <u1 class="checkbox-grid">
        <?php echo generateRadioButtons("verbs", $verbs1) ?>
        </u1>
    </fieldset>
    <div id=verbs_button1>
        <input type="button" value="next 1/3" onclick="pagechange(1,2);">
    </div>

    <fieldset id="verbs2" style="display:none">
        <u1 class="checkbox-grid">
        <?php echo generateRadioButtons("verbs", $verbs2) ?>
        </u1>
    </fieldset>
    <div id=verbs_button2 style="display:none">
        <input type="button" value="next 2/3" onclick="pagechange(2,3);">
    </div>

    <fieldset id="verbs3" style="display:none">
        <u1 class="checkbox-grid">
        <?php echo generateRadioButtons("verbs", $verbs3) ?>
        </u1>
    </fieldset>
    <input type="hidden" name="key" value=<?php echo $key ?> />

    <br>
    <div id="submit_div" style="display:none">
    <input type="submit" value="submit 3/3">
    </div>

</form>
<?php endif;?>

</body>
</html>


