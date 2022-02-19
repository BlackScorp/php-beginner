<nav>
                <ul>
                    <?php foreach($navigation as $navigationElement):?>
                        <li <?= ($navigationElement['active'])?'class="active"':'' ?>><a href="<?=$navigationElement['target']?>"><?=$navigationElement['label']?></a></li> 
                    <?php endforeach;?>
                </ul>
            </nav>