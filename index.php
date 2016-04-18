<html>
    <head>
        <title>
            Website Up or Down
        </title>
        <?php 
        function upordown($url)
        {
            $curl_session=  curl_init($url);
            curl_setopt($curl_session, CURLOPT_NOBODY, TRUE);
            curl_setopt($curl_session, CURLOPT_FOLLOWLOCATION, true);
            curl_exec($curl_session);
            $status=  curl_getinfo($curl_session,CURLINFO_HTTP_CODE);
            return $status;
        }
        echo upordown("http://www.google.com");
        ?>
    </head>
    <body>
        <form action="" method="post">
            <h3>
                Up Or Down::
            </h3><br/>
            <input type="text" name="url"/>
            <input type="submit" />
        </form>
    </body>
</html>