$(document).ready(function () {
    loadchat();
});




$( "#shoutbox-heading" ).click(function() {
    toggle_shoutbox();
    setCookie("shoutbox_visiblity", 'hide', 365);
});


$( "#shoutbox-icon-div" ).click(function() {
    toggle_shoutbox();
    setCookie("shoutbox_visiblity", 'show', 365);
});



function toggle_shoutbox() {

    $( "#shoutbox-main" ).toggle();
    $( "#shoutbox-icon-div" ).toggle();

}





function loadchat() {
    





    url = 'http://shoutbox.rapporthosting.com/shoutbox/yii2/basic/web/index.php?r=shoutbox/loadchats',
	console.log("--loading chat..........."+url);

        $.getJSON(url, function (data) {


            var tbl_body = "";
            var odd_even = false;

            //tbl_row = "<th style='width:35%'>Date<th style='width:75%'>message</th><th style='width:10%'>person</th>";
            //tbl_body += "<tr style=\"background-color: " + ( odd_even ? "#E5F1F4" : "#F8F8F8") + "\">" + tbl_row + "</tr>";

            $.each(data, function () {


            /*
                console.log(this.date);
                console.log(this.person);
                console.log(this.text);
                */

                tbl_row = "<td>";

                tbl_row += '<div style="background-color:blanchedalmond;padding-left: 10px;font-size: 10px;border-radius: 10px;">';


                //tbl_row+='<h5><img src=" http://icons.iconarchive.com/icons/simiographics/mixed/512/Bullhorn-icon.png"/>'+this.person+'</h5>'+this.date;


                tbl_row += '<h5><i class="fa fa-bullhorn" aria-hidden="true"></i><span style="padding-left: 10px;">' + this.person + '</span></h5>' + this.date;

                tbl_row += '<div style="background-color: lightgoldenrodyellow; padding-left: 5px;font-size: 16px;">';
                tbl_row += this.text;
                tbl_row += '</div>';


                tbl_row += "</td>";

                /*
                 var tbl_row = "";

                 $.each(this, function (k, v) {
                 tbl_row += "<td>" + v + "</td>";
                 });
                 */

                //tbl_body += "<tr style=\"background-color: " + ( odd_even ? "#E5F1F4" : "#F8F8F8") + "\">" + tbl_row + "</tr>";
                //odd_even = !odd_even;
                tbl_body += "<tr>" + tbl_row + "</tr>";


            })

            //console.log("--tbl_body tbl_body..........." + tbl_body);


            $("#chat_table").html(tbl_body);
            scrolltobottom();
        });

}///end of function loadchat()

function scrolltobottom() {
    var objDiv = document.getElementById("chat_text");
    objDiv.scrollTop = objDiv.scrollHeight;


}///end of function scrolltobottom()


function replytothecchat() {
    console.log('Open Chat Window To disReply to this Chat');

    var error=null;

    var person = document.getElementById("person").value;
    var chat_msg = document.getElementById("chat_message").value;
    chat_msg = chat_msg.replace(/\s+/, "");


    document.getElementById("chat_message").style.backgroundColor = "#FFFFFF";
    document.getElementById("person").style.backgroundColor = "#FFFFFF";

    if (person == '' || person == null) {
        document.getElementById("person").style.backgroundColor = "#FEEEEE";
        document.getElementById("shout-error").innerHTML = 'Your name';
        error=1;
    }///end of   if (person == '' || person == null ) {


    if (chat_msg == '' || chat_msg == null) {
        document.getElementById("chat_message").style.backgroundColor = "#FEEEEE";
        document.getElementById("shout-error").innerHTML += ' Message';
        error=1;
    }//end of if if (chat_msg == '' || chat_msg == null ) {




    if (error)
    {
        document.getElementById("shout-error").innerHTML += ' missing';
    }else
        {

        $.ajax({
            url: 'http://shoutbox.rapporthosting.com/shoutbox/yii2/basic/web/index.php?r=shoutbox/shout',
            type: 'POST',
            data: {'chat_msg': chat_msg, 'person': person},
            success: function (data, status) {

                console.log(data);
                loadchat();
                //alert(data);
                location.reload();


            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                alert("Details: " + desc + "\nError:" + err);
            }
        }); // end ajax call


    }////end of if -elsee (chat_msg == '' || chat_msg == null ) {


}///end of function replytothecchat()




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

checkCookie();
dispayShoutbox();

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {


    var shoutbox_visiblity= getCookie("shoutbox_visiblity");
    if (shoutbox_visiblity!= "") {

        shoutbox_visiblity='show';

    } else {

        shoutbox_visiblity='show';
        setCookie("shoutbox_visiblity", shoutbox_visiblity, 365);

    }
}


function dispayShoutbox() {
    shoutbox_visiblity = getCookie('shoutbox_visiblity');

    if (shoutbox_visiblity == 'show') {

        $("#shoutbox-main").show();
        $("#shoutbox-icon-div").hide();

    } else
    {
        $("#shoutbox-main").hide();
        $("#shoutbox-icon-div").show();
    }


}

