<ul>
    <?php
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '
        <li><a href="'.$key.'" class="current">'.$value.'</a></li>
        ';
    } else {
        echo '
        <li><a href="'.$key.'">'.$value.'</a></li>
    ';
    } 
    }
    ?>
</ul>
    </nav>
    </div> <!--en d header inner-->
    </header>

    