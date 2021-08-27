<!DOCTYPE html>
<html lang="en">
<head>
    <title>Website Archive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        h1, footer {
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Website Archive</h1>

        <p>This is a monolithic repo of some of my past website projects from early in my software engineering career. As such, many are dated and are not indicative of my current skill as a web developer.</p>
        <p>All of the source code included here are from projects that are no longer active and is provided for educational purposes only. The associated assets remain under the ownership of the original companies.</p>

        <ul>
            <?php
                $dir = array_slice(scandir('./'), 2);
                foreach ($dir as $dir_name) {
                    if (is_dir($dir_name)) {
                        echo "<li><a href=\"$dir_name\">$dir_name</a></li>";
                    }
                }
            ?>
        </ul>

        <hr />
        <p>There are dozens of additional sites that I can't showcase code for here because they are still actively used by the clients I built them for or worked on. I will however link them below:</p>

        <ul>
            <li><a href="https://tuneuptechnology.com">tuneuptechnology.com</a></li>
            <li><a href="https://easypost.com">easypost.com</a></li>
            <li><a href="https://ncr4.com">ncr4.com</a></li>
            <li><a href="https://surgerydirect.net">surgerydirect.net</a></li>
            <li><a href="https://denver-diagnostic.com">denver-diagnostic.com</a></li>
            <li><a href="https://taxsentry.com">taxsentry.com</a></li>
            <li><a href="https://jonesexcavating.com">jonesexcavating.com</a></li>
            <li><a href="https://foodforeverfoundation.org">foodforeverfoundation.org</a></li>
            <li><a href="https://highlinesouthasc.com">highlinesouthasc.com</a></li>
            <li><a href="https://fixinscontracting.com">fixinscontracting.com</a></li>
            <li><a href="https://elgozodejesus.com">elgozodejesus.com</a> | <a href="https://rosemarystudios.com">rosemarystudios.com</a></li>
            <li><s>nozani.com</s></li>
            <li><s>nozani.cn</s></li>
            <li><s>mydnapie.com</s></li>
            <li><s>segolilysoap.com</s></li>
            <li><s>flintenterprises.com</s></li>
            <li>And many more...</li>
        </ul>

        <hr />
        <footer>
            See my current personal website at <a href="https://justinpaulhammond.com">justinpaulhammond.com</a>.
            <br />
            See this project on GitHub at <a href="https://github.com/justintime50/website-archive">github.com/justintime50/website-archive</a>.
        </footer>
    </div>
</body>
</html>
