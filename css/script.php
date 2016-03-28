<?php
/**
 * Created by PhpStorm.
 * User: alien
 * Date: 12/3/15
 * Time: 11:13 AM
 */
$lines = file("impress.css");
$out   = "";
foreach($lines as $n=>$line){
    if(substr($line,0,8) == ".present"){
        /*
.present .animate.bounceInDown
        */
        $animation_name = substr($line,17,strpos($line,",")-17);
        echo $animation_name."\n";
        //$out .= substr($line,0,-3).",.present.sub-animate".$animation_name."{\n";
    }else{
        //$out .= $line;
    }
}
//file_put_contents("impress_.css",$out);
/*$html = <<<'html'
<div class="ace-chrome"><div class="ace_static_highlight ace_show_gutter" style="counter-reset:ace_line 0"><div class="ace_line"><span class="ace_gutter ace_gutter-cell" unselectable="on"></span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"step"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-x</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"0"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-y</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"0"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-z</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"0"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-rotate-x</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"0"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-rotate-y</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"0"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-rotate-z</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"0"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">data-scale</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"1"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span><span class="ace_text ace_xml">Hello!</span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span>
</div></div></div>
html;

echo str_replace("\"",'\"',$html);*/
?>
<select class="input input--dropdown js--animations">
    <optgroup label="Attention Seekers">
        <option value="bounce">bounce</option>
        <option value="flash">flash</option>
        <option value="pulse">pulse</option>
        <option value="rubberBand">rubberBand</option>
        <option value="shake">shake</option>
        <option value="swing">swing</option>
        <option value="tada">tada</option>
        <option value="wobble">wobble</option>
        <option value="jello">jello</option>
    </optgroup>

    <optgroup label="Bouncing Entrances">
        <option value="bounceIn">bounceIn</option>
        <option value="bounceInDown">bounceInDown</option>
        <option value="bounceInLeft">bounceInLeft</option>
        <option value="bounceInRight">bounceInRight</option>
        <option value="bounceInUp">bounceInUp</option>
    </optgroup>

    <optgroup label="Bouncing Exits">
        <option value="bounceOut">bounceOut</option>
        <option value="bounceOutDown">bounceOutDown</option>
        <option value="bounceOutLeft">bounceOutLeft</option>
        <option value="bounceOutRight">bounceOutRight</option>
        <option value="bounceOutUp">bounceOutUp</option>
    </optgroup>

    <optgroup label="Fading Entrances">
        <option value="fadeIn">fadeIn</option>
        <option value="fadeInDown">fadeInDown</option>
        <option value="fadeInDownBig">fadeInDownBig</option>
        <option value="fadeInLeft">fadeInLeft</option>
        <option value="fadeInLeftBig">fadeInLeftBig</option>
        <option value="fadeInRight">fadeInRight</option>
        <option value="fadeInRightBig">fadeInRightBig</option>
        <option value="fadeInUp">fadeInUp</option>
        <option value="fadeInUpBig">fadeInUpBig</option>
    </optgroup>

    <optgroup label="Fading Exits">
        <option value="fadeOut">fadeOut</option>
        <option value="fadeOutDown">fadeOutDown</option>
        <option value="fadeOutDownBig">fadeOutDownBig</option>
        <option value="fadeOutLeft">fadeOutLeft</option>
        <option value="fadeOutLeftBig">fadeOutLeftBig</option>
        <option value="fadeOutRight">fadeOutRight</option>
        <option value="fadeOutRightBig">fadeOutRightBig</option>
        <option value="fadeOutUp">fadeOutUp</option>
        <option value="fadeOutUpBig">fadeOutUpBig</option>
    </optgroup>

    <optgroup label="Flippers">
        <option value="flip">flip</option>
        <option value="flipInX">flipInX</option>
        <option value="flipInY">flipInY</option>
        <option value="flipOutX">flipOutX</option>
        <option value="flipOutY">flipOutY</option>
    </optgroup>

    <optgroup label="Lightspeed">
        <option value="lightSpeedIn">lightSpeedIn</option>
        <option value="lightSpeedOut">lightSpeedOut</option>
    </optgroup>

    <optgroup label="Rotating Entrances">
        <option value="rotateIn">rotateIn</option>
        <option value="rotateInDownLeft">rotateInDownLeft</option>
        <option value="rotateInDownRight">rotateInDownRight</option>
        <option value="rotateInUpLeft">rotateInUpLeft</option>
        <option value="rotateInUpRight">rotateInUpRight</option>
    </optgroup>

    <optgroup label="Rotating Exits">
        <option value="rotateOut">rotateOut</option>
        <option value="rotateOutDownLeft">rotateOutDownLeft</option>
        <option value="rotateOutDownRight">rotateOutDownRight</option>
        <option value="rotateOutUpLeft">rotateOutUpLeft</option>
        <option value="rotateOutUpRight">rotateOutUpRight</option>
    </optgroup>

    <optgroup label="Sliding Entrances">
        <option value="slideInUp">slideInUp</option>
        <option value="slideInDown">slideInDown</option>
        <option value="slideInLeft">slideInLeft</option>
        <option value="slideInRight">slideInRight</option>

    </optgroup>
    <optgroup label="Sliding Exits">
        <option value="slideOutUp">slideOutUp</option>
        <option value="slideOutDown">slideOutDown</option>
        <option selected="selected" value="slideOutLeft">slideOutLeft</option>
        <option value="slideOutRight">slideOutRight</option>

    </optgroup>

    <optgroup label="Zoom Entrances">
        <option value="zoomIn">zoomIn</option>
        <option value="zoomInDown">zoomInDown</option>
        <option value="zoomInLeft">zoomInLeft</option>
        <option value="zoomInRight">zoomInRight</option>
        <option value="zoomInUp">zoomInUp</option>
    </optgroup>

    <optgroup label="Zoom Exits">
        <option value="zoomOut">zoomOut</option>
        <option value="zoomOutDown">zoomOutDown</option>
        <option value="zoomOutLeft">zoomOutLeft</option>
        <option value="zoomOutRight">zoomOutRight</option>
        <option value="zoomOutUp">zoomOutUp</option>
    </optgroup>

    <optgroup label="Specials">
        <option value="hinge">hinge</option>
        <option value="rollIn">rollIn</option>
        <option value="rollOut">rollOut</option>
    </optgroup>
</select>