function activityCheck()
{
    $.post("check-user-activity.php",
    {
        data:"123"
    },
    function(data){
        if(data!='active mode'){
            window.location.replace("logout.php");
        }
    });
    setTimeout(activityCheck,2000);
}
activityCheck();