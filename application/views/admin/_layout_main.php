<? $this->load->view('admin/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="<?=site_url('admin/dashboard')?>"><?=$meta_title?></a>
            <ul class="nav">
                <li class="active"><a href="<?=site_url('admin/dashboard')?>">Home</a></li>
                <li><?=anchor('admin/page', 'Pages')?></li>
                <li><?=anchor('admin/user', 'Users')?></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Main column -->
            <div class="span9">
                <section>
                    <h2>Page name</h2>
                </section>
            </div>

            <!-- Sidebar -->
            <div class="span3">
                <section>
                    <?=mailto('test@test.ru', '<i class="icon-user"></i> test@test.ru')?><br/>
                    <?=anchor('admin/user/logout', '<i class="icon-off"></i> Logout')?>
                </section>
            </div>
        </div>
    </div>
<? $this->load->view('admin/components/page_tail'); ?>