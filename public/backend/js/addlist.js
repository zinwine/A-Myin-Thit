$(document).ready(function () {
    var msgarray = [];
    var count = 0;

//            $('#show').click(function () {
////            var result = "";
////            for (var i = 0; i < msgarray.length; i++) {
////                result += msgarray["'"+i+"'"] + '\n';
////            }
////            alert(result);
//                console.log(msgarray);
//            });
    $('#add').click(function () {
//                var task = $("#responsibility").val();
//                if (!task) return false;
//                buildTask(task, count).appendTo("#restasks");
//                count++;
//                $("#responsibility").val("").focus();
//            });
//            $("#responsibility").keydown(function (e) {
//                if (e.which == 13)
//                    $("#resadd").click();
//            });
        alert("hello");
    });
    function buildTask(msg, count) {
        var task = $("<span>").html(msg);

        msgarray["'" + count + "'"] = msg;
        //        alert(msg + "and" + count);

        //        msgarray.push(msg);

        var del = $("<a>", {
            href: "#"
        }).html("&times;").click(function () {
            alert($(this).parent().index());
            var place = $(this).parent().index() + "";
//            msgarray.splice($(this).parent().index(),1);
            delete msgarray["'" + $(this).parent().index() + "'"];
            $(this).parent().remove();
//            delete msgarray["'"+$(this).parent().index()+"'"];

//            alert(msgarray[0]);
//            msgarray[]
            // $("h1 span").html( $("#tasks li").length );
        });
        return $("<li>").append(task).append(del);
    }
});
