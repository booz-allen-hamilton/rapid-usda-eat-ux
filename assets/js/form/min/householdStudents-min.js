$("[data-clone]").click(function(t){t.preventDefault();var e=$(this).attr("data-clone"),a=$(this).attr("data-target");$(e).clone().removeClass("hide").removeAttr("id").appendTo(a),$("#childName-list").find('[data-name="child_first"]').removeAttr("data-name").attr("name","child_first[]").attr("required","true"),$("#childName-list").find('[data-name="child_last"]').removeAttr("data-name").attr("name","child_last[]").attr("required","true"),$("#childName-list").find('[data-name="child_middle"]').removeAttr("data-name").attr("name","child_middle[]")}),$(document).on("click",".remove-item",function(t){t.preventDefault(),$(this).parents(".tableItems").fadeOut(500,function(){$(this).remove()})});