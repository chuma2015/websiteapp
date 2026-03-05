

$(document).ready(function() {
//start selector function
	$('#category') .change(function() {
		var value = $(this) .val();
			if(value == 0){
				$('#sub_cat') .hide();
			} else {
				$('#sub_cat') .show();
				$.post('public_web/admin/sub_category.php', {value: value}, function(data){
					$('#sub_cat').html(data);
				});
			}
	});
	$('#usertype') .change(function() {
		var value = $(this) .val();
			if(value == 0){
				$('#sub_cat') .hide();
			} else {
				$('#sub_cat') .show();
				$.post('public_web/admin/sub_category.php', {value: value}, function(data){
					$('#sub_cat').html(data);
				});
			}
	});
	$('#countryCode') .change(function() {
		var value = $(this) .val();
			if(value == 0){
				$('#sub_cat') .hide();
			} else {
				$('#sub_cat') .show();
				$.post('$rootDirection', {value: value}, function(data){
					$('#sub_cat').html(data);
				});
			}
	});
	$('#userType') .change(function() {
		var value = $(this) .val();
			if(value == 0){
				$('#sub_cat') .hide();
			} else {
				$('#sub_cat') .show();
				$.post('$rootDirection', {value: value}, function(data){
					$('#sub_cat').html(data);
				});
			}
	});
	$('#position') .change(function() {
		var value = $(this) .val();
			if(value == 0){
				$('#sub_cat') .hide();
			} else {
				$('#sub_cat') .show();
				$.post('$rootDirection', {value: value}, function(data){
					$('#sub_cat').html(data);
				});
			}
	});
//end selector

//start filter search

	//default each row to visible
	$('tbody tr').addClass('visible');
	
	$('#search').show();
	
	$('#filter').keyup(function(event) {
		//if esc is pressed or nothing is entered
    if (event.keyCode == 27 || $(this).val() == '') {
			//if esc is pressed we want to clear the value of search box
			$(this).val('');
			
			//we want each row to be visible because if nothing
			//is entered then all rows are matched.
      $('tbody tr').removeClass('visible').show().addClass('visible');
    }

		//if there is text, lets filter
		else {
      filter('tbody tr', $(this).val());
    }

		//reapply zebra rows
		$('.visible td').removeClass('odd');
		zebraRows('.visible:even td', 'odd');
	});
	
	//grab all header rows
	$('thead th').each(function(column) {
		$(this).addClass('sortable')
					.click(function(){
						var findSortKey = function($cell) {
							return $cell.find('.sort-key').text().toUpperCase() + ' ' + $cell.text().toUpperCase();
						};
						
						var sortDirection = $(this).is('.sorted-asc') ? -1 : 1;
						
						//step back up the tree and get the rows with data
						//for sorting
						var $rows		= $(this).parent()
																.parent()
																.parent()
																.find('tbody tr')
																.get();
						
						//loop through all the rows and find 
						$.each($rows, function(index, row) {
							row.sortKey = findSortKey($(row).children('td').eq(column));
						});
						
						//compare and sort the rows alphabetically
						$rows.sort(function(a, b) {
							if (a.sortKey < b.sortKey) return -sortDirection;
							if (a.sortKey > b.sortKey) return sortDirection;
							return 0;
						});
						
						//add the rows in the correct order to the bottom of the table
						$.each($rows, function(index, row) {
							$('tbody').append(row);
							row.sortKey = null;
						});
						
						//identify the column sort order
						$('th').removeClass('sorted-asc sorted-desc');
						var $sortHead = $('th').filter(':nth-child(' + (column + 1) + ')');
						sortDirection == 1 ? $sortHead.addClass('sorted-asc') : $sortHead.addClass('sorted-desc');
						
						//identify the column to be sorted by
						$('td').removeClass('sorted')
									.filter(':nth-child(' + (column + 1) + ')')
									.addClass('sorted');
						
						$('.visible td').removeClass('odd');
						zebraRows('.visible:even td', 'odd');
					});
	});
//end filter search
});


