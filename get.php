<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta name="keywords" content="uzbl, browser, open source"/>
	<meta name="description" content="Uzbl is a lightweight webkit browser following the UNIX philosophy - to do one thing and do it well."/>
	<meta name="author" content="Michael Walker"/>
	<meta name="robots" content="FOLLOW,INDEX"/>

	<title>Get Uzbl</title>

	<link rel="stylesheet" href="/template/style.css" type="text/css" />
	<!--<link rel="shortcut icon" type="application/ico" href="/favicon.ico" />
	<base href="http://www.uzbl.org/"/>-->
  </head>

  <body>
    <div id="page">
      <div id="header">
        <h1>Uzbl</h1>
        <p>The uzbl browser.</p>
      </div>
      
      <div id="navigation">
        <ul>
          <li id="selected"><a href="/get.php">Get</a></li>
          <li><a href="/contribute.php">Contribute</a></li>
          <li><a href="/">Home</a></li>
        </ul>
      </div>
      
      <div id="main">
        <h2>Arch Users</h2>
        <p>If you use Arch Linux (our distro of choice, and the distro we use for testing), you can find a PKGBUILD on the AUR <a href="http://aur.archlinux.org/packages.php?ID=25972">here</a>, which installs the latest from the master branch. You can edit the PKGBUILD to change to any other branch you want.</p>

        <h2>Everyone Else</h2>
        <p>If you don't use Arch, or if you do and don't want to use the PKGBUILD for some strange reason, you can use the following lines in your terminal (make sure you have git, Gtk2, and libwebkit installed):</p>
        <pre><code>$ git clone git://github.com/Dieterbe/uzbl.git
$ cd uzbl
$ make</code></pre>
        <p>You will then have an executable file 'uzbl' in the current directory. You can configure it by editing the file 'sampleconfig' which, for now, needs to be in the same directory as the executable.</p>

        <h3>Branches</h3>
        <p>The branches are listed on the home page, but just so you don't have to go back to have a look, here they are again:</p>
        <div id="branches">
          <ul>
            <li>Dieterbe
              <ol>
                <li><a href="http://github.com/Dieterbe/uzbl/tree/master">master</a></li>
                <li><a href="http://github.com/Dieterbe/uzbl/tree/experimental">experimental</a></li>
            </ol></li>
            <li>dusanx
              <ol>
                <li><a href="http://github.com/dusanx/uzbl/tree/master">master</a></li>
            </ol></li>
            <li>Barrucadu
              <ol>
                <li><a href="http://github.com/Barrucadu/uzbl/tree/experimental">experimental</a></li>
            </ol></li>
          </ul>
        </div>
        
        <h3>Note</h3>
        <p>As we do all of our development and testing on Arch, you may encounter bugs we can't reproduce easily. In that case, make sure to provide as much information as you can.</p>
      </div>
    </div>
  </body>
</html>
