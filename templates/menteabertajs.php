<!DOCTYPE html>
<?php
    //echo "GET is: ".$_GET['url'];
    $audioID = $_GET['url'];
    //$final = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/".$audioID."&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false";
    $link = "https://api.soundcloud.com/tracks/".$audioID;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    <script type="text/javascript">-->
<!--        classname = "mobilePrestitial__link";-->
<!---->
<!--        tryclick(0);-->
<!---->
<!--        function tryclick(i) {-->
<!--            if (i > 20) {-->
<!--                alert("Reach more than 20 and going back.");-->
<!--                return false;-->
<!--            }-->
<!---->
<!--            var element = document.getElementsByClassName(classname);-->
<!--            if (element[0] == undefined){-->
<!--                setTimeout(function () {-->
<!--                    var newi = i+1;-->
<!--                    tryclick(newi);-->
<!--                }, 500);-->
<!--            }else{-->
<!--                element.click();-->
<!--                alert("element reached with successful. Tries: "+i);-->
<!--            }-->
<!--        }-->
<!--    </script>-->
    <script type="text/javascript" src="/site/js/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function () {

            var frameset = $('#frameset').contents();

            //var DOM = new Document();
//            var frame = $('<iframe/>')
//                .attr('id', 'someId')
//                .attr('src', '<?//= $link ?>//')

//                .append( $('document.body') )
//                .load(function() {
//                    $(this).contents().find('body').click(function() {
//                        alert('Loaded!');
//                    });
//                })
//                .ready(function() {
//                    $(this).contents().find('body').click(function() {
//                        alert('Ready!');
//                    });
//                });

//            document.body.appendChild(frame[0]);
//            console.log(frame);
            console.log(frameset[0]);
            var t1 = frameset.find('.mobilePrestitial__link');
            console.log(t1);

        })
    </script>
</head>
<body>
    <iframe id="frameset" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F1848538"></iframe>
</body>
</html>