 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-bag"></i>
               </div>
               <div class="header-title">
                  <h1>Report Stok</h1>
                  <small>Order & Stock</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  
                 


                  <div class="col-sm-12">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Informasi Barang</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Kode Produk</th>
                                       <th>Nama Produk</th>
                                       <th>Ukuran</th>
                                       <th>Stok</th>
                                       <th>Order</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                       include "configs.php"; 
                                       $query11 ="SELECT * FROM produk ";
                                       $no=1;
                                       $querytampil11=mysqli_query($db,$query11);
                                       while($data11=mysqli_fetch_array($querytampil11)){  

                                     $query2 = "SELECT qty FROM sales_order WHERE  produk='$data11[id_produk]'  ";
                                      $querytampil2=mysqli_query($db,$query2);
                                      $hitung=mysqli_num_rows($querytampil2);
                                   
                        
                                    ?>
                                 
                                    <tr>
                                       <td><?php echo $data11 ['kode_product'];?></td>
                                       <td><?php echo $data11 ['nama_produk'];?></td>
                                       <td> <?php echo $data11 ['ukuran'];?></td>
                                       <td> <?php echo $data11 ['stok'];?></td>
                                       <td> <?php echo $hitung;?></td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>