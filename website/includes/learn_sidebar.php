<style>
    /* sidebar */
    .bs-docs-sidebar {
        padding-left: 20px;
        margin-bottom: 20px;
    }

    .bs-docs-sidebar .nav>li>span {
        color: #63ceca;
    }

    .bs-docs-sidebar .nav>li>span,
    .bs-docs-sidebar .nav>li>a { border-left: 2px solid transparent;
        padding: 4px 20px;
        font-size: 18px;
        font-weight: 400;
    }

    /* nested links */
    .bs-docs-sidebar .nav .nav>li>a {
        padding-top: 1px;
        padding-bottom: 1px;
        padding-left: 30px;
        font-size: 12px;
    }

    /* active & hover links */
    .bs-docs-sidebar .nav>.active>a, 
    .bs-docs-sidebar .nav>li>a:hover, 
    .bs-docs-sidebar .nav>li>a:focus {
        text-decoration: none;          
        background-color: transparent;  
    }

    /* nested active links */
    .bs-docs-sidebar .nav .nav>.active>a, 
    .bs-docs-sidebar .nav .nav>.active:hover>a,
    .bs-docs-sidebar .nav .nav>.active:focus>a {
        font-weight: 700;
        border-left-color: #63ceca; 
        font-weight: 500;
    }

</style>

<nav class="col-sm-3 bs-docs-sidebar">
    <ul id="sidebar" class="nav nav-stacked">
        <li class="">
            <span>The Basics</span>
            <ul class="nav nav-stacked">
                <li id="basics_quickstart">
                    <a href="basics_quickstart.php">Getting Started</a>
                </li>
                <li id="basics_intro_halite">
                    <a href="basics_intro_halite.php">Introducing Halite</a>
                </li>
                <li id="basics_improve_random">
                    <a href="basics_improve_random.php">Improving the Random Bot</a>
                </li>
                <li id="basics_faqs">
                    <a href="basics_faqs.php">FAQs</a>
                </li>
            </ul>
        </li>
        <li class="">
            <span>Guides</span>
            <ul class="nav nav-stacked">
                <li id="guides_development">
                    <a href="guides_development.php">Bot Development</a>
                </li>
                <li id="guides_libraries">
                    <a href="guides_libraries.php">Using 3rd Party Libraries</a>
                </li>
                <li id="guides_strategy">
                    <a href="guides_strategy.php">Strategy Considerations</a>
                </li>
            </ul>
        </li>
        <li class="">
            <span>Rules</span>
            <ul class="nav nav-stacked">
                <li id="rules_game">
                    <a href="rules_game.php">Game Rules</a>
                </li>
                <li id="rules_contest">
                    <a href="rules_contest.php">Contest Rules</a>
                </li>
            </ul>
        </li>
        <li class="">
            <span>Advanced</span>
            <ul class="nav nav-stacked">
                <li id="advanced_command_line">
                    <a href="advanced_command_line.php">Environment Command Reference</a>
                </li>
                <li id="advanced_replay_file">
                    <a href="advanced_replay_file.php">Replay File Reference</a>
                </li>
                <li id="advanced_game_server">
                    <a href="advanced_game_server.php">Game Server Reference</a>
                </li>
                <li id="advanced_writing_sp">
                    <a href="advanced_writing_sp.php">Writing Your Own Starter Package</a>
                </li>
            </ul>
        </li>
    </ul>
    <hr>
    <p style="line-height: 1.5em; font-size: 13px;">You can <a id="githubLink" href="">edit this content on GitHub</a> and send us a pull request!</p>
</nav>

<script>
    var fileName = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    document.getElementById("githubLink").href = "https://github.com/HaliteChallenge/Halite/blob/master/website/"+fileName;

    var name = fileName.split(".")[0];
    document.getElementById(name).className = "active";
</script>
