<HTML>
<HEAD>
<TITLE>Layout Example</TITLE>
<SCRIPT type="text/javascript" src="assets/js/Wizard_Functions/userManagement/jquery.js"></SCRIPT>
<SCRIPT type="text/javascript" src="assets/js/Wizard_Functions/userManagement/jquery.layout-latest.js"></SCRIPT>
<SCRIPT type="text/javascript">
$(document).ready(function () {
	$('body').layout();
});
</SCRIPT>
</HEAD>
<BODY>
<DIV id="container" class="ui-layout-center">Center
	<P><A href="http://layout.jquery-dev.net/demos.html">Go to the Demos page</A></P>
	<P>* Pane-resizing is disabled because ui.draggable.js is not linked</P>
	<P>* Pane-animation is disabled because ui.effects.js is not linked</P>
</DIV>
<DIV class="ui-layout-east">East</DIV>
<DIV class="ui-layout-west">West</DIV>
</BODY>
</HTML>