<div class="title-main"><span><?=$rowDetail['name'.$lang]?></span></div>
<div class="time-main"><i class="fas fa-calendar-week"></i><span><?=ngaydang?>:
        <?=date("d/m/Y h:i A",$rowDetail['date_created'])?></span></div>
<?php if(!empty($rowDetail['content'.$lang])) { ?>
<div class="danhmuc-dv-list">
    <?php foreach ($dichvunb as $v) { ?>
    <div class="danhmuc-dv-item">
        <div class="dichvu__in  ">
            <div class="img-dichvu-in scale-img">
                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '70x70x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
            </div>
            <div class=" text-dichvu-in flex-wrap">
                <div class="dichvu-title-in text-decoration-none text-split-2 transition" href="<?= $v[$sluglang] ?>"
                    title="<?= $v['name' . $lang] ?>">
                    <?= $v['name' . $lang] ?></div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<div class="content-main w-clear"><?=htmlspecialchars_decode($rowDetail['content'.$lang])?></div>
<div class="share">
    <b><?=chiase?>:</b>
    <div class="social-plugin w-clear">
        <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
            ?>
    </div>
</div>
<?php } else { ?>
<div class="alert alert-warning w-100" role="alert">
    <strong><?=noidungdangcapnhat?></strong>
</div>
<?php } ?>
<?php if(!empty($news)) { ?>
<div class="share othernews mb-3">
    <b><?=baivietkhac?>:</b>
    <ul class="list-news-other">
        <?php foreach($news as $k => $v) { ?>
        <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?> - <?=date("d/m/Y",$v['date_created'])?></a></li>
        <?php } ?>
    </ul>
    <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
</div>
<?php } ?>