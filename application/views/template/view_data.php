<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Catat Pemasukan</title>

    <!-- Bootstrap -->
    <?php $this->load->view('layout/includes'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <table class="table">
   
    <tbody>
      <tr>
        <td width="25%">
          <?php $this->load->view('layout/menu_samping'); ?>
        </td>
        <td>
        
          <div class="panel panel-primary">
              <div class="panel-heading"><h1><center><b>Catatan Keuangan Terakhir</b></center></h1></div>
              <div class="panel-body">
      <!--===========form login=================================-->
                <ul class="nav nav-tabs nav-tab">
                  <li role="presentation" class="active"><a href="<?=base_url()?>index.php/keuangan/">Pemasukan</a></li>
                  <li role="presentation"><a href="<?=base_url()?>index.php/keuangan2/">Pengeluaran</a></li>
                </ul>
                <br>

                <table id="dataTable" class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr bgcolor="grey">
                      <th>Waktu</th>
                      <th>Nominal</th>
                      <th>Kategori</th>
                      <th>Deskripsi</th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($select as $datavar):?>

                    <tr>
                      <td><?=$datavar->waktu?></td>
                      <td>Rp<?=number_format($datavar->nominal);?>.00-</td>
                      <td><?=$datavar->kategori?></td>
                      <td><?=$datavar->deskripsi?></td>
                      <td align="center">
                        <?=anchor('ctrl/update/'.$datavar->id_transaksi, '<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['class'=>'btn btn-warning']);?>
                        <?=anchor('ctrl/delete/'.$datavar->id_transaksi, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['class'=>'btn btn-danger','onclick'=>'return confirm(\'Apakah Anda Yakin Akan di Hapus..??\')']
                                  );?>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
                 <script type="text/javascript" charset="utf-8">
                    $(document).ready(function() {
                    $('#dataTable').dataTable( 
                    {
                     "aaSorting": [[0, 'desc']]
                       } );
                      } );
                </script>
          <!--===========form login=================================-->
                  </div>
              </div>
       
          </div>
            </td>
          </tr>
        </tbody>
      </table>

  </body>
  </html>