	$(document).ready( function() {
		//User Role Manager Layout
		myLayout = $('body').layout({
			west__size:			200
		,	east__size:			300
		,	north__spacing_open:0
			// RESIZE Accordion widget when panes resize
		,	west__onresize:		$.layout.callbacks.resizePaneAccordions
		,	east__onresize:		$.layout.callbacks.resizePaneAccordions
		});	
	});
	
	$(function() {
		//Tree drop down
		$('#userRole')
			.jstree({
				'core' : {
					'data' : {
						"url" : "assets/PHP/userManager/role-read.php",
						"data" : function (node) {
							return { "id" : node.id };
						}
					},
					'check_callback' : function(o, n, p, i, m) {
						if(m && m.dnd && m.pos !== 'i') { return false; }
						if(o === "move_node" || o === "copy_node") {
							if(this.get_node(n).parent === this.get_node(p).id) { return false; }
						}
						return true;
					}
				},				
				'contextmenu' : {
					'items' : function(node) {
						var tmp = $.jstree.defaults.contextmenu.items();
						delete tmp.ccp;
						tmp.create.action = function (data) {
								var inst = $.jstree.reference('#j1_1_anchor'),
									obj = inst.get_node('#j1_1_anchor');
								inst.create_node(obj, {}, "last", function (new_node) {
									setTimeout(function () { inst.edit(new_node); },0);
								});
						};			
						return tmp;
					}
				},
				'unique' : {
					'duplicate' : function (name, counter) {
						return name + ' ' + counter;
					}
				},				
				'plugins' : ['state','contextmenu','unique']
			})
			.on('delete_node.jstree', function (e, data) {
				$.post('assets/PHP/userManager/role-delete.php', { 'id' : data.node.id })
					.fail(function () {
						data.instance.refresh();
					});
			})
			.on('create_node.jstree', function (e, data) {})
			.on('rename_node.jstree', function (e, data) {
				var id = data.node.id;
				if( id.indexOf("j1_") >= 0 ){
					$.post('assets/PHP/userManager/role-write.php', { 'newrole' : data.text })
						.done(function (d) {
							d = JSON.parse(d);
							data.instance.set_id(data.node, d.User_Group_Id);
						})
						.fail(function () {
							alert("Cannot create new role.");
						})
						.always(function () {
							data.instance.refresh();
						});
				} else {
					$.post('assets/PHP/userManager/role-edit.php', { 'id' : id, 'role' : data.text })
						.done(function (id) {
							data.instance.set_id(data.node, id);
						})
						.fail(function () {
							alert("Cannot create new role.");
						})
						.always(function () {
							data.instance.refresh();
						});				
				}
			})
		
		var u = "Student Name"	
		//User list grid view		
	    $("#list").jqGrid({
			url: "assets/PHP/userManager/user-read.php",
			datatype: "json",
			mtype: "GET",
			colNames: ["UserId", u, "User_Group_Id"],
			colModel: [
				{ name: "UserId", hidden: true },
				{ name: "UserName", width: 270, align: 'center', stype: 'text' },
				{ name: "User_Group_Id", hidden: true}
			],
			height: "87%",
			pager: "#pager",
			rowNum: 30,
			sortname: "UserId",
			sortorder: "asc",
			viewrecords: true,
			gridview: true,
			autoencode: true,
			multiselect: true,
			caption: "User List"
		}); 
	
		$(".ui-jqgrid-titlebar").hide();
		$("#pager_right").hide();
		$("#pager_center").width(220);
		$(".ui-pg-input").height(13);
	
		$("#list").navGrid( "#pager", {
			search: true,
			add: false,
			edit: false,
			del: false,
			refresh:true,
			searchoptions: {left: '30%'}
		});
		 var left = $('body').width() * 0.3;
		 $("#search_list").click(function(){
			$("#searchmodfbox_list").css( "left", "30%" );
		 });
		 
	});