$(function () {
    var fx = {
        "initModal": function () {
            if ($(".modal-window").length == 0) {
                $("<div>").attr("id", "jquery-overlay")
                    .appendTo("body");
                return $("<div>")
                    .addClass("modal-window")
                    .appendTo("body");
            } else { return $(".modal-window"); }
        }
    }

    $("a.prod_more").on('click', function (event) {
        event.preventDefault(); // отменяем ссылку
        var data = $(this).attr("data-id");
        modal = fx.initModal();

        $("<a>").attr("href", "#")
            .addClass("modal-close-btn glyphicon glyphicon glyphicon-remove")
            .css({
                "text-decoration": "none",
                "padding-bottom": "10px",
                "margin-left": "96%"
            })
            .click(function (event) {
                event.preventDefault();
                $(".modal-window").remove();
                $("#jquery-overlay").remove();
            }).appendTo(modal);
        
        $("#jquery-overlay").on('click', function (event) {
            event.preventDefault();
            $(".modal-window").remove();
            $("#jquery-overlay").remove();
        })

        
        $.ajax({
            type: "Post",
            url: "/ajax",
            data: "id=" + data,
            success: function (data) {
                modal.append(data);
            },
            error: function (msg) {
                modal.append(msg);
            }
        });

    });
})

