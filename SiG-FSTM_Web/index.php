<?php
session_start();

$username = '';
$logoutmenu = '';
$loginmenu = '';
$register = '';

if(isset($_SESSION['username'])){
    $logoutmenu = '<a class="mdl-navigation__link" href="getout.php">Logout</a>';
    $username = '<h1>Hello '.$_SESSION['username'].'</h1>';
} else {
    $loginmenu = '<a class="mdl-navigation__link" href="#login">Login</a>';
    $register = '<div id="login" class="login sec">
                        <h1>Login</h1>
                        <div class=" card mdl-card mdl-shadow--2dp six">
                            <form action="getin.php" method="POST">
                                <div class="row">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label twelve columns">
                                        <input name="username" class="mdl-textfield__input" type="text" id="sample2">
                                        <label class="mdl-textfield__label" for="sample2">username</label>
                                        <!--<span class="mdl-textfield__error">Input is not a number!</span>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label twelve columns">
                                        <input name="passwd" class="mdl-textfield__input" type="password" id="sample2">
                                        <label class="mdl-textfield__label" for="sample2">password</label>
                                        <!--<span class="mdl-textfield__error">enter properly</span>-->
                                    </div>
                                </div>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="submit">
                                    Login <i class="material-icons">send</i>
                                </button>
                                <a href="register.php">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="button">
                                    Register <i class="material-icons">send</i>
                                </button>
                                </a>
                            </form>
                        </div>
                    </div>';
}
?>
<!DOCTYPE html>
<html>

<?php 
include 'inc/header.php';
?>

<body>
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--scroll">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">SIG FSTM</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer">
                </div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <?php  echo $loginmenu; ?>
                    <a class="mdl-navigation__link" href="#forum">Forum</a>
                    <a class="mdl-navigation__link" href="#categories">Categories</a>
                    <a class="mdl-navigation__link" href="#activity">Activity</a>
                    <a class="mdl-navigation__link" href="#events">Events</a>
                    <?php  echo $logoutmenu; ?>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">SIG FSTM</span>
            <nav class="mdl-navigation">
                <?php  echo $loginmenu; ?>
                <a class="mdl-navigation__link" href="#forum">Forum</a>
                <a class="mdl-navigation__link" href="#categories">Categories</a>
                <a class="mdl-navigation__link" href="#activity">Activity</a>
                <a class="mdl-navigation__link" href="#events">Events</a>
                <?php  echo $logoutmenu; ?>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="intro-sig container">
                <?php echo $username; ?>
                <h1>Welcome to SIG FSTM</h1>
                <h5>Special Interest Group Organized by FSTM Students</h5>
            </div>
            <div class="introducing">
                <div class="container">
                <?php echo $register; ?>
                    <div id="forum" class="sig-forum sec">
                        <h1>SIG Forum</h1>
                    </div>
                    <div id="categories" class="sec sig-categories">
                        <h1>SIG Categories</h1>
                        <div class="sig-cat mdl-card twelve columns">
                            <div class="row">
                                <div class="three columns">
                                    <h4>Open Source</h4>
                                </div>
                                <div class="nine columns">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas eleifend turpis
                                        at fermentum. Cras id ornare lorem. Ut nibh tortor, vestibulum et est in, ullamcorper
                                        rutrum metus. Cras tortor ligula, maximus eu convallis in, elementum vel arcu. Maecenas
                                        et odio sed ligula tempor interdum et in erat. Aenean efficitur odio non lacus tempus,
                                        accumsan dapibus quam semper. Nullam felis est, eleifend eu magna vitae, placerat
                                        vehicula magna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sig-cat mdl-card twelve columns">
                            <div class="row">
                                <div class="three columns">
                                    <h4>Web/Mobile Developer</h4>
                                </div>
                                <div class="nine columns">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas eleifend turpis
                                        at fermentum. Cras id ornare lorem. Ut nibh tortor, vestibulum et est in, ullamcorper
                                        rutrum metus. Cras tortor ligula, maximus eu convallis in, elementum vel arcu. Maecenas
                                        et odio sed ligula tempor interdum et in erat. Aenean efficitur odio non lacus tempus,
                                        accumsan dapibus quam semper. Nullam felis est, eleifend eu magna vitae, placerat
                                        vehicula magna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sig-cat mdl-card twelve columns">
                            <div class="row">
                                <div class="three columns">
                                    <h4>Information Security</h4>
                                </div>
                                <div class="nine columns">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas eleifend turpis
                                        at fermentum. Cras id ornare lorem. Ut nibh tortor, vestibulum et est in, ullamcorper
                                        rutrum metus. Cras tortor ligula, maximus eu convallis in, elementum vel arcu. Maecenas
                                        et odio sed ligula tempor interdum et in erat. Aenean efficitur odio non lacus tempus,
                                        accumsan dapibus quam semper. Nullam felis est, eleifend eu magna vitae, placerat
                                        vehicula magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="activity" class="sec sig-activity">
                        <h1>Recent Activity</h1>
                        <div class="row">
                            <div class="sig-act mdl-card mdl-shadow--2dp four columns">
                                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title mdl-card--expand" style="background:url('https://getmdl.io/assets/demos/dog.png') bottom right 15% no-repeat #46B6AC">
                                        <h2 class="mdl-card__title-text">Update</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                                    </div>
                                </div>
                            </div>
                            <div class="sig-act mdl-card mdl-shadow--2dp four columns">
                                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title mdl-card--expand" style="background:url('https://getmdl.io/assets/demos/dog.png') bottom right 15% no-repeat #46B6AC">
                                        <h2 class="mdl-card__title-text">Update</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                                    </div>
                                </div>
                            </div>
                            <div class="sig-act mdl-card mdl-shadow--2dp four columns">
                                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title mdl-card--expand" style="background:url('https://getmdl.io/assets/demos/dog.png') bottom right 15% no-repeat #46B6AC">
                                        <h2 class="mdl-card__title-text">Update</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="events" class="sig-events sec">
                        <h1>Upcomming events</h1>
                        <div class="row">
                            <div class="mdl-card nine columns mdl-shadow--2dp sec">
                                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=6a77i7dkgkgn6aa2rl7v2inp3k%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Asia%2FKuala_Lumpur"
                                    style="border-width:0" height="300" frameborder="0" scrolling="yes"></iframe>
                            </div>
                            <div class="mdl-card three columns mdl-shadow--2dp sec">
                                <a class="twitter-timeline" href="https://twitter.com/sig_fstm">Tweets by sig_fstm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">
                        SIG FSTM Copyright 2014 -
                        <?php echo date("Y");?>
                    </div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy and Terms</a></li>
                        <li><a href="#">User Agreement</a></li>
                    </ul>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <button class="mdl-mini-footer__social-btn">1</button>
                    <button class="mdl-mini-footer__social-btn">2</button>
                    <button class="mdl-mini-footer__social-btn">3</button>
                </div>
            </footer>
        </main>
    </div>
    <div class="global-overlay" style="opacity: 1; transform: translateX(100%);">
        <canvas id="constellationel"></canvas>
    </div>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="js/Stats.js"></script>
    <script src="js/zepto.min.js"></script>
    <script defer src="js/material.min.js"></script>
    <script src="js/sig.js">
    </script>
</body>

</html>