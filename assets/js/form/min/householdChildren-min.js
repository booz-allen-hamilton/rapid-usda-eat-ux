$("[data-clone]").click(function(t){t.preventDefault();var e=$(this).attr("data-clone"),a=$(this).attr("data-target");$(e).clone().removeClass("hide").removeAttr("id").appendTo(a)}),$(document).on("click",".remove-item",function(t){t.preventDefault(),$(this).parents(".tableItems").fadeOut(500,function(){$(this).remove()})});