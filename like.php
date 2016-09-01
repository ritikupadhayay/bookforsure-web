<html>
<link rel="stylesheet" href="style.css" />
<?php
include('db.php');
$strSQL_Result  = mysqli_query($connection,"select `like`,`un-like` from `like` where id=1");
$row            = mysqli_fetch_array($strSQL_Result);
 
$like       = $row['like'];
$unlike     = $row['un-like'];
if($_POST)
{
    if(isset($_COOKIE["counter_gang"]))
    {
        echo "-1";
        exit;
    }
    setcookie("counter_gang", "liked", time()+3600*24, "/like-unlike-in-php-mysql/", ".demo.phpgang.com");
    if(mysqli_real_escape_string($connection,$_POST['op']) == 'like')
    {
        $update = "`like`=`like`+1";
    }
    if(mysqli_real_escape_string($connection,$_POST['op']) == 'un-like')
    {
        $update = "`un-like`=`un-like`+1";
    }
    mysqli_query($connection,"update `like` set $update where `id`=1");
    echo 1;
    exit;   
}
?>
<div class="grid">
<span id="status"></span><br>
<input type="button" value="<?php echo $like; ?>" class="button_like" id="linkeBtn" />
<input type="button" value="<?php echo $unlike; ?>" class="button_unlike" id="unlinkeBtn" />
</div>
 <script>
 $("#linkeBtn").removeAttr("disabled");
$("#unlinkeBtn").removeAttr("disabled");
$('#linkeBtn').click(function(e)
    {
        var val = parseInt($("#linkeBtn").val(), 10);
        $.post("like.php", {op:"like"},function(data)
        {
            if(data==1)
            {
                $("#status").html("Liked Sucessfully!!");
                val = val+1;
                $("#linkeBtn").val(val);
                $("#linkeBtn").attr("disabled", "disabled");
                $("#linkeBtn").css("background-image","url(arrow.png)");
            }
            else
            {
                $("#status").html("Already Liked!!");
            }
        })
    });
    $('#unlinkeBtn').click(function(e)
    {
        var val = parseInt($("#unlinkeBtn").val(), 10);
        $.post("like.php", {op:"un-like"},function(data)
        {
            if(data==1)
            {
                val = val+1;
                $("#unlinkeBtn").val(val);
                $("#unlinkeBtn").attr("disabled", "disabled");
                $("#unlinkeBtn").css("background-image","url(likebw.png)");
                $("#status").html("Un-liked Sucessfully!!");
            }
            else
            {
                $("#status").html("Already Un-liked!!");
            }
        })
    });            
});
 
 </script>
</html>