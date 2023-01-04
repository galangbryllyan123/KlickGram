                        <li> <a href="/" class="waves-effect"><i data-icon="P" class="fontello-desktop-1"></i> <span class="hide-menu">Halaman Utama</span></a> </li>
                        <li> <a href="?content=order" class="waves-effect"><i data-icon="P" class="fontello-basket"></i> <span class="hide-menu">Pesan Baru</span></a> </li>
                        <li> <a href="?content=history" class="waves-effect"><i data-icon="P" class="fontello-grocery-store"></i> <span class="hide-menu">Riwayat Pesanan</span></a> </li>
                        <li> <a href="?content=service-list" class="waves-effect"><i data-icon="P" class="fontello-tags"></i> <span class="hide-menu">Daftar Harga</span></a> </li>
                        <li> <a href="?content=add-balance" class="waves-effect"><i data-icon="P" class="fontello-money"></i> <span class="hide-menu">Deposit Saldo</span></a> </li>
                        <li><a href="?content=index" class="waves-effect"><i data-icon="P" class="fontello-note"></i><span class="hide-menu"></i>Konfirmasi Saldo</span></a></li>
                        <li><a href="?content=tiket1"class="waves-effect"><i data-icon="P" class="fontello-mail-1"></i></i><span class="hide-menu"></i>Tiket Komplain</a></li></span></a></li>
                        <li> <a href="?api=api" class="waves-effect"><i data-icon="P" class="fontello-key-1"></i> <span class="hide-menu">Api Dokumentasi</span></a> </li>

<?php if ($level == "Developers") {
$balances = mysql_query("SELECT * FROM request_balance");
$balance = mysql_num_rows($balances);
?>
                        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fontello-cog-1"></i> <span class="hide-menu">Developers Panel<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="?content=tiket1">Tiket</a>
                                </li>
                            <li><a href="?reseller=user_add">Add User</a>
                                </li>
                                <li><a href="konfir/hasil.php">Bukti Balance</a>
                                </li>
                                <li><a href="?reseller=transfer">Transfer Saldo</a>
                                </li>
                                <li><a href="?developers=service">Service Manager</a>
                                </li>
                                <li><a href="?developers=order">Order Manager</a>
                                </li>
                                <li><a href="?developers=user">User Manager</a>
                                </li>
                                <li><a href="?developers=balance">Balance Manager  <td><span class="label label-danger"> <?php echo $balance ?></span></td></a>
                                <li><a href="https://klikgram.id/cron/pending.php">Pending</a>
                                <li><a href="https://klikgram.id/cron/processing.php">Processing</a>
                                <li><a href="https://klikgram.id/cron/inprogress.php">In Progress</a>
                                <li><a href="https://klikgram.id/cron/refund.php">Refund</a>
                                
                                </li>
                        </ul>
                    </li>
<? } else if ($level == "Admin"){ ?>
                        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fontello-cog-1"></i> <span class="hide-menu">Admin Panel<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="?reseller=user_add">Add User</a>
                                </li>
                                <li><a href="?reseller=transfer">Transfer Saldo</a>
                                </li>
                        </ul>
                    </li>
<? } else if ($level == "Reseller"){ ?>
                        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fontello-cog-1"></i> <span class="hide-menu">Reseller Panel<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="?reseller=user_add">Add User</a>
                                </li>
                                <li><a href="?reseller=transfer">Transfer Saldo</a>
                                </li>
                        </ul>
                    </li>
<? } else if ($level == "Agen"){ ?>
                       <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fontello-cog-1"></i> <span class="hide-menu">Agen Panel<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="?reseller=user_add">Add User</a>
                                </li>
                                <li><a href="?reseller=transfer">Transfer Saldo</a>
                                </li>
                        </ul>
                    </li>
<?php } ?>