<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Framework - Persistent footer C</title>
	<link rel="stylesheet"  href="../../css/themes/default/jquery.mobile.css" />
	<link rel="stylesheet" href="../_assets/css/jqm-docs.css"/>

	<script src="../js/jquery.js"></script>
	<script src="../../docs/_assets/js/jqm-docs.js"></script>
	<script src="../js/"></script>

</head>
<body>

	<div data-role="page" class="type-interior">

		<div data-role="header" data-theme="f" data-position="fixed" data-id="foo">
		<h1>Albums</h1>
		<a href="../../" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
	</div>

	<div data-role="content" class="jqm-content">

			<ul data-role="listview" data-theme="d" data-dividertheme="e" data-filter="true" data-filter-theme="d" data-filter-placeholder="Search albums..." data-split-icon="gear" data-split-theme="c">
			<li><a href="#">
				<img src="../lists/images/album-bb.jpg" />
				<h3>Broken Bells</h3>
				<p>Broken Bells</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">

				<img src="../lists/images/album-hc.jpg" />
				<h3>Warning</h3>
				<p>Hot Chip</p>

			</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-p.jpg" />
				<h3>Wolfgang Amadeus Phoenix</h3>
				<p>Phoenix</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-ok.jpg" />
				<h3>Of The Blue Colour Of The Sky</h3>
				<p>Ok Go</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-ws.jpg" />
				<h3>Elephant</h3>
				<p>The White Stripes</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-rh.jpg" />
				<h3>Kid A</h3>
				<p>Radiohead</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-xx.jpg" />
				<h3>XX</h3>
				<p>XX</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-mg.jpg" />
				<h3>Congratulations</h3>
				<p>MGMT</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-ag.jpg" />
				<h3>Ashes Grammar</h3>
				<p>A Sunny Day in Glasgow</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>

			<li><a href="index.html">
				<img src="../lists/images/album-k.jpg" />
				<h3>Hot Fuss</h3>
				<p>Killers</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="#">
				<img src="../lists/images/album-af.jpg" />
				<h3>The Suburbs</h3>
				<p>Arcade Fire</p>
				</a><a href="../lists/lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
		</ul>

			<div class="content-secondary">

				<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">

						<h3>More in this section</h3>

						<ul data-role="listview" data-theme="c" data-dividertheme="d">

							<li data-role="list-divider">Toolbars</li>
							<li><a href="docs-bars.html">Toolbar basics</a></li>
							<li><a href="docs-headers.html">Header bars</a></li>
							<li><a href="docs-footers.html">Footer bars</a></li>
							<li><a href="docs-navbar.html">Navbars</a></li>
							<li><a href="bars-fixed.html">Fixed positioning</a></li>
							<li data-theme="a"><a href="footer-persist-a.html">Persistent toolbars</a></li>
							<li><a href="bars-themes.html">Theming toolbars</a></li>

						</ul>
				</div>
			</div>

		</div><!-- /content -->

		<div data-role="footer" data-id="foo1" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="footer-persist-a.html" data-prefetch="true" data-transition="slideup">Info</a></li>
					<li><a href="footer-persist-b.html" data-prefetch="true">Friends</a></li>
					<li><a href="footer-persist-c.html" data-prefetch="true" class="ui-btn-active ui-state-persist">Albums</a></li>
					<li><a href="footer-persist-d.html" data-prefetch="true">Emails</a></li>
				</ul>
			</div><!-- /navbar -->
		</div><!-- /footer -->

		</div><!-- /page -->

		</body>
		</html>
