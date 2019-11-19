(function ($) {
    $(document).ready(function(){
        $('select').each( function () {
            $(this).selectmenu({ width : $(this).width() + 30 });
        });
        if($(".postArea .tb01").length){
            var tb = $(".postArea .tb01");
            var select=mobileTb(tb);
            if($( window ).width()<600) setSelectmenu();
            $( window ).resize(function() {
                var width=$( window ).width();
                if(width<600){
                    tb.hide();
                    jQuery("#tabthis").parent().show();
                }else{
                    tb.show();
                    jQuery("#tabthis").parent().hide();
                }

            });
        }
        if($("#tabs").length){
            $( "#tabs" ).tabs();
        }
        $('body').addClass('easywidget2');
    });
})(jQuery);
function setSelectmenu(){
    var tb = $(".postArea .tb01");
    tb.hide();
    jQuery("#tabthis").parent().show();

}
function mobileTb(tb){
    //$( "#선택할친구" ).selectmenu();
    var label = jQuery("<label />").attr("for", "tabthis").text("");
    var select = jQuery("<select />").attr("name", "tabthis").attr("id", "tabthis");
    tb.find("li").each(function(){
        var option = jQuery("<option />").attr("value", jQuery(this).find("a").attr("href")).text(jQuery(this).find("a").text());
        if($(this).hasClass("on")) option.attr("selected","selected");
        select.append(option);
    });
    var div=jQuery("<div />");
    div.append(label).append(select).hide();
    tb.after(div)
    select.selectmenu({
        width : 290,
        change: function( event, data ) {
            location.href=data.item.value;
        }
    });
}

function sendEmail(){
    var value="";
    var data = new Object();
    data.action="get_email";
    $.post(Drupal.settings.theme.ajaxurl, data, function(result){
        value=result.email;
        var email=prompt("Email 주소 입력",value);
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(email!=null){
            if(re.test(email)){
                var data = new Object();
                data.action="send_email";
                data.to=email;
                data.title=$("#main-content .header h1").text();
                data.content="공유된 컨텐츠 : "+$("#main-content .header h1").text()+" - "+location.href;


                $.post(Drupal.settings.theme.ajaxurl, data, function(result){
                    if(result.result){
                        alert("발송했습니다");
                    }else{
                        alert("발송실패");
                    }
                });
            }else{
                alert("이메일 주소를 정확하게 입력하세요.");
            }
        }
        return false;
    });


    return false;
}

function sendKakao(){
    var txt=encodeURIComponent($("#main-content .header h1").eq(0).text());
    var url=encodeURIComponent(location.href);
    var param='sendurl?msg=' + txt + '&url=' + url + '&type=link&aappid=snu.ac.kr&appver=1.0&appname=서울대';
    var appleStore='itms-apps://itunes.apple.com/app/id362057947?mt=8';
    var googleStore='market://details?id=com.kakao.talk';
    var appleSchm='kakaolink://';
    var googleSchm='scheme=kakaolink;package=com.kakao.talk';
    alert(param);
    if(navigator.userAgent.match(/android/i))
    {
        setTimeout(function(){ location.href = 'intent://' + param + '#Intent;scheme=kakaolink;package=com.kakao.talk;end'}, 100);
    }
    else if(navigator.userAgent.match(/(iphone)|(ipod)|(ipad)/i))
    {
        setTimeout(function(){
            location.href = 'itms-apps://itunes.apple.com/app/id362057947?mt=8';
        }, 200);
        setTimeout(function(){
            location.href = 'kakaolink://' + param;
        }, 100);
    }
    return false;
}

function reserve_cc(book_id, knd){
    var data = new Object();
    data.action="reserve_cc";
    data.book_id=book_id;
    data.knd=knd;
    $.post(Drupal.settings.theme.ajaxurl, data, function(result){
        if(result.success){
            alert("예약을 취소했습니다.");
            location.reload();
        }else{
            alert("예약 취소에 실패했습니다. 사이트 관리자에게 문의해 주세요.");
        }
    });
    return false;
}

function reserve_ex(book_id){
    $.post("/mbook/reserve_extension/"+book_id+"/ajax", function(result){
        console.log(result);
        if(result.success){
            alert("예약이 연장되었습니다.");
            location.reload();
        }else{
            alert(result.msg);
        }
    });
    return false;
}