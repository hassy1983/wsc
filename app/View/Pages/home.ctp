<section>
    <header>
        <h1 class="sect-head bg-red">Pick up</h1>
    </header>
    <div class="row">
        <ul class="thumbnails bootstrap-examples">
            <?php foreach($services as $service):?>
            <li class="span2">
                <?php echo $this->Html->link(
                    $this->Html->image($service['Service']['logo_url'], array('alt' => $service['Service']['name'], 'align' => 'center', 'class' => 'logo')),
                    array('controller' => 'services', 'action' => 'view', $service['Service']['id']),
                    array('class' => 'thumbnail', 'escape' => false));?>
                <h4><?php echo $service['Service']['name'];?></h4>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>
<section>
    <header>
        <h1 class="sect-head bg-blue">Most viewed</h1>
    </header>
    <div class="row">
        <ul class="thumbnails bootstrap-examples">
            <?php foreach($services as $service):?>
            <li class="span2">
                <?php echo $this->Html->link(
                    $this->Html->image($service['Service']['logo_url'], array('alt' => $service['Service']['name'], 'align' => 'center', 'class' => 'logo')),
                    array('controller' => 'services', 'action' => 'view', $service['Service']['id']),
                    array('class' => 'thumbnail', 'escape' => false));?>
                <h4><?php echo $service['Service']['name'];?></h4>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>
<section>
    <header>
        <h1 class="sect-head bg-green">tags</h1>
    </header>
    <div class="row">
            <?php foreach($tags as $tag):?>
                <?php echo $this->Html->link(
                    $this->Html->tag('span', h($tag['Tag']['name'])),
                    array('controller' => 'tags', 'action' => 'view', $tag['Tag']['id']),
                    array('escape' => false, 'class' => 'label label-info text20'));?>
            <?php endforeach;?>
    </div>
</section>

      <footer class="footer">
        <div class="row">
          <div class="span5 offset1">
            <h1>About</h1>
            <p>世界に散らばるWebサービスを集めるサイトです。便利なサービスを発見したり、オススメしたり出来るようになります。</p>
            <h4>&copy; Web Service Catalog 2012</h4>
          </div>
          <div class="span5">
            <h1>Contact us</h1>
            <p>hassy1983@gmail.com</p>
          </div>
        </div>
      </footer>