<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-us" xml:lang="en-us">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-language" content="en-us" />
<meta http-equiv="imagetoolbar" content="no" />
	<?php echo $this->Html->charset(); ?>
	<title>
		Ranking BrNavies
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>

<body id="phpbb" class="section-ucp ltr">

<div id="header-wrapper">
	<a id="top" name="top" accesskey="t"></a>



    <div id="header" style="width: 100%; margin: 0 auto;">
        <div id="header-left"><div id="header-right">

	<!-- header start -->

	<a href="./index.php" id="logolink"><span>BrNavies</span><img src="http://www.brnavies.com.br/forum/styles/ca_black/imageset/brnavies.gif" width="200" height="173" alt="" title="" /></a>


        <div class="header-clear"></div>
        </div></div>
    </div>
</div>
<div id="content-wrapper">
    <div id="content" style="width: 100%; margin: 0 auto;">
        <div class="topnav">
                    <span>
                <a href="./ucp.php" title="User Control Panel" accesskey="u">User Control Panel</a>
                &nbsp;&bull;&nbsp;
            </span>

            <a href="./faq.php" title="Frequently Asked Questions">FAQ</a>
        </span>
                    <span>
                &nbsp;&bull;&nbsp;
                <a href="./memberlist.php" title="View complete list of members">Members</a>
            </span>
                </div>

	<div id="page-body">

		<div class="navbar navbar-top">
			<ul class="linklist navlinks">
				<li class="icon-home"><a href="./index.php" accesskey="h">Board index</a> </li>

							</ul>
		</div>

    	<a name="start_here"></a>


<h2>Ranking</h2>


	<div style="width: 100%;">

	<div id="cp-menu">
		<div class="cp-mini" id="navigation">
        <div class="block-header"><span><span></span></span></div><div class="block-content"><div class="block-inner">        <ul>
                            <li class="inactive-section"><div><?php echo $this->Html->link('Ranking', '/'); ?></div></li>
                            <li class="inactive-section"><div><?php echo $this->Html->link('Registrar duelo', '/novo'); ?></div></li>

                    </ul>
        <div class="block-clear"></div></div></div><div class="block-footer"><span><span></span></span></div>		</div>


	</div>

	<div id="cp-main" class="ucp-main">
	    <div id="cp-inner">
	    <?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>


	<div class="block-clear"></div></div></div><div class="block-footer"><span><span></span></span></div></div>

</div>
		</div>
	<div class="clear"></div>

</div>
	<br /><br />
<div id="page-footer">
            <div class="navbar">

                <ul class="linklist navlinks">
                    <li class="leftside"><a href="./index.php" accesskey="h">Board index</a></li>
                                            <li class="rightside"><a href="./memberlist.php?mode=leaders">The team</a> | <a href="./ucp.php?mode=delete_cookies">Delete all board cookies</a> | <span class="timezone">All times are UTC - 3 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</span></li>
                </ul>

            </div>
        </div>


            <div id="footer-clear">&nbsp;</div>
        </div><!-- #page-body -->
    </div><!-- #content -->
    <div id="footer" style="width: 100%; margin: 0 auto;"><span><span><span>&nbsp;</span></span></span></div>
</div>


<div>
	<a id="bottom" name="bottom" accesskey="z"></a>
	</div>
</body>
</html>
