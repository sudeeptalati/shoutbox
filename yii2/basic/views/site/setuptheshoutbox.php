<?php
/**
 * Created by PhpStorm.
 * User: sudeeptalati
 * Date: 20/12/2016
 * Time: 10:58
 */ ?>



<?php $js_url = "http://shoutbox.rapporthosting.com/shoutbox/yii2/basic/web/js/shout.js"; ?>
<?php $css_url = "http://shoutbox.rapporthosting.com/shoutbox/yii2/basic/web/css/shout.css"; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Shout BOX Start -->

<link rel="stylesheet" type="text/css" href="<?php echo $css_url; ?>">


<div class="shoutbox-main" id="shoutbox-main">
    <div id="shoutbox-heading" class="shoutbox-heading"><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp;&nbsp;Shout
        Box
        <span style="float: right;">
        <i class="fa fa-minus-square" aria-hidden="true"></i>
      </span>
    </div>
    <br>
    <div id="chat_text" class="shoutbox-scroll-div">
        <table style="width:100%" id="chat_table">
        </table>
    </div>
    <br>
    <div>
        <div id="shout-error" class="shout-error"></div>
        <input id="person" placeholder="Shout As" style="width: 100%">
        <table>
            <tr>
                <td style="width: 70%">
                    <textarea id="chat_message" class="shoutbox-text_area" placeholder="Message"></textarea>
                </td>
                <td style="width: 30%">
                    <button id="reply_to_chat" onclick="replytothecchat();" class="btn btn-primary shout-button">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i> <br>SHOUT
                    </button>
                </td>
            </tr>
        </table>
    </div>
</div>


<div id="shoutbox-icon-div" class="shoutbox-icon-div btn btn-primary">

    <i class="fa fa-bullhorn fa-flip-horizontal" aria-hidden="true"></i>

</div>


<script src="<?php echo $js_url; ?>"></script>

<!-- Shout BOX End-->





<pre>
&lt;!-- Shout BOX Start --&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;<?php echo $css_url; ?>&quot;&gt;
    &lt;div class=&quot;shoutbox-main&quot; id=&quot;shoutbox-main&quot;&gt;
    &lt;div id=&quot;shoutbox-heading&quot; class=&quot;shoutbox-heading&quot;&gt;
        &lt;i class=&quot;fa fa-bullhorn&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&amp;nbsp;&amp;nbsp;Shout Box
        &lt;span style=&quot;float: right;&quot;&gt; &lt;i class=&quot;fa fa-minus-square&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; &lt;/span&gt;

    &lt;/div&gt;
    &lt;br&gt;
        &lt;div id=&quot;chat_text&quot; class=&quot;shoutbox-scroll-div&quot;&gt;
        &lt;table style=&quot;width:100%&quot; id=&quot;chat_table&quot;&gt;&lt;/table&gt;
    &lt;/div&gt;
    &lt;br&gt;
    &lt;div&gt; &lt;div id=&quot;shout-error&quot; class=&quot;shout-error&quot;&gt;&lt;/div&gt;
    &lt;input id=&quot;person&quot; placeholder=&quot;Shout As&quot; style=&quot;width: 100%&quot;&gt;
    &lt;table&gt; &lt;tr&gt; &lt;td style=&quot;width: 70%&quot;&gt;
        &lt;textarea id=&quot;chat_message&quot; class=&quot;shoutbox-text_area&quot; placeholder=&quot;Message&quot;&gt;&lt;/textarea&gt; &lt;/td&gt; &lt;td style=&quot;width: 30%&quot;&gt; &lt;button id=&quot;reply_to_chat&quot; onclick=&quot;replytothecchat();&quot; class=&quot;btn btn-primary shout-button&quot;&gt; &lt;i class=&quot;fa fa-bullhorn&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; &lt;br&gt;SHOUT &lt;/button&gt;
    &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;
    &lt;/div&gt; &lt;/div&gt;
    &lt;div id=&quot;shoutbox-icon-div&quot; class=&quot;shoutbox-icon-div btn btn-primary&quot;&gt;
    &lt;i class=&quot;fa fa-bullhorn fa-flip-horizontal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; &lt;/div&gt;

    &lt;script src=&quot;<?php echo $js_url; ?>&quot;&gt;&lt;/script&gt;

  &lt;!-- Shout BOX End--&gt;

</pre>
