

var ws=new WebSocket("ws://localhost:8080");
$(function(){
    ws.onopen = function(){
        alert("连接成功");
    }
    ws.onerror = function(){
        alert("连接失败");
    }
	ws.onmessage = function(e){
        if( $(".top p").length>15)$(".top").html('');
        $('.top').append("<p>"+e.data+"</p>");
	};

        $("#upload").click(function (){
            $("#file_pic").click();
        });
});

$(document).keydown(function(){
    if(event.keyCode==13){
        ws.send( $('.textarea').val());
        $('.textarea').val('');
        event.preventDefault();
    }
})


if(!window.WebSocket && window.MozWebSocket)
     window.WebSocket=window.MozWebSocket;
if(!window.WebSocket){
    alert("此浏览器不支持WebSocket");
}
