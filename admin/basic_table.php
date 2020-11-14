<?php include 'layout/hedear.php'; ?>
<?php include 'core/news.php'; ?>
<section id="main-content">
<section class="wrapper">
<div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th>Yangilik</th>
                    <th class="col-md-6 col-xs-6 col-lg-6">Qisqacha</th>
                    <th>Ko'rishlar soni</th>
                    <!-- <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_calendar"></i> Date</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i> City</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>-->
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($items as $item): ?> 
                  <tr>
                    <td><?=$item['news']?></td>
                    <td><?=$item['short_m']?></td>
                    <td><?=$item['view']?></td>
                    <td>
                      <div class="btn-group">
                        <!-- <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a> -->
                        <a class="btn btn-success" href="core/update.php?id=<?=$item['id']?>"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="core/delet.php?id=<?=$item['id']?>"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            <div class="text-center">
              <thead>
                 <?php for($index = 1; $index <= $pages; $index++): ?>
                 <ul class="pagination">
                  <li><a href="basic_table.php?page=<?=$index?>"><?=$index?> </a></li>
                 </ul>
                 <?php endfor; ?>
              </thead>
            </div>
            </section>
          </div>
        </div>
     </section>
    </section>


<?php include 'layout/fuoter.php'; ?>