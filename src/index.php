<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Archive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        h1,
        footer {
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Website Archive</h1>
        <p>This is a collection of website projects from various stages of my software engineering career.</p>
        <div class="row">
            <div class="col-md-6">
                <h2>Old Local Sites</h2>
                <p>All of the source code included here are from projects that are no longer active and is provided for educational purposes only. The associated assets remain under the ownership of the original companies. Much of the work here is dated.</p>

                <ul>
                    <?php
                    // List each of the projects found in this repo
                    $dir = array_slice(scandir('./'), 2);
                    foreach ($dir as $dir_name) {
                        if (is_dir($dir_name)) {
                            echo "<li><a href=\"$dir_name\">$dir_name</a></li>";
                        }
                    }
                    ?>
                </ul>

            </div>
            <div class="col-md-6">
                <h2>Live Prod Sites</h2>
                <p>There are dozens of additional sites that I can't showcase code for because they are still actively used by the clients I built them for or collaborated with; however, they are linked below:</p>

                <ul>
                    <li><a href="https://blog.justinpaulhammond.com">blog.justinpaulhammond.com</a></li>
                    <li><a href="https://callusfabrication.com">callusfabrication.com</a></li>
                    <li><a href="https://easypost.com">easypost.com</a></li>
                    <li><a href="https://easyposttools.com">easyposttools.com</a></li>
                    <li><a href="https://fixinscontracting.com">fixinscontracting.com</a></li>
                    <li><a href="https://golfrocket.golf">golfrocket.golf</a></li>
                    <li><a href="https://highlinesouthasc.com">highlinesouthasc.com</a></li>
                    <li><a href="https://jonesexcavating.com">jonesexcavating.com</a></li>
                    <li><a href="https://justinpaulhammond.com">justinpaulhammond.com</a></li>
                    <li><a href="https://ncr4.com">ncr4.com</a></li>
                    <li><a href="https://taxsentry.com">taxsentry.com</a></li>
                    <li><s>elgozodejesus.com | rosemarystudios.com</s></li>
                    <li><s>denver-diagnostic.com</s></li>
                    <li><s>flintenterprises.com</s></li>
                    <li><s>foodforeverfoundation.org</s></li>
                    <li><s>mydnapie.com</s></li>
                    <li><s>nozani.com | nozani.cn</s></li>
                    <li><s>segolilysoap.com</s></li>
                    <li><s>surgerydirect.net</s></li>
                    <li><s>tuneuptechnology.com</s></li>
                    <li>And many more...</li>
                </ul>
            </div>
        </div>
        <hr />
        <footer>
            View my current personal website at <a href="https://justinpaulhammond.com">justinpaulhammond.com</a>.
            <br />
            View this project on <a href="https://github.com/justintime50/website-archive">GitHub</a>.
        </footer>
    </div>
</body>

</html>
