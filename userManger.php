<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/layout-default.css">
	<link rel="stylesheet" type="text/css" href="assets/css/UserManager.css">
	<link rel="stylesheet" type="text/css" href="assets/css/tree/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grid/redmond/jquery-ui-custom.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/grid/ui.jqgrid.css" />
	<!--scripts included for this page-->
	<script type="text/javascript" src="assets/js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/UserManager.js"></script>
	<!--jQuery Layout-->
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/jquery.layout.js"></script>
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/jquery.layout.resizePaneAccordions.js"></script>
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/debug.js"></script>
	<!--jsTree-->
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/jstree.js"></script>
	<!--Grid view-->
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/grid.locale-en.js" ></script>
	<script type="text/javascript" src="assets/js/Wizard_Functions/userManagement/jquery.jqGrid.src.js" ></script>

</head>
<body>

<div class="ui-layout-north" style="display: none;">
<h3 class="ui-widget-header">Permission Manager</h3>
</div>

<div class="ui-layout-center" style="display: none;"> 
	<h3 class="ui-widget-header">Permissions</h3>
	<div class="ui-layout-content ui-widget-content">
	
This is the place for permissions

	</div>
</div>

<div class="ui-layout-west" style="display: block; width: 200px;">
<h4 class="ui-widget-header">User Roles</h4>
<div id="userRole"></div>
</div>

<div class="ui-layout-east" style="display: none;">
	<h3 class="ui-widget-header" >User List</h3>
	<div class="ui-layout-content" id="userList" >
		<table id="list"></table> 
		<div id="pager"></div> 
	</div>
</div>

</body>
</html> 