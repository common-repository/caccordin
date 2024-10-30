jQuery(document).ready(function($){
		$("div.caccordion_title").each(function(){$(this).append('<div class="caccordion_arrow"></div>');});
jQuery(".caccordion_title").click(function()
			{
				var index = $(".caccordion_title").index(this);
				$(".caccordion_title").children(".caccordion_arrow").removeClass("caccordion_arrow_side");
				$(".caccordion_title").next(".caccordion_content").slideUp(300);
				if($(".caccordion_content").eq(index).css("display") == "block")	
					   {
			
							$(".caccordion_title").next(".caccordion_content").eq(index).slideUp(300);
							$(this).children(".caccordion_arrow").removeClass("caccordion_arrow_side");
					   }
				else
					   {
							$(".caccordion_title").next(".caccordion_content").eq(index).slideDown(300);
							$(this).children(".caccordion_arrow").addClass("caccordion_arrow_side");
							
					   }
});
																});