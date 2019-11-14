

<script>
    $(document).ready(function(){
      $("#searche").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#data tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

//<input type="text" id="searche" placeholder="Recherche ..." />
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12 panel panel-info">
            <h1 class="panel-heading text-center"> Lits Achats d'Articles </h1>
            <hr>
            <div class="account-wall filterable">
                <!--input type="text" class="form-control" id="searche" placeholder="Recherche ..." title="Type in a name"-->
                
                    <table id="data" class="table table-striped table-bordered">
                        <thead>
                            <tr class="filters">
                                <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Fournisseur" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Dépots" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                                <th> <button class="btn btn-warning btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($data): foreach($data as $row):  ?>
                            <tr>
                                <td> <?= $row->id_ligne ?></td>
                                <td> <?= $row->nom_frs  ?></td>
                                <td> <?= $row->depot ?></td>
                                <td> <?= $row->created_ligne ?></td>
                                <td>
                                    <a href="<?= base_url('Achats/detail_achat').'/'.$row->id_ligne ?>" class="btn btn-sm btn-info btn-block" >  Detail</a>
                                </td>
                            </tr>
                            
                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    
                    <span class="clearfix"></span>
     
            </div
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>