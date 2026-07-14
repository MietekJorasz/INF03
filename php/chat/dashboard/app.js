$(function(){
    $("#profileLogo").click(function(){
        $("#dropdown").fadeToggle("fast");
    });

    const currentUrl = window.location.href;

    const url = new URL(currentUrl);

    const params = new URLSearchParams(url.search);

    const conversationID = params.get('id');
    const uname = params.get('uname');

    chats();
    refreshData();
    setInterval(refreshData, 5000);

    $("#search").on("input", function(){
        chats();
    });

    $("#send").click(function(){
        $.ajax({
            url: 'messageHandler.php',
            method: "POST",
            data: {
                conversationID: conversationID,
                message: $("#message").val()
            }
        })
        .then(function(response) {
            $("#message").val("");
            refreshData();
            $('#messageCon').animate({scrollTop: $('#messageCon')[0].scrollHeight}, "slow");
        });
    });

    function refreshData(){
        $.ajax({
            url: 'messageRefresh.php',
            method: "POST",
            data: {
                conversationID: conversationID,
                uname: uname
            }
        })
        .then(function(response) {
            $('#messageCon').html(response);
        });
    }

    function chats(){
        $.ajax({
            url: 'search.php',
            method: "POST",
            data: {
                string: $("#search").val()
            }
        })
        .then(function(response) {
            console.log(response)
            $("#friendsCon").html(response);
        });
    }

});