//start filter function
	//used to apply alternating row styles
	function zebraRows(selector, className)
	{
		$(selector).removeClass(className)
								.addClass(className);
	}
	//filter results based on query
	function filter(selector, query) {
		query	=	$.trim(query); //trim white space
	  query = query.replace(/ /gi, '|'); //add OR for regex
	  
	  $(selector).each(function() {
		($(this).text().search(new RegExp(query, "i")) < 0) ? $(this).hide().removeClass('visible') : $(this).show().addClass('visible');
	  });
	}
//end filter function





//start delete function
$(function() {
	$(".delbutton").click(function(){
	//Save the link in a variable called element
	var element = $(this);

	//Find the id of the link that was clicked
	var action_id = element.attr("id");
	actionID = action_id.substring(2,(action_id.length));
	var className = "";
	switch(action_id.substring(0,2)){
		case "ns":
			className = "News";
		break;
		case "rd":
			className = "Resource";
		break;
		case "rf":
			className = "Report";
		break;
		case "dd":
			className = "Research";
		break;
		case "dj":
			className = "Journals";
		break;
		case "gd":
			className = "Gallery";
		break;
		}
	//Built a url to send
	var info = 'id=' + action_id;
		 if(confirm("Are you Sure you want to delete this info? Click OK to Approve or CANCEL to undo your Action!")) {
			 $.ajax({
			   type: "GET",
			   url: "required/pcgEngine.php",
			   data: "action=del&className=" + className + "&id="+actionID,
			   success: function(){
			   
			   }
			 });
				 $(this).parents(".record")
				.animate({ backgroundColor: "#A0D468" }, "slow")
				.animate({ backgroundColor: "#FC6E51" }, "slow")
				.animate({ opacity: "hide" }, "slow");
		 }
	return false;
	});
	

});

//start reset function
$(function() {
	$(".rbutton").click(function(){
	//Save the link in a variable called element
	var element = $(this);

	//Find the id of the link that was clicked
	var action_id = element.attr("id");
	actionID = action_id.substring(2,(action_id.length));
	var className = "";
	switch(action_id.substring(0,2)){
		case "us":
			className = "User";
		break;
		}
	//Built a url to send
	var info = 'id=' + action_id;
		 if(confirm("Are you Sure you want to Reset Password for this User? Click OK to Approve or CANCEL to undo your Action!")) {
			 $.ajax({
			   type: "GET",
			   url: "required/pcgEngine.php",
			   data: "action=res&className=" + className + "&id="+actionID,
			   success: function(){
			   
			   }
			 });
				 $(this).parents(".record").animate({ backgroundColor: "#f0ad4e" }, "slow")
				.animate({ backgroundColor: "#5cb85c" }, "slow")
				.animate({ opacity: "hide" }, "slow")
				.animate({ backgroundColor: "#fff" }, "slow")
				.animate({ opacity: "show" }, "slow");
		 }
	return false;
	});
});

//start edit function
$(function() {
	$(".editbutton").click(function(){
	//Save the link in a variable called element
	var element = $(this);

	//Find the id of the link that was clicked
	var action_id = element.attr("id");
	actionID = action_id.substring(2,(action_id.length));
	var className = "";
	switch(action_id.substring(0,2)){
		case "ne":
			className = "News";
		break;
		case "re":
			className = "Resource";
		break;
		case "rt":
			className = "Report";
		break;
		case "ed":
			className = "Research";
		break;
		case "ej":
			className = "Journals";
		break;
		case "ge":
			className = "Gallery";
		break;
		}
	//Built a url to send
	var info = 'id=' + action_id;
		//$("#editRow .modal-body").html("<p align='center'><img src='images/logo.png'/></p>");
			 $.ajax({
			   type: "GET",
			   url: "required/pcgEngine.php",
			   data: "action=edit&className=" + className + "&id="+actionID,
			   success: function(result){
				$("#editRow .modal-body").html(result);
			   }
			 });
		
	});
});

//start edit function
$(function() {
	$("#editforms").click(function(){
		
	});
});

//start fadeOut for success msg
$(document).ready(function() {
	$('#pacsal-fadeout').delay(3500).fadeOut();
});
//end fadeOut

