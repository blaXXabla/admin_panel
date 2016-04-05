
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{$title}</title>
        <link rel="stylesheet" type="text/css" href="ressource/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="ressource/css/style.css">
        <script type="text/javascript" src="ressource/jquery-2.2.1.js"></script>
        <script type="text/javascript" src="ressource/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="ressource/javascript/admin.js"></script>
    </head>
    <body class="col-md-12">
        <select id="site_select" name="site_select" class="form-control col-md-2">
            <option></option>
            {foreach from=$noms key=k item=name}
            <option value={$k}>{$name}</option>
            {/foreach}
        </select>

        <!-- Button trigger modal -->
        <button id="boutton_modif" type="button" class="coucou btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Modifier
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modifications</h4>
                    </div>
                    <div class="modal-body">
                        <div class="test">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>