<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{$title}</title>
        <link rel="stylesheet" type="text/css" href="ressource/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="ressource/css/style.css">
        <script type="text/javascript" src="ressource/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="ressource/jquery-2.2.1.js"></script>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    {foreach from=$liens key=k item=lien}
                        <div class="col-md-4 position_logo_site ">
                            <a href={$lien} target="_blank">
                                <img src={$images[$k]} class="img-circle img_site_resize">
                            </a>
                        </div>
                    {/foreach}
                </td>
            </tr>
        </table>
    </body>
</html>